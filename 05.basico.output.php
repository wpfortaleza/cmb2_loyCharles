<?php

//======================================================================
// GET / OUTPUT
//======================================================================

$custom_field = get_post_meta( get_the_ID(), 'id_custom_field', true );

echo $custom_field;