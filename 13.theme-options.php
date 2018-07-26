<?php

//======================================================================
// Theme Options
//======================================================================

add_action( 'cmb2_admin_init', 'theme_options_metabox' );

function theme_options_metabox() {

    $cmb_options = new_cmb2_box( array(
		'id'              => 'myprefix_option_metabox',
		'title'           => 'Site Options',
		'object_types'    => array( 'options-page' ),
        'option_key'      => 'myprefix_options',
        'icon_url'        => 'dashicons-palmtree',
        'menu_title'      => 'Options',
        'parent_slug'     => 'themes.php',
        'position'        => 1,
        'save_button'     => 'Salvar Opções',
    ) );

    $cmb->add_field( array(
        'name'    => 'Texto',
        'id'      => 'theme_option_text',
        'type'    => 'text',
    ) );

}

function myprefix_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'myprefix_options', $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'myprefix_options', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}

// output
echo myprefix_get_option( 'id_field' );

# https://developer.wordpress.org/resource/dashicons/