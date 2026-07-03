<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/* My Constant */
defined('IMAGE_UPLOAD_PATH') OR define('IMAGE_UPLOAD_PATH', 'upload/images/');
defined('FILE_UPLOAD_PATH') OR define('FILE_UPLOAD_PATH', 'upload/files/');
defined('SLIDE_UPLOAD_PATH') OR define('SLIDE_UPLOAD_PATH', 'upload/slides/');
defined('BANNER_UPLOAD_PATH') OR define('BANNER_UPLOAD_PATH', 'upload/banner/');
defined('POST_UPLOAD_PATH') OR define('POST_UPLOAD_PATH', 'upload/post/');

defined('SLIDE_IMAGE_WIDTH') OR define('SLIDE_IMAGE_WIDTH', 1920);
defined('SLIDE_IMAGE_HEIGHT') OR define('SLIDE_IMAGE_HEIGHT', 500);

defined('PRODUCT_IMAGE_WIDTH') OR define('PRODUCT_IMAGE_WIDTH', 600);
defined('PRODUCT_IMAGE_HEIGHT') OR define('PRODUCT_IMAGE_HEIGHT', 600);

defined('ABOUT_IMAGE_WIDTH') OR define('ABOUT_IMAGE_WIDTH', 1170);
defined('ABOUT_IMAGE_HEIGHT') OR define('ABOUT_IMAGE_HEIGHT', 416);

defined('PRODUCT_CATEGORY_IMAGE_WIDTH') OR define('PRODUCT_CATEGORY_IMAGE_WIDTH', 1080);
defined('PRODUCT_CATEGORY_IMAGE_HEIGHT') OR define('PRODUCT_CATEGORY_IMAGE_HEIGHT', 680);

defined('POST_IMAGE_WIDTH') OR define('POST_IMAGE_WIDTH', 870);
defined('POST_IMAGE_HEIGHT') OR define('POST_IMAGE_HEIGHT', 541);

defined('POST_CATEGORY_IMAGE_WIDTH') OR define('POST_CATEGORY_IMAGE_WIDTH', 1080);
defined('POST_CATEGORY_IMAGE_HEIGHT') OR define('POST_CATEGORY_IMAGE_HEIGHT', 680);

defined('DEFAULT_VIEW_COUNT') OR define('DEFAULT_VIEW_COUNT', 69);

defined('TYPE_PRODUCT') OR define('TYPE_PRODUCT', 'product');
defined('TYPE_POST') OR define('TYPE_POST', 'post');
defined('TYPE_ABOUT') OR define('TYPE_ABOUT', 'about');
defined('TYPE_QUOTATION') OR define('TYPE_QUOTATION', 'quotation');
defined('TYPE_NEWS') OR define('TYPE_NEWS', 'news');