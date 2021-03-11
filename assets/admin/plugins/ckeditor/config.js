/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.toolbar = 'MyToolbar';
	config.toolbar_MyToolbar =
	[
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },		
		{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
		{ name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar'] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
				
	];

	config.extraPlugins = 'imageuploader';
	config.filebrowserBrowseUrl =  'http://localhost/ci-crm-template/assets/uploads/upload.php';
	config.filebrowserUploadUrl = 'http://localhost/ci-crm-template/assets/uploads/upload.php';
};
