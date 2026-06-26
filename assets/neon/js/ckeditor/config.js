/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.removeButtons = 'Save';
	config.height = 450;

	var base_url = "";
	if (window.location.host.includes('localhost'))
		base_url = location.protocol + "//" + window.location.host + '/' + window.location.pathname.split('/')[1] + '/';
	else
		base_url = location.protocol + "//" + window.location.host + '/';
	
	config.filebrowserBrowseUrl = base_url + 'assets/neon/js/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = base_url + 'assets/neon/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserUploadUrl = base_url + 'assets/neon/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = base_url + 'assets/neon/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

};
