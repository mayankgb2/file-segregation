<?php
	function getFileTypeFromExtension($ext) {
		if(in_array(strtolower($ext), array('jpg','jpeg','png','bmp','ico','gif','tif','tiff'))){
			return "img";
		}

		if(in_array(strtolower($ext), array('zip','gz','tar.gz','exe','msi','rar','iso'))){
			return "zip";
		}

		if(in_array(strtolower($ext), array('pdf','doc','docx','xls','xlxs','c','java','pptx','xlsx','txt','php','sql'))){
			return "doc";
		}

		if(in_array(strtolower($ext), array('mp4','mp3','wav','3gp','avi'))){
			return "video";
		}
		
		return "undefined";
	}

	$dir = "C:/Users/mayan/Downloads/";

	if(!is_dir($dir)){
		exit;
	}

	$dh = opendir($dir);

	if($dh === false){
		exit;
	}

	while(($file = readdir($dh)) !== false){
		if((is_dir($file))){
			continue;
		}
		
		$ext = strtolower(pathinfo($file,PATHINFO_EXTENSION));
		
		$fileType = getFileTypeFromExtension($ext);
		
		if($fileType != "undefined") {
			copy($dir.$file,$dir.$fileType} .'/'. $file);
			unlink($dir.$file);
			echo "Copied to {$fileType}<br>";
		}
	}

	closedir($dh);
?>
