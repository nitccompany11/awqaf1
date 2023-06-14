/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};



CKEDITOR.editorConfig = function(config) {
// ...

   // config.filebrowserBrowseUrl = '../public/kcfinder/browse.php?opener=ckeditor&type=files';
   // config.filebrowserImageBrowseUrl = '../../public/kcfinder/browse.php?opener=ckeditor&type=images';
   // config.filebrowserFlashBrowseUrl = '../../public/kcfinder/browse.php?opener=ckeditor&type=flash';
   // config.filebrowserUploadUrl = '../../public/kcfinder/upload.php?opener=ckeditor&type=files';
   // config.filebrowserImageUploadUrl = '../../public/kcfinder/upload.php?opener=ckeditor&type=images';
   // config.filebrowserFlashUploadUrl = '../../kcfinder/upload.php?opener=ckeditor&type=flash';   



   config.filebrowserBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = path+'/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = path+'/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = path+'/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = path+'/upload.php?opener=ckeditor&type=flash';


// ...
};