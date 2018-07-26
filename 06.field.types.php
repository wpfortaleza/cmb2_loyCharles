<?php

//======================================================================
// FIELD TYPES
//======================================================================

# https://github.com/CMB2/CMB2/wiki/Field-Types

// Text Area
$cmb->add_field( array(
	'name' => 'Text Area',
	'id' => 'field_type_textarea',
	'type' => 'textarea'
) );

// Text Area Code
$cmb->add_field( array(
	'name' => 'Text Area Code',
	'id' => 'field_type_textareacode',
	'type' => 'textarea_code'
) );

// Date Picker
$cmb->add_field( array(
	'name' => 'Date Picker',
	'id'   => 'field_type_textdate_timestamp',
	'type' => 'text_date',
	'date_format' => 'l jS \of F Y',
) );

// Color Picker
$cmb->add_field( array(
	'name'    => 'Color Picker',
	'id'      => 'field_type_colorpicker',
	'type'    => 'colorpicker'
) );

// Checkbox
$cmb->add_field( array(
	'name' => 'Checkbox',
	'id'   => 'field_type_checkbox',
	'type' => 'checkbox',
) );

// Multi Checkbox
$cmb->add_field( array(
	'name'    => 'Multi Checkbox',
	'id'      => 'field_type_multicheckbox',
	'type'    => 'multicheck',
	'options' => array(
		'check1' => 'Check One',
		'check2' => 'Check Two',
		'check3' => 'Check Three',
	),
) );

// Radio
$cmb->add_field( array(
	'name'             => 'Radio',
	'id'               => 'field_type_radio',
	'type'             => 'radio',
	'show_option_none' => true,
	'options'          => array(
		'standard' => 'Option One',
		'custom'   => 'Option Two',
		'none'     => 'Option Three',
	),
	'default'          => 'custom',
) );

// Select
$cmb->add_field( array(
	'name'             => 'Select',
	'id'               => 'field_type_select',
	'type'             => 'select',
	'show_option_none' => true,
	'default'          => 'custom',
	'options'          => array(
		'standard' => __( 'Option One', 'cmb2' ),
		'custom'   => __( 'Option Two', 'cmb2' ),
		'none'     => __( 'Option Three', 'cmb2' ),
	),
) );

// Taxonomy Select
$cmb->add_field( array(
	'name'           => 'Taxonomy Select',
	'id'             => 'field_type_select',
	'taxonomy'       => 'category',
	'type'           => 'taxonomy_select',
	'remove_default' => 'true'
) );

// oEmbed
$cmb->add_field( array(
    'name' => 'oEmbed',
    'id'   => 'field_type_embed',
    'type' => 'oembed',
) );
# https://www.youtube.com/watch?v=5KSloUR35nM
# https://vimeo.com/81625407

// outpu oEmbed
$url = esc_url( get_post_meta( get_the_ID(), 'field_type_embed', 1 ) );
echo wp_oembed_get( $url );