<?php
/**
 * The template for displaying search forms in real-estate-developer
 *
 * @package Real Estate Developer 
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','real-estate-developer' ); ?>" value="<?php echo esc_attr( get_search_query()); ?>" name="s">
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'real-estate-developer' ); ?></span>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','real-estate-developer' ); ?>">
	</label>
</form>