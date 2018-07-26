<?php

//======================================================================
// FIELD TYPES - file
//======================================================================

// File PDF
$cmb->add_field( array(
    'name'    => 'File PDF',
    'id'      => 'field_type_pdf',
    'type'    => 'file',
    'options' => array(
        'url' => false,
    ),
    'text'    => array(
        'add_upload_file_text' => 'Add Arquivo'
    ),
    'query_args' => array(
        'type' => 'application/pdf',
    ),
    'preview_size' => 'large',
) );

// File IMG
$cmb->add_field( array(
    'name'    => 'File Img',
    'id'      => 'field_type_img',
    'type'    => 'file',
    'options' => array(
        'url' => true,
    ),
    'text'    => array(
        'add_upload_file_text' => 'Add Imagem'
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png',
        ),
    ),
    'preview_size' => 'large',
) );

// output url
get_post_meta( get_the_ID(), 'id_file', 1 );