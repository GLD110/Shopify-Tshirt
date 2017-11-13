<?php

require_once( 'config.php' );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$name     = $_FILES['file']['name'];
	$tmpName  = $_FILES['file']['tmp_name'];
	$error    = $_FILES['file']['error'];
	$size     = $_FILES['file']['size'];
    $fileinfo = getimagesize($_FILES["file"]["tmp_name"]);
	$filewidth = $fileinfo[0];
	$fileheight = $fileinfo[1];
	$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
	switch ($error) {
		case UPLOAD_ERR_OK:
			$valid = true;
			//validate file extensions
			if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
				$valid = false;
				$response = 'Invalid file extension.';
			}
			//validate file size
			if ( $size/1024/1024 > 2 ) {
				$valid = false;
				$response = 'File size is exceeding maximum allowed size.';
			}
                        
            if ( $filewidth > 1000 || $fileheight > 1000 ) {
				$valid = false;
				$response = 'Image Width and Height is not valid.';
			}
                        
			//upload file
			if ($valid) {
				$header_url= "https://" . $_SERVER["HTTP_HOST"]."/" . substr(__DIR__, strlen($_SERVER[ 'DOCUMENT_ROOT' ])) . '/';
				$response= $header_url . IMAGE_FOLDER . "/". $name;
				$targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. IMAGE_FOLDER . DIRECTORY_SEPARATOR. $name;
				move_uploaded_file($tmpName,$targetPath); 
				
			}
			break;
		case UPLOAD_ERR_INI_SIZE:
			$response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
			break;
		case UPLOAD_ERR_PARTIAL:
			$response = 'The uploaded file was only partially uploaded.';
			break;
		case UPLOAD_ERR_NO_FILE:
			$response = 'No file was uploaded.';
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			$response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
			break;
		default:
			$response = 'Unknown error';
		break;
	}
	echo $response;
	
}	
?>