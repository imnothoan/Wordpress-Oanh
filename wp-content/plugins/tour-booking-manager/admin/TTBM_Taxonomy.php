<?php
	if ( ! defined( 'ABSPATH' ) ) {
		die;
	} // Cannot access pages directly.

	if ( ! class_exists( 'TTBM_Taxonomy' ) ) {
		class TTBM_Taxonomy {
			public function __construct() {
				add_action( 'init', [ $this, 'ttbm_taxonomy' ] );
			}

			public function ttbm_taxonomy() {
				$tour_label      = TTBM_Function::get_name();         // Ví dụ: Tour, Du lịch…
				$tour_cat_label  = TTBM_Function::get_category_label(); // Danh mục tour
				$tour_cat_slug   = TTBM_Function::get_category_slug();
				$tour_org_label  = TTBM_Function::get_organizer_label(); // Đơn vị tổ chức
				$tour_org_slug   = TTBM_Function::get_organizer_slug();

				/* ==================== TOUR CATEGORY ==================== */
				$labels = [
					'name'                       => $tour_label . ' ' . $tour_cat_label,
					'singular_name'              => $tour_label . ' ' . $tour_cat_label,
					'menu_name'                  => $tour_cat_label,
					'all_items'                  => 'Tất cả ' . $tour_cat_label,
					'parent_item'                => 'Danh mục cha',
					'parent_item_colon'          => 'Danh mục cha:',
					'new_item_name'              => 'Tên ' . $tour_cat_label . ' mới',
					'add_new_item'               => 'Thêm ' . $tour_cat_label . ' mới',
					'edit_item'                  => 'Sửa ' . $tour_cat_label,
					'update_item'                => 'Cập nhật ' . $tour_cat_label,
					'view_item'                  => 'Xem ' . $tour_cat_label,
					'separate_items_with_commas' => 'Phân cách các ' . $tour_cat_label . ' bằng dấu phẩy',
					'add_or_remove_items'        => 'Thêm hoặc xóa ' . $tour_cat_label,
					'choose_from_most_used'      => 'Chọn từ những mục thường dùng',
					'popular_items'              => $tour_cat_label . ' phổ biến',
					'search_items'               => 'Tìm kiếm ' . $tour_cat_label,
					'not_found'                  => 'Không tìm thấy',
					'no_terms'                   => 'Không có ' . $tour_cat_label,
					'items_list'                 => 'Danh sách ' . $tour_cat_label,
					'items_list_navigation'      => 'Điều hướng danh sách ' . $tour_cat_label,
				];

				register_taxonomy( 'ttbm_tour_cat', 'ttbm_tour', [
					'hierarchical'          => true,
					'public'                => true,
					'labels'                => $labels,
					'show_ui'               => true,
					'show_in_menu'          => false,
					'show_admin_column'     => true,
					'update_count_callback' => '_update_post_term_count',
					'query_var'             => true,
					'rewrite'               => [ 'slug' => $tour_cat_slug ],
					'show_in_rest'          => true,
					'rest_base'             => 'ttbm_tour_cat',
				] );

				/* ==================== TOUR ORGANIZER ==================== */
				$labels_org = [
					'name'                       => $tour_org_label,
					'singular_name'              => $tour_org_label,
					'menu_name'                  => $tour_org_label,
					'all_items'                  => 'Tất cả ' . $tour_org_label,
					'parent_item'                => $tour_org_label . ' cha',
					'parent_item_colon'          => $tour_org_label . ' cha:',
					'new_item_name'              => 'Tên ' . $tour_org_label . ' mới',
					'add_new_item'               => 'Thêm ' . $tour_org_label . ' mới',
					'edit_item'                  => 'Sửa ' . $tour_org_label,
					'update_item'                => 'Cập nhật ' . $tour_org_label,
					'view_item'                  => 'Xem ' . $tour_org_label,
					'separate_items_with_commas' => 'Phân cách các ' . $tour_org_label . ' bằng dấu phẩy',
					'add_or_remove_items'        => 'Thêm hoặc xóa ' . $tour_org_label,
					'choose_from_most_used'      => 'Chọn từ những mục thường dùng',
					'popular_items'              => $tour_org_label . ' phổ biến',
					'search_items'               => 'Tìm kiếm ' . $tour_org_label,
					'not_found'                  => 'Không tìm thấy',
					'no_terms'                   => 'Không có ' . $tour_org_label,
					'items_list'                 => 'Danh sách ' . $tour_org_label,
					'items_list_navigation'      => 'Điều hướng danh sách ' . $tour_org_label,
				];

				register_taxonomy( 'ttbm_tour_org', 'ttbm_tour', [
					'hierarchical'          => true,
					'public'                => true,
					'labels'                => $labels_org,
					'show_ui'               => true,
					'show_admin_column'     => true,
					'show_in_menu'          => false,
					'update_count_callback' => '_update_post_term_count',
					'query_var'             => true,
					'rewrite'               => [ 'slug' => $tour_org_slug ],
					'show_in_rest'          => true,
					'rest_base'             => 'ttbm_org',
				] );

				/* ==================== LOCATION ==================== */
				register_taxonomy( 'ttbm_tour_location', 'ttbm_tour', [
					'hierarchical'      => true,
					'public'            => true,
					'labels'            => [
						'name'          => __( 'Location', 'tour-booking-manager' ),
						'singular_name' => __( 'Location', 'tour-booking-manager' ),
						'menu_name'     => __( 'Location', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => false,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'location' ],
					'show_in_rest'      => true,
					'meta_box_cb'       => false,
					'rest_base'         => 'location',
				] );

				/* ==================== FEATURES LIST ==================== */
				register_taxonomy( 'ttbm_tour_features_list', 'ttbm_tour', [
					'hierarchical'      => true,
					'public'            => true,
					'labels'            => [
						'name'          => __( 'Features List', 'tour-booking-manager' ),
						'singular_name' => __( 'Features List', 'tour-booking-manager' ),
						'menu_name'     => __( 'Features List', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => false,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'features-list' ],
					'show_in_rest'      => true,
					'meta_box_cb'       => false,
					'rest_base'         => 'features_list',
				] );

				/* ==================== HOTEL FEATURES & ACTIVITIES ==================== */
				register_taxonomy( 'ttbm_hotel_features_list', 'ttbm_hotel', [
					'hierarchical'      => true,
					'public'            => true,
					'labels'            => [
						'name'          => __( 'Hotel Features', 'tour-booking-manager' ),
						'singular_name' => __( 'Hotel Features', 'tour-booking-manager' ),
						'menu_name'     => __( 'Hotel Features', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'hotel-features-list' ],
					'show_in_rest'      => true,
					'rest_base'         => 'ttbm_hotel_features_list',
				] );

				register_taxonomy( 'ttbm_hotel_activities_list', 'ttbm_hotel', [
					'hierarchical'      => true,
					'public'            => true,
					'labels'            => [
						'name'          => __( 'Hotel Activities', 'tour-booking-manager' ),
						'singular_name' => __( 'Hotel Activities', 'tour-booking-manager' ),
						'menu_name'     => __( 'Hotel Activities', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'hotel-activity-list' ],
					'show_in_rest'      => true,
					'rest_base'         => 'ttbm_hotel_activity_list',
				] );

				/* ==================== TAGS & ACTIVITIES ==================== */
				register_taxonomy( 'ttbm_tour_tag', [ 'ttbm_tour' ], [
					'hierarchical' => false,
					'labels'       => [
						'name'          => __( 'Tags', 'tour-booking-manager' ),
						'singular_name' => __( 'Tags', 'tour-booking-manager' ),
						'search_items'  => __( 'Search Tags', 'tour-booking-manager' ),
						'all_items'     => __( 'All Tags', 'tour-booking-manager' ),
						'edit_item'     => __( 'Edit Tag', 'tour-booking-manager' ),
						'update_item'   => __( 'Update Tag', 'tour-booking-manager' ),
						'add_new_item'  => __( 'Add New Tag', 'tour-booking-manager' ),
						'new_item_name' => __( 'New Tag Name', 'tour-booking-manager' ),
						'menu_name'     => __( 'Tags', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => false,
					'show_in_rest'      => true,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'ttbm_tour_tag' ],
				] );

				register_taxonomy( 'ttbm_tour_activities', [ 'ttbm_tour' ], [
					'hierarchical'      => true,
					'public'            => true,
					'labels'            => [
						'name'          => esc_html__( 'Activities Type', 'tour-booking-manager' ),
						'singular_name' => esc_html__( 'Activities Type', 'tour-booking-manager' ),
						'menu_name'     => esc_html__( 'Activities Type', 'tour-booking-manager' ),
					],
					'show_ui'           => true,
					'show_in_menu'      => false,
					'show_admin_column' => true,
					'query_var'         => true,
					'rewrite'           => [ 'slug' => 'ttbm_tour_activities' ],
					'show_in_rest'      => true,
					'rest_base'         => 'ttbm_tour_activities',
					'meta_box_cb'       => false,
				] );

				new TTBM_Dummy_Import();
				flush_rewrite_rules();
			}
		}
		new TTBM_Taxonomy();
	}