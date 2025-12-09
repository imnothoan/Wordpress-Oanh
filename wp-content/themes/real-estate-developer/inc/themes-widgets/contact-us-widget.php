<?php
/**
 * Custom Contact us Widget
 */

class Real_Estate_Developer_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Real_Estate_Developer_Contact_Widget', 
			__('VW Contact us', 'real-estate-developer'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'real-estate-developer' ), ) 
		);
	}
	
	public function widget( $real_estate_developer_args, $real_estate_developer_instance ) {
		?>
		<aside class="widget">
			<?php
			$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
			$real_estate_developer_phone = isset( $real_estate_developer_instance['phone'] ) ? $real_estate_developer_instance['phone'] : '';
			$real_estate_developer_email = isset( $real_estate_developer_instance['email'] ) ? $real_estate_developer_instance['email'] : '';
			$real_estate_developer_address = isset( $real_estate_developer_instance['address'] ) ? $real_estate_developer_instance['address'] : '';
			$real_estate_developer_timing = isset( $real_estate_developer_instance['timing'] ) ? $real_estate_developer_instance['timing'] : '';
			$real_estate_developer_longitude = isset( $real_estate_developer_instance['longitude'] ) ? $real_estate_developer_instance['longitude'] : '';
			$real_estate_developer_latitude = isset( $real_estate_developer_instance['latitude'] ) ? $real_estate_developer_instance['latitude'] : '';
			$real_estate_developer_contact_form = isset( $real_estate_developer_instance['contact_form'] ) ? $real_estate_developer_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($real_estate_developer_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($real_estate_developer_title); ?></h3><?php } ?>
		        <?php if(!empty($real_estate_developer_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'real-estate-developer'); ?></span><span class="custom_desc"><?php echo esc_html($real_estate_developer_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($real_estate_developer_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'real-estate-developer'); ?></span><span class="custom_desc"><?php echo esc_html($real_estate_developer_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($real_estate_developer_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'real-estate-developer'); ?></span><span class="custom_desc"><?php echo esc_html($real_estate_developer_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($real_estate_developer_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','real-estate-developer'); ?></span><span class="custom_desc"><?php echo esc_html($real_estate_developer_timing); ?></span></p><?php } ?>
		        <?php if(!empty($real_estate_developer_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($real_estate_developer_longitude); ?>,<?php echo esc_html($real_estate_developer_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($real_estate_developer_contact_form) ){ ?><?php echo do_shortcode($real_estate_developer_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $real_estate_developer_instance ) {

		$real_estate_developer_title= ''; $real_estate_developer_phone= ''; $real_estate_developer_email = ''; $real_estate_developer_address = ''; $real_estate_developer_timing = ''; $real_estate_developer_longitude = ''; $real_estate_developer_latitude = ''; $real_estate_developer_contact_form = ''; 
		
		$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
		$real_estate_developer_phone = isset( $real_estate_developer_instance['phone'] ) ? $real_estate_developer_instance['phone'] : '';
		$real_estate_developer_email = isset( $real_estate_developer_instance['email'] ) ? $real_estate_developer_instance['email'] : '';
		$real_estate_developer_address = isset( $real_estate_developer_instance['address'] ) ? $real_estate_developer_instance['address'] : '';
		$real_estate_developer_timing = isset( $real_estate_developer_instance['timing'] ) ? $real_estate_developer_instance['timing'] : '';
		$real_estate_developer_longitude = isset( $real_estate_developer_instance['longitude'] ) ? $real_estate_developer_instance['longitude'] : '';
		$real_estate_developer_latitude = isset( $real_estate_developer_instance['latitude'] ) ? $real_estate_developer_instance['latitude'] : '';
		$real_estate_developer_contact_form = isset( $real_estate_developer_instance['contact_form'] ) ? $real_estate_developer_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','real-estate-developer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $real_estate_developer_new_instance, $real_estate_developer_old_instance ) {
		$real_estate_developer_instance = array();	
		$real_estate_developer_instance['title'] = (!empty($real_estate_developer_new_instance['title']) ) ? strip_tags($real_estate_developer_new_instance['title']) : '';
		$real_estate_developer_instance['phone'] = (!empty($real_estate_developer_new_instance['phone']) ) ? real_estate_developer_sanitize_phone_number($real_estate_developer_new_instance['phone']) : '';
		$real_estate_developer_instance['email'] = (!empty($real_estate_developer_new_instance['email']) ) ? sanitize_email($real_estate_developer_new_instance['email']) : '';
		$real_estate_developer_instance['address'] = (!empty($real_estate_developer_new_instance['address']) ) ? strip_tags($real_estate_developer_new_instance['address']) : '';
		$real_estate_developer_instance['timing'] = (!empty($real_estate_developer_new_instance['timing']) ) ? strip_tags($real_estate_developer_new_instance['timing']) : '';
		$real_estate_developer_instance['longitude'] = (!empty($real_estate_developer_new_instance['longitude']) ) ? strip_tags($real_estate_developer_new_instance['longitude']) : '';
		$real_estate_developer_instance['latitude'] = (!empty($real_estate_developer_new_instance['latitude']) ) ? strip_tags($real_estate_developer_new_instance['latitude']) : '';
		$real_estate_developer_instance['contact_form'] = (!empty($real_estate_developer_new_instance['contact_form']) ) ? strip_tags($real_estate_developer_new_instance['contact_form']) : '';
        
		return $real_estate_developer_instance;
	}
}
// Register and load the widget
function real_estate_developer_contact_custom_load_widget() {
	register_widget( 'Real_Estate_Developer_Contact_Widget' );
}
add_action( 'widgets_init', 'real_estate_developer_contact_custom_load_widget' );