<?php
return array(
		'DB_HOST'=>'localhost',
		'DB_NAME'=>'ibike',
		'DB_USER'=>'root',
		'DB_PWD'=>'',
		'DB_PORT'=>'3306',
		
		'APP_DEBUG'=>true,
		'TMPL_L_DELIM'=>'<{',
		'TMPL_R_DELIM'=>'}>', 

		TMPL_PARSE_STRING=>array(
			'__PUBLIC__'=>'Ibike/Public',
			'__JS__' =>'/Ibike/Public/Js', 
			'__UPLOAD__' => '/Ibike/Public/Uploads',
			'__CSS__'=>'/Ibike/Public/Css',
			'__IMAGE__'=>'/Ibike/Public/Image',
			'__HTML__'=>'/Ibike/Public/Html',
			'__PHP__'=>'/Ibike/Public/Php',
		    '__PLUGIN__'=>'/Ibike/Public/Plugin',
		)	
		
);
?>