#wp-all-api
WPAllImport/ExportAPIinfo

## Before import
####[pmxi_before_xml_import](all-import/pmxi_before_xml_import.php)
Executed before the import starts.

####[wpallimport_xml_row.php](all-import/wpallimport_xml_row.php)
Allows modification of each data record before import.

## After import
####[pmxi_saved_post](all-import/pmxi_saved_post.php)
Invoked right after saving a post.

####[pmxi_after_post_import](all-import/pmxi_after_post_import.php)
Invoked after saving a post (??)

####[pmxi_after_xml_import](all-import/pmxi_after_xml_import.php)
Executed when the entire import completes.

## Custom fields
####[pmxi_custom_field](all-import/pmxi_custom_field.php)
Custom field values can be modified before save using this hook.
 
####[pmxi_update_post_meta](all-import/pmxi_update_post_meta.php)
Called right after a custom field (post meta) is saved. Use if you need access to meta_id.

## Choosing which records to process
####[wp_all_import_is_post_to_create](all-import/wp_all_import_is_post_to_create.php)
Indicate whether the post is to be created.

####[wp_all_import_is_post_to_update](all-import/wp_all_import_is_post_to_update.php)
Indicate whether the post is to be updated.

####[wp_all_import_is_post_to_delete](all-import/wp_all_import_is_post_to_delete.php)
Indicate whether the post is to be deleted.

####[wp_all_import_specified_records](all-import/wp_all_import_specified_records.php)
Allows specifing a list/range of records to import.

## Images and attachments
####[pmxi_attachment_uploaded](all-import/pmxi_attachment_uploaded.php)
Invoked right after an attachment was uploaded.

####[pmxi_gallery_image](all-import/pmxi_gallery_image.php)
Invoked after an image was imported.

####[wp_all_import_image_filename](all-import/wp_all_import_image_filename.php)
Allows customizing the names of imported images.

## Other
####[pmxi_article_data](all-import/pmxi_article_data.php)
Allow modifying the post body content before save.


