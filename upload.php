<?php
$len=$_POST['len'];
for($i=0;$i<$len;$i++){
    print_r($_FILES['file'.$i]['tmp_name']);
    $dir='uploadedImages';
    if( is_dir($dir) === false )
    {
        mkdir($dir);
    }
    move_uploaded_file($_FILES['file'.$i]['tmp_name'],'./uploadedImages/'.$_FILES['file'.$i]['name']);
}
?>
