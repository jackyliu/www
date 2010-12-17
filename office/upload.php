<?php
print_r($_POST);
print_r($_FILES);
if( isset($_FILES["filename"]["tmp_name"])) {
    print("got file\n");
	$res = move_uploaded_file($_FILES["filename"]["tmp_name"], "/tmp/".$_FILES["filename"]["name"]);
    if($res == 1) {
        print("upload successfully!");
    } else {
        print("upload failed!");
    }
}
?>
