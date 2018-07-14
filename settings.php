<?php
global $db_url, $multiDB;
//$db_url['default'] = 'mysql://devteam:de^Tea3@localhost/qaportal_live';
/*
$db_url['default_mas'] = 'mysql://root:raj12345@localhost/qaportal_mas'; 
$db_url['default_ctas'] = 'mysql://root:raj12345@localhost/qaportal_live'; 
$db_url['default_etas'] = 'mysql://root:raj12345@localhost/qaportal_etas';
$db_url['default_ims'] = 'mysql://root:raj12345@localhost/qaportal_ims'; 
$db_url['default'] = 'mysql://root:raj12345@localhost/qaportal_mas'; 
*/
$db_url['default_mas'] = 'mysql://root:raj12345@localhost/qaportal_mas'; 
$db_url['default_ctas'] = 'mysql://root:raj12345@localhost/qaportal_live'; 
$db_url['default_etas'] = 'mysql://root:raj12345@localhost/qaportal_etas';
$db_url['default_ims'] = 'mysql://root:raj12345@localhost/qaportal_ims'; 
$db_url['default'] = 'mysql://root:raj12345@localhost/qaportal_mas'; 
$multiDB = array('mas','ctas','etas','ims');
//ini_set('error_reporting','E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED'); 

ini_set('display_errors','off'); //Off,On

//ini_set('output_buffering','Off');

ini_set('memory_limit','512M');

ini_set('max_execution_time',0);

ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');

ini_set('arg_separator.output','&amp;');
ini_set('magic_quotes_runtime', 0);
ini_set('magic_quotes_sybase', 0);
ini_set('session.cache_expire', 200000);
ini_set('session.cache_limiter', 'none');
ini_set('session.cookie_lifetime', 2000000);
ini_set('session.gc_maxlifetime', 200000);
//ini_set('session.save_handler',     'tmp');
ini_set('session.use_only_cookies', 0);
ini_set('session.use_trans_sid',    0);
ini_set('url_rewriter.tags',        '');

//date_default_timezone_set('Asia/Calcutta');
define('DEFAULT_DATE_FORMAT','d-M-Y');// h:i A
define('DEFAULT_DATE_FORMAT_TZ','d-M-Y');// h:i A T
define('DEFAULT_DATE_FORMAT_DATE','d-M-Y');
define('DEFAULT_DATE_FORMAT_TIME','h:i A');
define('MOM_SIGNATURE',' QMG MOM Manager');
define('MOM_FROM_EMAIL','QMG@csscorp.com');
define('MOM_FROM_NAME','QMG MOM Manager');
define('MOM_CLIENT_PASSWORD_SEND','DISABLED');
define("SITELOGO",$sitelogo_url);
define('MULTI_DB',$multiDB);
?>