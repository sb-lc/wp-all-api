<?php


/**
 * Filter a single XML record for conditional export.
 *
 * See 'wp_all_export_csv_rows' for CSV data. Note that:
 * 'wp_all_export_xml_rows' deals only with a single record at a time and returns a bool
 * 'wp_all_export_csv_rows' gets passed multiple records for processing and returns an array
 *
 * @param $is_export_record
 * @param $record
 * @param $export_options
 * @param $export_id
 * @return bool - Return true to export or false to ignore this record
 */
function my_wp_all_export_xml_rows( $is_export_record, $record, $export_options, $export_id) {

    // Check $record object and return true to export or false to skip
    return true;

}
add_filter('wp_all_export_xml_rows', 'my_wp_all_export_xml_rows', 10, 4);


