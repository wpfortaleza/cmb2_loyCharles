<?php

//======================================================================
// FIELD TYPES - file
//======================================================================

$cmb->add_field( array(
	'name' => 'Telefone',
	'id' => 'cliente_telefone',
  'type' => 'text',
  'repeatable' => true,
  'column' => true,
  'text' => array(
    'add_row_text' => 'Add Outro Telefone',
  ),
  'default' => '(85) 9 9999-9999',
  'attributes'  => array(
    'placeholder' => 'A small amount of text',
    'required'    => 'required',
  ),
  'before_row' => '#before_row',
  'after_row' => '#after_row',
  'before_field' => '#before_field',
  'after_field' => '#after_field',
) );

# https://github.com/CMB2/CMB2/wiki/Field-Parameters