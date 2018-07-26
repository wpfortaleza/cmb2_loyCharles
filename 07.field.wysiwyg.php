<?php

//======================================================================
// FIELD TYPES - wysiwyg
//======================================================================

// Add
$cmb->add_field( array(
    'name'    => 'wysiwyg',
    'id'      => 'field_type_wysiwyg',
    'type'    => 'wysiwyg',
    'options' => array(
        'media_buttons' => true,
        'textarea_rows' => 5,
        'teeny' => false,
    ),
) );

// Output
echo wpautop( get_post_meta( get_the_ID(), 'id_wysiwyg', true ) );