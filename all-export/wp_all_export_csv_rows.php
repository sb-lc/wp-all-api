<?php


/**
 * Filter CSV rows to import.
 *
 * See 'wp_all_export_xml_rows' for XML data. Note that:
 * 'wp_all_export_xml_rows' deals only with a single record at a time and returns a bool
 * 'wp_all_export_csv_rows' gets passed multiple records for processing and returns an array
 *
 * @param $articles
 * @param $options
 * @param $export_id
 * @return array - the records to import
 */
function pmxe_wp_all_export_csv_rows($articles, $options, $export_id)
{

    // $articles contains on array of records for importing.
    // Loop through the array and unset() any entries you don't
    // want imported

    return $articles; // Return the array of records to import
}
add_filter('wp_all_export_csv_rows', 'pmxe_wp_all_export_csv_rows', 10, 2);


/**
 * Import based on some criteria. In this case pricing.
 *
 */
function my_export_csv_rows($articles, $options, $export_id)
{
    foreach ($articles as $key => $article) {
        if (!empty($article['Regular Price'] && !empty($article['Sale Price']))) {
            if ($article['Sale Price'] < ($article['Regular Price'] / 2)) {
                unset($articles[$key]);
            }
        }
    }

    return $articles;
}
add_filter('wp_all_export_csv_rows', 'my_wp_all_export_csv_rows', 10, 2);
