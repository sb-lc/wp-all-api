<?php
/**
 *
 */
add_action( 'pmxi_before_xml_import', 'wp_all_import_before_xml_import', 10, 1 );

function wp_all_import_before_xml_import( $import_id ) {

}


add_action( 'pmxi_before_xml_import', 'wp_all_import_before_xml_import', 10, 1 );


//------------------------------------------------------------------------------
//                          Example uses below
// -----------------------------------------------------------------------------


function wp_all_import_before_xml_import( $import_id ) {
  if ($import_id === 5) {

  }
}
