<?php

	$dir = "C:/Users/mayan/Downloads/";
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			while(($file = readdir($dh)) !== false){
				if(!(is_dir($file))){
					$ext = pathinfo($file,PATHINFO_EXTENSION);

					if(in_array(strtolower($ext), array('jpg','jpeg','png','bmp','ico','gif','tif','tiff'))){
						copy($dir.$file,$dir.'img/'.$file);
						unlink($dir.$file);
						echo "Copied to img<br>";
					}

					elseif(in_array(strtolower($ext), array('zip','gz','tar.gz','exe','msi','rar','iso'))){
						copy($dir.$file,$dir.'zip/'.$file);
						unlink($dir.$file);
						echo "Copied to zip<br>";
					}

					elseif(in_array(strtolower($ext), array('pdf','doc','docx','xls','xlxs','c','java','pptx','xlsx','txt','php','sql'))){
						copy($dir.$file,$dir.'doc/'.$file);
						unlink($dir.$file);
						echo "Copied to doc<br>";
					}

					elseif(in_array(strtolower($ext), array('mp4','mp3','wav','3gp','avi'))){
						copy($dir.$file,$dir.'video/'.$file);
						unlink($dir.$file);
						echo "Copied to video<br>";
					}


				}
			}
			closedir($dh);
		}
	}
?>