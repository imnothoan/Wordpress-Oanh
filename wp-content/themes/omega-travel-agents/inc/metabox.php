<?php
/**
* Sidebar Metabox.
*
* @package Omega Travel Agents
*/

$omega_travel_agents_post_sidebar_fields = array(
    'global-sidebar' => array(
        'id'        => 'post-global-sidebar',
        'value' => 'global-sidebar',
        'label' => esc_html__( 'Global sidebar', 'omega-travel-agents' ),
    ),
    'right-sidebar' => array(
        'id'        => 'post-left-sidebar',
        'value' => 'right-sidebar',
        'label' => esc_html__( 'Right sidebar', 'omega-travel-agents' ),
    ),
    'left-sidebar' => array(
        'id'        => 'post-right-sidebar',
        'value'     => 'left-sidebar',
        'label'     => esc_html__( 'Left sidebar', 'omega-travel-agents' ),
    ),
    'no-sidebar' => array(
        'id'        => 'post-no-sidebar',
        'value'     => 'no-sidebar',
        'label'     => esc_html__( 'No sidebar', 'omega-travel-agents' ),
    ),
);

function omega_travel_agents_category_add_form_fields_callback() {
    $omega_travel_agents_image_id = null; ?>
    <div id="category_custom_image"></div>
    <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
    <div style="margin-bottom: 20px;">
        <span><?php esc_html_e('Category Image','omega-travel-agents'); ?></span>
        <a href="#" class="button custom-button-upload" id="custom-button-upload"><?php esc_html_e('Upload Image','omega-travel-agents'); ?></a>
        <a href="#" class="button custom-button-remove" id="custom-button-remove" style="display: none"><?php esc_html_e('Remove Image','omega-travel-agents'); ?></a>
    </div>
    <?php 
}
add_action( 'category_add_form_fields', 'omega_travel_agents_category_add_form_fields_callback' );

function omega_travel_agents_custom_create_term_callback($omega_travel_agents_term_id) {
    // add term meta data
    add_term_meta(
        $omega_travel_agents_term_id,
        'term_image',
        esc_url($_REQUEST['category_custom_image_url'])
    );
}
add_action( 'create_term', 'omega_travel_agents_custom_create_term_callback' );

function omega_travel_agents_category_edit_form_fields_callback($ttObj, $taxonomy) {
    $omega_travel_agents_term_id = $ttObj->term_id;
    $omega_travel_agents_image = '';
    $omega_travel_agents_image = get_term_meta( $omega_travel_agents_term_id, 'term_image', true ); ?>
    <tr class="form-field term-image-wrap">
        <th scope="row"><label for="image"><?php esc_html_e('Image','omega-travel-agents'); ?></label></th>
        <td>
        <?php if ( $omega_travel_agents_image ): ?>
            <span id="category_custom_image">
               <img src="<?php echo $omega_travel_agents_image; ?>" style="width: 100%"/>
            </span>
            <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
            <span>
                <a href="#" class="button custom-button-upload" id="custom-button-upload" style="display: none"><?php esc_html_e('Upload Image','omega-travel-agents'); ?></a>
                <a href="#" class="button custom-button-remove"><?php esc_html_e('Remove Image','omega-travel-agents'); ?></a>                    
            </span>
        <?php else: ?>
            <span id="category_custom_image"></span>
            <input type="hidden" id="category_custom_image_url" name="category_custom_image_url">
            <span>
               <a href="#" class="button custom-button-upload" id="custom-button-upload"><?php esc_html_e('Upload Image','omega-travel-agents'); ?></a>
               <a href="#" class="button custom-button-remove" style="display: none"><?php esc_html_e('Remove Image','omega-travel-agents'); ?></a>
            </span>
            <?php endif; ?>
        </td>
    </tr>
    <?php
}
add_action ( 'category_edit_form_fields', 'omega_travel_agents_category_edit_form_fields_callback', 10, 2 );

function omega_travel_agents_edit_term_callback($omega_travel_agents_term_id) {
    $omega_travel_agents_image = '';
    $omega_travel_agents_image = get_term_meta( $omega_travel_agents_term_id, 'term_image' );
    if ( $omega_travel_agents_image )
    update_term_meta( 
        $omega_travel_agents_term_id, 
        'term_image', 
        esc_url( $_POST['category_custom_image_url']) );
    else
    add_term_meta( 
        $omega_travel_agents_term_id, 
        'term_image', 
        esc_url( $_POST['category_custom_image_url']) );
}
add_action( 'edit_term', 'omega_travel_agents_edit_term_callback' );