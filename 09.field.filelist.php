<?php

//======================================================================
// FIELD TYPES - file
//======================================================================

// Add
$cmb->add_field( array(
    'name' => 'File List',
    'id'   => 'field_type_file_list',
    'type' => 'file_list',
    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
    'query_args' => array( 'type' => 'image' ), // Only images attachment
    'text' => array(
        'add_upload_files_text' => 'Adicionar Imagens', // default: "Add or Upload Files"
        'remove_image_text' => 'Remover Imagem', // default: "Remove Image"
        'file_text' => 'Imagem:', // default: "File:"
        'file_download_text' => 'Baixar', // default: "Download"
        'remove_text' => 'Remover', // default: "Remove"
    ),
) );

// output array
get_post_meta( get_the_ID(), 'id_filelist', 1 );

/**
Array(
    [id_arquivo] => 'url_arquivo'
)
 */