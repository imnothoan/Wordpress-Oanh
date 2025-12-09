<?php
/**
 * Custom Social Widget
 */

class Real_Estate_Developer_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Real_Estate_Developer_Social_Widget',
			__('VW Social Icon', 'real-estate-developer'),
			array( 'description' => __( 'Widget for Social icons section', 'real-estate-developer' ), ) 
		);
	}

	public function widget( $real_estate_developer_args, $real_estate_developer_instance ) { ?>
		<div class="widget">
			<?php
			$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
			$real_estate_developer_facebook = isset( $real_estate_developer_instance['facebook'] ) ? $real_estate_developer_instance['facebook'] : '';
			$real_estate_developer_twitter = isset( $real_estate_developer_instance['twitter'] ) ? $real_estate_developer_instance['twitter'] : '';
			$real_estate_developer_instagram = isset( $real_estate_developer_instance['instagram'] ) ? $real_estate_developer_instance['instagram'] : '';
			$real_estate_developer_youtube = isset( $real_estate_developer_instance['youtube'] ) ? $real_estate_developer_instance['youtube'] : '';
			$real_estate_developer_dribbal = isset( $real_estate_developer_instance['dribbal'] ) ? $real_estate_developer_instance['dribbal'] : '';
			$real_estate_developer_linkedin = isset( $real_estate_developer_instance['linkedin'] ) ? $real_estate_developer_instance['linkedin'] : '';
			$real_estate_developer_pinterest = isset( $real_estate_developer_instance['pinterest'] ) ? $real_estate_developer_instance['pinterest'] : '';
			$real_estate_developer_tumblr = isset( $real_estate_developer_instance['tumblr'] ) ? $real_estate_developer_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($real_estate_developer_title) ){ ?><h3 class="custom_title"><?php echo esc_html($real_estate_developer_title); ?></h3><?php } ?>
	        <?php if(!empty($real_estate_developer_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($real_estate_developer_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','real-estate-developer' );?></span></a></p><?php } ?>

	        <?php if(!empty($real_estate_developer_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($real_estate_developer_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','real-estate-developer' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($real_estate_developer_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($real_estate_developer_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','real-estate-developer' );?></span></a></p><?php } ?>

	        <?php if(!empty($real_estate_developer_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($real_estate_developer_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','real-estate-developer' );?></span></a></p><?php } ?>

	        <?php if(!empty($real_estate_developer_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($real_estate_developer_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','real-estate-developer' );?></span></a></p><?php } ?>

	        <?php if(!empty($real_estate_developer_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($real_estate_developer_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','real-estate-developer' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($real_estate_developer_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($real_estate_developer_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','real-estate-developer' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($real_estate_developer_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($real_estate_developer_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','real-estate-developer' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $real_estate_developer_instance ) {

		$real_estate_developer_title= ''; $real_estate_developer_facebook = ''; $real_estate_developer_twitter = ''; $real_estate_developer_linkedin = '';  $real_estate_developer_pinterest = '';$real_estate_developer_tumblr = ''; $real_estate_developer_instagram = ''; $real_estate_developer_youtube = ''; 

		$real_estate_developer_title = isset( $real_estate_developer_instance['title'] ) ? $real_estate_developer_instance['title'] : '';
		$real_estate_developer_facebook = isset( $real_estate_developer_instance['facebook'] ) ? $real_estate_developer_instance['facebook'] : '';
		$real_estate_developer_instagram = isset( $real_estate_developer_instance['instagram'] ) ? $real_estate_developer_instance['instagram'] : '';
		$real_estate_developer_twitter = isset( $real_estate_developer_instance['twitter'] ) ? $real_estate_developer_instance['twitter'] : '';
		$real_estate_developer_youtube = isset( $real_estate_developer_instance['youtube'] ) ? $real_estate_developer_instance['youtube'] : '';
		$real_estate_developer_dribbal = isset( $real_estate_developer_instance['dribbal'] ) ? $real_estate_developer_instance['dribbal'] : '';
		$real_estate_developer_linkedin = isset( $real_estate_developer_instance['linkedin'] ) ? $real_estate_developer_instance['linkedin'] : '';
		$real_estate_developer_pinterest = isset( $real_estate_developer_instance['pinterest'] ) ? $real_estate_developer_instance['pinterest'] : '';
		$real_estate_developer_tumblr = isset( $real_estate_developer_instance['tumblr'] ) ? $real_estate_developer_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','real-estate-developer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','real-estate-developer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($real_estate_developer_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $real_estate_developer_new_instance, $real_estate_developer_old_instance ) {
		$real_estate_developer_instance = array();
		$real_estate_developer_instance['title'] = (!empty($real_estate_developer_new_instance['title']) ) ? strip_tags($real_estate_developer_new_instance['title']) : '';	
        $real_estate_developer_instance['facebook'] = (!empty($real_estate_developer_new_instance['facebook']) ) ? esc_url_raw($real_estate_developer_new_instance['facebook']) : '';
        $real_estate_developer_instance['twitter'] = (!empty($real_estate_developer_new_instance['twitter']) ) ? esc_url_raw($real_estate_developer_new_instance['twitter']) : '';
        $real_estate_developer_instance['instagram'] = (!empty($real_estate_developer_new_instance['instagram']) ) ? esc_url_raw($real_estate_developer_new_instance['instagram']) : '';
        $real_estate_developer_instance['youtube'] = (!empty($real_estate_developer_new_instance['youtube']) ) ? esc_url_raw($real_estate_developer_new_instance['youtube']) : '';
        $real_estate_developer_instance['dribbal'] = (!empty($real_estate_developer_new_instance['dribbal']) ) ? esc_url_raw($real_estate_developer_new_instance['dribbal']) : '';
        $real_estate_developer_instance['linkedin'] = (!empty($real_estate_developer_new_instance['linkedin']) ) ? esc_url_raw($real_estate_developer_new_instance['linkedin']) : '';
        $real_estate_developer_instance['pinterest'] = (!empty($real_estate_developer_new_instance['pinterest']) ) ? esc_url_raw($real_estate_developer_new_instance['pinterest']) : '';
        $real_estate_developer_instance['tumblr'] = (!empty($real_estate_developer_new_instance['tumblr']) ) ? esc_url_raw($real_estate_developer_new_instance['tumblr']) : '';
     	
     	
		return $real_estate_developer_instance;
	}
}

function real_estate_developer_custom_load_widget() {
	register_widget( 'Real_Estate_Developer_Social_Widget' );
}
add_action( 'widgets_init', 'real_estate_developer_custom_load_widget' );