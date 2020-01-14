/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.height = 350;
	config.toolbar = [
		{ name: 'document', items: [ 'Source', 'Templates' ] },
		{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
		{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
		{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
		{ name: 'links', items: [ 'Link'] },
		{ name: 'insert', items: [ 'Image', 'Table' ] },
		{ name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor' ] },
		{ name: 'tools', items: [ 'Maximize' ] },
	];
};
