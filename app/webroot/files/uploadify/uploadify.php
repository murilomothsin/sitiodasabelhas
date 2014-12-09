<?php

// Define a destination
$targetFolder = 'temp'; // Relative to the root

if (!empty($_FILES)) {

	$targetPath = $targetFolder.'/'.$_POST['User'].$_POST['dataInicio'];

	if( is_dir($targetPath) )
		echo 'diretoiro ja existe!';
	else{
		echo mkdir($targetPath, 0777);
		chmod($targetPath, 0777);
	}

	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetFile = rtrim($targetPath,'/') . '/'.$_FILES['Filedata']['name'];



	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$fileParts['extension'] = strtolower($fileParts['extension']);
	if (in_array($fileParts['extension'],$fileTypes)) {
		echo (move_uploaded_file($tempFile,$targetFile));
		chmod($targetFile, 0777);
	} else {
		echo 'Invalid file type.';
	}
}
?>