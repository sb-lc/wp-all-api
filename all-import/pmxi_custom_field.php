<?php

/**
 * Custom field values can be filtered before save using this hook.
 *
 * @param $value
 *   The new custom field value from the data file
 * @param $post_id
 *   The id of the post to be updated
 * @param $key
 *   The custom field key
 * @param $existing_meta_keys
 *   ??? TODO: What is this for?
 * @param $import_id
 *   The id of the import TODO: Should this be left undocumented?
 *
 * @return mixed
 */
function my_custom_field( $value, $post_id, $key, $existing_meta_keys, $import_id ) {

	// Modify the custom field value as needed and return it

	return $value;
}

add_filter('pmxi_custom_field', 'my_custom_field', 10, 5);


//------------------------------------------------------------------------------
//                          Example uses below
// -----------------------------------------------------------------------------


/**
 * Only update the custom field if the new value is not empty
 *
 *
 */
function keep_existing_if_empty( $value, $post_id, $key, $existing_meta, $import_id ) {
    if ( $key == 'ENTER-YOUR-CUSTOM-FIELD-NAME-HERE' ) {
        if ( empty( $value ) ) {
            $value = isset($existing_meta[$key][0]) ? $existing_meta[$key][0] : $value;
        }
    }
    return $value;
}

add_filter( 'pmxi_custom_field', 'keep_existing_if_empty', 10, 5 );
