#wp-all-api
WPAllImport/ExportAPIinfo

## Before import
####pmxi_before_xml_import
Executed before the import starts.
[Details](all-import/pmxi_before_xml_import.php)

####wpallimport_xml_row
Allows modification of each data record before import.
[Details](all-import/wpallimport_xml_row.php)

## After import
####pmxi_saved_post
Invoked right after saving a post.
[Details](all-import/pmxi_saved_post.php)

####pmxi_after_post_import
Invoked after saving a post (??)
[Details](all-import/pmxi_after_post_import.php)

####pmxi_after_xml_import
Executed when the entire import completes.
[Details](all-import/pmxi_after_xml_import.php)

## Custom fields
####pmxi_custom_field
Custom field values can be modified before save using this hook.
[Details](all-import/pmxi_custom_field.php)
 
####pmxi_update_post_meta
Called right after a custom field (post meta) is saved. Use if you need access to meta_id.
[Details](all-import/pmxi_update_post_meta.php)

## Choosing which records to process
####wp_all_import_is_post_to_create
Indicate whether the post is to be created.
[Details](all-import/wp_all_import_is_post_to_create.php)

####wp_all_import_is_post_to_update
Indicate whether the post is to be updated.
[Details](all-import/wp_all_import_is_post_to_update.php)

####wp_all_import_is_post_to_delete
Indicate whether the post is to be deleted.
[Details](all-import/wp_all_import_is_post_to_delete.php)

####wp_all_import_specified_records
Allows specifing a list/range of records to import.
[Details](all-import/wp_all_import_specified_records.php)

## Images and attachments
####pmxi_attachment_uploaded
Invoked right after an attachment was uploaded.
[Details](all-import/pmxi_attachment_uploaded.php)

####pmxi_gallery_image
Invoked after an image was imported.
[Details](all-import/pmxi_gallery_image.php)

####wp_all_import_image_filename
Allows customizing the names of imported images.
[Details](all-import/wp_all_import_image_filename.php)

## Other
####pmxi_article_data
Allow modifying the post body content before save.
[Details](all-import/pmxi_article_data.php)


