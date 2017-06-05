<?php
	require_once './vendor/autoload.php';

	$config = new \Flow\Config();
	$config->setTempDir('./chunks_temp_folder');
	$request = new \Flow\Request();
	if (\Flow\Basic::save('./final_file_destination/' . $request->getIdentifier().$request->getFileName(), $config, $request)) {
	  // file saved successfully and can be accessed at './final_file_destination'
	  $str="{\"status\":\"success\"";
	  $str.="}";
	} else {
	  // This is not a final chunk or request is invalid, continue to upload.
	  $str="{\"status\":\"error\"";
	  $str.="}";
	}
	echo $str;
?>