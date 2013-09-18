<?php

function dirArray($dir){
	$omit = array('.gitignore', '.htaccess','.DS_Store','..','.');
	$dir_files = array();
	if(is_dir($dir)){
		if($handle = opendir($dir)){
			while (false !== ($file = readdir($handle))){
				if(!in_array($file, $omit)){
					$file = str_replace('.php', '', $file);
					array_push($dir_files, $file);
				}
			}
			closedir($handle);
		}
	}
	sort($dir_files);
	return $dir_files;
}

?>