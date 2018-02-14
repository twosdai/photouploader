<?php
if (isset($_Post['submit'])){
	$file = $_Files['file'];
	print_r($file);
	
	$fileName = $_Files['file']['name'];
	$fileTmpName = $_Files['file']['tmp_name'];
	$fileSize = $_Files['file']['size'];
	$fileError = $_Files['file']['error'];
	$fileType = $_Files['file']['type'];
	
	$fileExt = explod('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array ('jpg','jpeg','png','pdf');
	
	if(in_array($fileActualExt,$allowed)){
		if ($fileError === 0){
			if ($fileSize < 25000){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'uploads/.$fileNameNew'
				move_uploaded_file ($fileTmpName,$fileDestination);
				
			}
			
		} else{
			echo "There was an error in the upload please try again!";
		}
	}else{
		echo "You cannot upload files of that type!";
	}
	
	
	
}