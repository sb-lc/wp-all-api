<?php
/**
 * Triggered after a post has been completely imported
 *
 */
function my_after_post_import($import_id)
{


}

add_action('pmxi_after_post_import', 'my_after_post_import', 10, 1);


//------------------------------------------------------------------------------
//                          Example uses below
// -----------------------------------------------------------------------------

