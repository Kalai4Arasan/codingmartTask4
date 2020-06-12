<?php
$len=$_POST['len'];
for($i=0;$i<$len;$i++){
    print_r($_FILES['file'.$i]['tmp_name']);
    move_uploaded_file($_FILES['file'.$i]['tmp_name'],'./uploadedImages/'.$_FILES['file'.$i]['name']);
}
?>