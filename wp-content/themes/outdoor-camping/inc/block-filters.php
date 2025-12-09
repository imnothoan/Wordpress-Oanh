<?php
/**
 * Block Filters
 *
 * @package outdoor_camping
 * @since 1.0
 */

function outdoor_camping_block_wrapper( $outdoor_camping_block_content, $outdoor_camping_block ) {

	if ( 'core/button' === $outdoor_camping_block['blockName'] ) {
		
		if( isset( $outdoor_camping_block['attrs']['className'] ) && strpos( $outdoor_camping_block['attrs']['className'], 'has-arrow' ) ) {
			$outdoor_camping_block_content = str_replace( '</a>', outdoor_camping_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $outdoor_camping_block_content );
			return $outdoor_camping_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $outdoor_camping_block['blockName'] ) {
			if( 'post_tag' === $outdoor_camping_block['attrs']['term'] ) {
				$outdoor_camping_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $outdoor_camping_block_content );
			}

			if( 'category' ===  $outdoor_camping_block['attrs']['term'] ) {
				$outdoor_camping_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $outdoor_camping_block_content );
			}
			return $outdoor_camping_block_content;
		}
		if ( 'core/post-date' === $outdoor_camping_block['blockName'] ) {
			$outdoor_camping_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $outdoor_camping_block_content );
			return $outdoor_camping_block_content;
		}
		if ( 'core/post-author' === $outdoor_camping_block['blockName'] ) {
			$outdoor_camping_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $outdoor_camping_block_content );
			return $outdoor_camping_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $outdoor_camping_block['blockName'] ) {
			if( isset( $outdoor_camping_block['attrs']['type'] ) && 'previous' === $outdoor_camping_block['attrs']['type'] ) {
				$outdoor_camping_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $outdoor_camping_block_content );
			}
			else {
				$outdoor_camping_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . outdoor_camping_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $outdoor_camping_block_content );
			}
			return $outdoor_camping_block_content;
		}
		if ( 'core/post-date' === $outdoor_camping_block['blockName'] ) {
            $outdoor_camping_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . outdoor_camping_get_svg( array( 'icon' => 'calendar' ) ), $outdoor_camping_block_content );
            return $outdoor_camping_block_content;
        }
		if ( 'core/post-author' === $outdoor_camping_block['blockName'] ) {
            $outdoor_camping_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . outdoor_camping_get_svg( array( 'icon' => 'user' ) ), $outdoor_camping_block_content );
            return $outdoor_camping_block_content;
        }

	}
    return $outdoor_camping_block_content;
}
	
add_filter( 'render_block', 'outdoor_camping_block_wrapper', 10, 2 );
