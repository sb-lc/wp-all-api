<?php


/**
 * Called after an import is complete.
 *
 * Useful for any cleanup or other task that needs to be performed after an import
 *
 * @param $import_id
 */
function after_xml_import($import_id)
{

    // Perform your task

}

add_action('pmxi_after_xml_import', 'after_xml_import', 10, 1);

//------------------------------------------------------------------------------
//                          Example uses below
// -----------------------------------------------------------------------------


