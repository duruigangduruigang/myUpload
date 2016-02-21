<?php
$result = true;
$len = $_POST["length"];
$path = "./uploadfiles/".date("Y-m-d", time())."/";
if (!file_exists($path)) {
	mkdir($path);
}
for ($i = 0; $i < $len; $i++) {
	if ($_FILES["filename".$i]["name"]) {  
	    $file1 = $_FILES["filename".$i]["name"];  
	    $file2 = $path.$file1;  
	    $flag = 1;  
	} 
	if($flag) $result = $result && move_uploaded_file($_FILES["filename".$i]["tmp_name"],$file2);  
}      
if ($result)  {  
    echo json_encode("上传成功!");  
}
?>