<?php
/**
 * Custom About us Widget
 */

class Real_Estate_Developer_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Real_Estate_Developer_About_Widget',
			__('VW About us', 'real-estate-developer'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'real-estate-developer' ), ) 
		);
	}
	
	public function widget( $real_estate_developer_args, $real_estate_developer_instance ) {
		?>
		<aside class="widget">
			<?php
			$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
			$real_estate_developer_author = isset( $real_estate_developer_instance['author'] ) ? $real_estate_developer_instance['author'] : '';
			$real_estate_developer_designation = isset( $real_estate_developer_instance['designation'] ) ? $real_estate_developer_instance['designation'] : '';
			$real_estate_developer_description = isset( $real_estate_developer_instance['description'] ) ? $real_estate_developer_instance['description'] : '';
			$real_estate_developer_read_more_url = isset( $real_estate_developer_instance['read_more_url'] ) ? $real_estate_developer_instance['read_more_url'] : '';
			$real_estate_developer_read_more_text = isset( $real_estate_developer_instance['read_more_text'] ) ? $real_estate_developer_instance['read_more_text'] : '';
			$real_estate_developer_upload_image = isset( $real_estate_developer_instance['upload_image'] ) ? $real_estate_developer_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($real_estate_developer_title) ){ ?><h3 class="custom_title"><?php echo esc_html($real_estate_developer_title); ?></h3><?php } ?>
		        <?php if($real_estate_developer_upload_image): ?>
	      			<img src="<?php echo esc_url($real_estate_developer_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($real_estate_developer_author) ){ ?><p class="custom_author"><?php echo esc_html($real_estate_developer_author); ?></p><?php } ?>
				<?php if(!empty($real_estate_developer_designation) ){ ?><p class="custom_designation"><?php echo esc_html($real_estate_developer_designation); ?></p><?php } ?>
		        <?php if(!empty($real_estate_developer_description) ){ ?><p class="custom_desc"><?php echo esc_html($real_estate_developer_description); ?></p><?php } ?>
		        <?php if(!empty($real_estate_developer_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($real_estate_developer_read_more_url); ?>"><?php if(!empty($real_estate_developer_read_more_text) ){ ?><?php echo esc_html($real_estate_developer_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $real_estate_developer_instance ) {	

		$real_estate_developer_title= ''; $real_estate_developer_author = ''; $real_estate_developer_designation = ''; $real_estate_developer_description= ''; $real_estate_developer_read_more_text = ''; $real_estate_developer_read_more_url = ''; $real_estate_developer_upload_image = '';

		$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
		$real_estate_developer_author = isset( $real_estate_developer_instance['author'] ) ? $real_estate_developer_instance['author'] : '';
		$real_estate_developer_designation = isset( $real_estate_developer_instance['designation'] ) ? $real_estate_developer_instance['designation'] : '';
		$real_estate_developer_description = isset( $real_estate_developer_instance['description'] ) ? $real_estate_developer_instance['description'] : '';
		$real_estate_developer_read_more_url = isset( $real_estate_developer_instance['read_more_url'] ) ? $real_estate_developer_instance['read_more_url'] : '';
		$real_estate_developer_read_more_text = isset( $real_estate_developer_instance['read_more_text'] ) ? $real_estate_developer_instance['read_more_text'] : '';
		$real_estate_developer_upload_image = isset( $real_estate_developer_instance['upload_image'] ) ? $real_estate_developer_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','real-estate-developer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','real-estate-developer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','real-estate-developer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','real-estate-developer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','real-estate-developer'); ?></label>
		<?php
			if ( $real_estate_developer_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($real_estate_developer_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $real_estate_developer_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $real_estate_developer_new_instance, $real_estate_developer_old_instance ) {
		$real_estate_developer_instance = array();	
		$real_estate_developer_instance['title'] = (!empty($real_estate_developer_new_instance['title']) ) ? strip_tags($real_estate_developer_new_instance['title']) : '';
		$real_estate_developer_instance['author'] = ( ! empty( $real_estate_developer_new_instance['author'] ) ) ? strip_tags($real_estate_developer_new_instance['author']) : '';
		$real_estate_developer_instance['designation'] = ( ! empty( $real_estate_developer_new_instance['designation'] ) ) ? strip_tags($real_estate_developer_new_instance['designation']) : '';
		$real_estate_developer_instance['description'] = (!empty($real_estate_developer_new_instance['description']) ) ? strip_tags($real_estate_developer_new_instance['description']) : '';
        $real_estate_developer_instance['read_more_text'] = (!empty($real_estate_developer_new_instance['read_more_text']) ) ? strip_tags($real_estate_developer_new_instance['read_more_text']) : '';
        $real_estate_developer_instance['read_more_url'] = (!empty($real_estate_developer_new_instance['read_more_url']) ) ? esc_url_raw($real_estate_developer_new_instance['read_more_url']) : '';
        $real_estate_developer_instance['upload_image'] = ( ! empty( $real_estate_developer_new_instance['upload_image'] ) ) ? strip_tags($real_estate_developer_new_instance['upload_image']) : '';

		return $real_estate_developer_instance;
	}
}
// Register and load the widget
function real_estate_developer_about_custom_load_widget() {
	register_widget( 'Real_Estate_Developer_About_Widget' );
}
add_action( 'widgets_init', 'real_estate_developer_about_custom_load_widget' );