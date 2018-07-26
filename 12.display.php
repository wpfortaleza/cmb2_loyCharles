<?php

//======================================================================
// DISPLAY
//======================================================================

$cmb = new_cmb2_box( array(
    'id'            => 'field_group_metabox',
    'title'         => 'Field Parâmetros',
    'object_types'  => array(
        'post',
        'page',
        'eventos',
        'users',
        'term',
        'comments'
    ),
    'taxonomies'    => array( 'category' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_on_cb'    => 'custom_function',
    'show_on'       => array( 'id' => 28 )
) );

// ID Específico
$cmb = new_cmb2_box( array(
    /* ... */
    'show_on' => array( 'key' => 'id', 'value' => array( 50, 24 ) ),
    /* ... */
) );

// Page Template Específica
$cmb = new_cmb2_box( array(
    /* ... */
    'show_on' => array(
        'key' => 'page-template',
        'value' => 'template-contact.php'
    ),
    /* ... */
) );

// Page Template Específica
$cmb = new_cmb2_box( array(
    /* ... */
    'show_on' => array(
        'key' => 'user-type',
        'value' => 'publish_posts'
    ),
    /* ... */
) );

# https://github.com/CMB2/CMB2/wiki/Box-Properties
# https://cmb2.io/docs/adding-your-own-show_on-filters