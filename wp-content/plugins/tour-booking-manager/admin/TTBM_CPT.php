<?php
	if (!defined('ABSPATH')) {
		die;
	} // Cannot access pages directly.

	if (!class_exists('TTBM_CPT')) {
		class TTBM_CPT {
			public function __construct() {
				add_action('init', [$this, 'ttbm_cpt']);
				add_filter('manage_ttbm_tour_posts_columns', [$this, 'set_custom_columns']);
				add_action('manage_ttbm_tour_posts_custom_column', [$this, 'custom_column_data'], 10, 2);
			}

			public function ttbm_cpt() {
				$tour_label = TTBM_Function::get_name();   // Ví dụ: "Tour", "Du lịch", "Chuyến đi"…
				$tour_slug  = TTBM_Function::get_slug();
				$tour_icon  = TTBM_Function::get_icon();

				$labels = [
					'name'                  => $tour_label,
					'singular_name'         => $tour_label,
					'menu_name'             => $tour_label,
					'name_admin_bar'        => $tour_label,

					// Đã thay hết sprintf() để tránh lỗi bản dịch tiếng Việt
					'archives'              => $tour_label . ' - Danh sách',
					'attributes'            => $tour_label . ' - Thuộc tính',
					'parent_item_colon'     => $tour_label . ' cha:',
					'all_items'             => 'Tất cả ' . $tour_label,
					'add_new_item'          => 'Thêm mới ' . $tour_label,
					'add_new'               => 'Thêm mới',
					'new_item'              => $tour_label . ' mới',
					'edit_item'             => 'Sửa ' . $tour_label,
					'update_item'           => 'Cập nhật ' . $tour_label,
					'view_item'             => 'Xem ' . $tour_label,
					'view_items'            => 'Xem ' . $tour_label,
					'search_items'          => 'Tìm kiếm ' . $tour_label,
					'not_found'             => 'Không tìm thấy ' . $tour_label,
					'not_found_in_trash'    => 'Không tìm thấy trong thùng rác',
					'featured_image'        => 'Ảnh đại diện ' . $tour_label,
					'set_featured_image'    => 'Chọn ảnh đại diện',
					'remove_featured_image' => 'Xóa ảnh đại diện',
					'use_featured_image'    => 'Sử dụng làm ảnh đại diện',
					'insert_into_item'      => 'Chèn vào ' . $tour_label,
					'uploaded_to_this_item' => 'Đã tải lên ' . $tour_label . ' này',
					'items_list'            => 'Danh sách ' . $tour_label,
					'items_list_navigation' => 'Điều hướng danh sách ' . $tour_label,
					'filter_items_list'     => 'Lọc danh sách ' . $tour_label,
				];

				$args = [
					'public'       => true,
					'labels'       => $labels,
					'menu_icon'    => $tour_icon,
					'supports'     => ['title', 'thumbnail', 'editor', 'excerpt'],
					'rewrite'      => ['slug' => $tour_slug],
					'show_in_rest' => true,
					'capability_type' => 'post',
					'has_archive'  => true,
				];
				register_post_type('ttbm_tour', $args);

				// Các CPT phụ giữ nguyên vì không dùng %1$s
				register_post_type('ttbm_ticket_types', array(
					'public'        => true,
					'label'         => esc_html__('Ticket Types', 'tour-booking-manager'),
					'supports'      => array('title'),
					'show_in_menu'  => 'edit.php?post_type=ttbm_tour',
					'capability_type' => 'post',
				));

				register_post_type('ttbm_hotel', array(
					'public'       => true,
					'label'        => esc_html__('Hotel', 'tour-booking-manager'),
					'supports'     => ['title', 'thumbnail', 'editor'],
					'show_in_menu' => false,
					'capability_type' => 'post',
				));

				register_post_type('ttbm_places', array(
					'public'       => true,
					'label'        => esc_html__('Places', 'tour-booking-manager'),
					'supports'     => ['title', 'thumbnail', 'editor'],
					'show_in_menu' => false,
					'capability_type' => 'post',
				));

				register_post_type('ttbm_guide', array(
					'public'       => true,
					'label'        => esc_html__('Guide Information', 'tour-booking-manager'),
					'supports'     => ['title', 'thumbnail', 'editor'],
					'show_in_menu' => 'edit.php?post_type=ttbm_tour',
					'capability_type' => 'post',
				));

				register_post_type('ttbm_hotel_booking', array(
					'labels'       => array(
						'name'          => __('Hotel Bookings', 'tour-booking-manager'),
						'singular_name' => __('Hotel Booking', 'tour-booking-manager'),
					),
					'public'       => true,
					'has_archive'  => true,
					'show_ui'      => false,
					'show_in_menu' => true,
					'supports'     => array('title', 'editor', 'custom-fields'),
				));
			}

			public function set_custom_columns($columns) {
				unset($columns['date']);
				unset($columns['taxonomy-ttbm_tour_features_list']);
				unset($columns['taxonomy-ttbm_tour_tag']);
				unset($columns['taxonomy-ttbm_tour_activities']);
				unset($columns['taxonomy-ttbm_tour_location']);

				$columns['ttbm_location']   = esc_html__('Location', 'tour-booking-manager');
				$columns['ttbm_start_date'] = esc_html__('Upcoming Date', 'tour-booking-manager');
				$columns['ttbm_end_date']   = esc_html__('Reg. End Date', 'tour-booking-manager');

				return $columns;
			}

			public function custom_column_data($column, $post_id) {
				TTBM_Function::update_upcoming_date_month($post_id);
				$ttbm_travel_type = TTBM_Global_Function::get_post_info($post_id, 'ttbm_travel_type');

				switch ($column) {
					case 'ttbm_location':
						echo esc_html(TTBM_Function::get_full_location($post_id));
						break;

					case 'ttbm_status':
						echo 'status';
						break;

					case 'ttbm_start_date':
						$upcoming_date = TTBM_Global_Function::get_post_info($post_id, 'ttbm_upcoming_date');
						if ($upcoming_date) {
							echo '<span class="textSuccess">' . esc_html(TTBM_Global_Function::date_format($upcoming_date)) . '</span>';
						} else {
							echo '<span class="textWarning">' . esc_html__('Expired !', 'tour-booking-manager') . '</span>';
						}
						break;

					case 'ttbm_end_date':
						if ($ttbm_travel_type == 'fixed') {
							echo esc_html(TTBM_Global_Function::date_format(TTBM_Function::get_reg_end_date($post_id)));
						}
						break;
				}
			}
		}
		new TTBM_CPT();
	}