<?php

//======================================================================
// Theme Options
//======================================================================

// Registrando o metabox
$cmb_options = new_cmb2_box( array(
    /** ... */
    'object_types' => array( 'options-page' ),
    'option_key'   => 'myprefix_options',
    'display_cb'   => 'yourprefix_display'
    /** ... */
) );

// criando função de template
function yourprefix_display( $cmb_options ) {
    // exibe template
}