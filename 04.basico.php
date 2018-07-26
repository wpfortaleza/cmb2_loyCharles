<?php

//======================================================================
// METABOX BÁSICO
//======================================================================

add_action( 'cmb2_admin_init', 'cmb2_basic_metaboxes' );

function cmb2_basic_metaboxes() {

    /**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'basic_metabox',
		'title'         => 'Metabox Simples',
		'object_types'  => array( 'page' ),
		'context'       => 'normal', // normal, side
		'priority'      => 'high', // high, low, default
		'closed'        => false,
    ) );

    // Regular text field
	$cmb->add_field( array(
		'name'       => 'Campo de Texto',
		'desc'       => 'Um campo de texto simples',
		'id'         => 'basic_metabox_field_text',
		'type'       => 'text',
	) );

}