<?php

/**
 * Append content to existing post body.
 *
 * This filter works only when 'Choose which data to update' options is chosen in import settings.
 *
 * @param $articleData
 *   $articleData['post_content'] is new content
 * @param $import
 *   Import object
 * @param $post_to_update
 *   $post_to_update->post_content is current content
 *
 * @return mixed
 */
function my_pmxi_article_data($articleData, $import, $post_to_update)
{

    // add new content to the top of old content
    // $articleData['post_content'] .= $post_to_update->post_content;;

    return $articleData;
}

add_filter('pmxi_article_data', 'my_pmxi_article_data', 10, 3);


//------------------------------------------------------------------------------
//                          Example uses below
// -----------------------------------------------------------------------------
