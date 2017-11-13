<?php
/**
* Plugin: jQuery AJAX-ZOOM, zoomLoad.php
* Copyright: Copyright (c) 2010-2016 Vadim Jacobi
* License Agreement: http://www.ajax-zoom.com/index.php?cid=download
* Version: 4.3.1
* Date: 2016-03-07
* URL: http://www.ajax-zoom.com
* Documentation: http://www.ajax-zoom.com/index.php?cid=docs
*/

// Turn error reporting off
error_reporting(0);

foreach ($_POST as $k=>$v){$_GET[$k] = $v;}
if (isset($_GET[''])){unset($_GET['']);}

if (!headers_sent()){
	if (!isset($_GET['azImg']) && !(isset($_GET['previewPic']) && isset($_GET['previewDir']))){
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		header('Content-type: text/html; charset=UTF-8');
	}
}else{
	exit;
}

ignore_user_abort(true);

if ( (isset($_GET['zoomPath']) && isset($_GET['zoomImage']) && isset($_GET['zoomID']) && isset($_GET['str'])) ){
	$noObjectsInclude = true;
}

// Include all classes
include_once ("zoomInc.inc.php");

// Test classes are running
if (!is_object($axZm)){
	$text = "The Ajax-Zoom class has not been initialized.";		
	echo "<script type=\"text/javascript\">
		try{
			jQuery.fn.axZm.zoomAlert('".$text."','Error',false);
		}catch(e){
			alert('Error: ".$text."');
		}
	</script>";
	exit;
}

elseif ( isset($_GET['setHW']) && isset($_GET['zoomID']) ){
	$setHW = true;
}

elseif ( isset($_GET['zoomLoadAjax']) ){
	echo $axZmH->drawZoomBox($zoom, $zoomTmp);
	echo $axZmH->drawZoomJsConf($zoom, $rn = false, $pack = false);
} 

elseif (isset($_GET['zoomMixedData']) && isset($_GET['qq']) && $_GET['qq'] == 'firstImageFromMixedData'){
	echo $axZmH->getFirstImageFromMixedData($zoom, true);
	exit;
}

elseif (isset($_GET['zoomData']) && isset($_GET['qq']) && $_GET['qq'] == 'images'){
	echo $axZmH->getDataImages($zoom, true);
	exit;
}

elseif (isset($_GET['zoomDir']) && isset($_GET['qq']) && $_GET['qq'] == 'images'){
	echo $axZmH->getImages($zoom, true);
	exit;
}

elseif (isset($_GET['zoomDir']) && isset($_GET['qq']) && $_GET['qq'] == 'folders'){
	echo $axZmH->getFolders($zoom, true);
	exit;
}

elseif (isset($_GET['zoomDir']) && isset($_GET['qq']) && $_GET['qq'] == 'firstImageSpin'){
	echo $axZmH->getFirstImageSpin($zoom, true);
	exit;
}

elseif (isset($_GET['zoomDir']) && isset($_GET['qq']) && $_GET['qq'] == 'firstImageSpinFolder'){
	echo $axZmH->getFirstImageSpinFolder($zoom, true);
	exit;
}

elseif (isset($_GET['zoomDir']) && isset($_GET['qq']) && $_GET['qq'] == 'firstImagesFromFolders'){
	echo $axZmH->getFirstImagesFromFolders($zoom, (isset($_GET['imgNumber']) ? intval($_GET['imgNumber']) : 2), false,  true);
	exit;
}

elseif (isset($_GET['loadZoomAjaxSet'])){
	echo $axZmH->drawZoomJsGallerySet($zoom, $rn = false, $pack = false);
}

elseif (isset($_GET['load360AjaxSet'])){
    echo $axZmH->draw360JsVariationSet($zoom);
}

elseif ( isset($_GET['zoomID']) && isset($_GET['str']) ){
	ignore_user_abort(false);
	ob_start(); echo $axZm->zoomReturnCrop($zoom); ob_end_flush();
}

elseif (isset($_GET['getBackColor']) && isset($_GET['zoomID'])){
	session_write_close();
	echo $axZm->getBackColor($zoom, $_GET['zoomID']);
}

elseif (
	$zoom['config']['allowDynamicThumbs'] 
	&& ( (isset($_GET['previewPic']) && isset($_GET['previewDir'])) || isset($_GET['azImg']) )
	&& isset($_GET['width']) 
	&& isset($_GET['height'])
){
	$axZmH->rawThumbLoad($zoom);
} 

elseif (
	$zoom['config']['allowDynamicThumbs'] 
	&& isset($_GET['azImg360']) 
	&& isset($_GET['width']) 
	&& isset($_GET['height']) 
){
	$axZmH->returnFirstImageSpin($zoom, $_GET['azImg360']);
}

elseif (( (isset($_GET['previewPic']) && isset($_GET['previewDir'])) || isset($_GET['azImg']) || isset($_GET['azImg360']) ) 
	&& !$zoom['config']['allowDynamicThumbs']
){
	echo "For some reason the creation of image thumbs this way is not possible. 
	This might be due to settings in the config file e.g. allowDynamicThumbs; ";
}

else{
	echo "<TABLE WIDTH='100%' HEIGHT='100%'><TR><TD valign='middle' align='center'><DIV style='width: 500px; border: #000000 3px double; padding: 10px; font-size: 18px; text-align: left;'>";
	echo "ERROR<BR /><BR />";
	echo "This file is a part of a program and can not be called directly.<BR />";
	echo "For security reasons some information has been logged. <UL><LI>IP Address: <SPAN STYLE='color:red'>".$_SERVER['REMOTE_ADDR']."</SPAN></LI><LI>Date: ".date('Y-m-d')."</LI><LI>Time: ".date('H:i:s')."</LI></UL>";
	echo "</DIV></TD></TR></TABLE>";
	// You can log it to db, file or whatever...
}
?>