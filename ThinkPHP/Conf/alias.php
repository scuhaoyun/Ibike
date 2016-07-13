<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id: alias.php 2702 2012-02-02 12:35:01Z liu21st $

if (!defined('THINK_PATH')) exit();
// 系统别名定义文件
return array(
		'Page'=>LIBRARY_PATH.'ORG/Util/Page.class.php',
		'Image'=>LIBRARY_PATH.'ORG/Util/Image.class.php',
		'String'=>LIBRARY_PATH.'ORG/Util/String.class.php',
		'Upload'=>LIBRARY_PATH.'ORG/Net/UploadFile.class.php',
		
		
		
    'Model'         => CORE_PATH.'Core/Model.class.php',
    'Db'            => CORE_PATH.'Core/Db.class.php',
    'Log'          =>   CORE_PATH.'Core/Log.class.php',
    'ThinkTemplate' => CORE_PATH.'Template/ThinkTemplate.class.php',
    'TagLib'        => CORE_PATH.'Template/TagLib.class.php',
    'Cache'         => CORE_PATH.'Core/Cache.class.php',
    'Widget'         => CORE_PATH.'Core/Widget.class.php',
    'TagLibCx'      => CORE_PATH.'Driver/TagLib/TagLibCx.class.php',
	
		'__JS__' =>__ROOT__. '/Public/JS/',
		
);