<?php

//======================================================================
// FIELD TYPES - group
//======================================================================

// Add Group
$group_field_id = $cmb->add_field( array(
	'id'          => 'wiki_test_repeat_group',
	'type'        => 'group',
	'repeatable'  => true,
	'options'     => array(
		'group_title'   => 'Entry {#}',
		'add_button'    => 'Add Another Entry',
		'remove_button' => 'Remove Entry',
		'sortable'      => true,
	),
) );

// Add Field to Group
$cmb->add_group_field( $group_field_id, array(
	'name' => 'Entry Title',
	'id'   => 'title',
	'type' => 'text',
) );