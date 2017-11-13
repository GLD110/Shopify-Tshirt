<?php

require_once( 'config.php' );

$img = $_POST['img'];
if($_POST['action'] == 'save'){
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = ORDER_FOLDER . '/' . uniqid() . '.png';
	print_r($file);
	$success = file_put_contents($file, $data);
} elseif ($_POST['action'] == 'delete'){
		@unlink( IMAGE_FOLDER . '/' . $img);
		echo "success";
}
?>