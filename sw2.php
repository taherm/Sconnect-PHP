




<?php
//error_reporting(0);
 $sem=$_POST['s'];
$target_dir = "books/$sem[0]/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        //$url=
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
*/
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 5000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
    /*
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $mysqli=new mysqli("localhost","root","","sc");
         $url=$_FILES["fileToUpload"]["name"];
        $sem=$_POST['s'];
       // $d=$_POST['desc'];
        //$b=$_POST['by'];
        //$dt=$_POST['date'];
        
        $sql="insert into books(sem,file) values($sem[0],'$url')";
        
        
        $res=$mysqli->query($sql);
        if ($res)
        {
?>
<script>
	alert('File Saved Sucessfully');
	window.location='afterteacherlogin.php';
</script>
<?php
        }
        else{
            ?>
<script>
	alert('File Saved Sucessfully');
	window.location='afterteacherlogin.php';
</script>
<?php
         
    } 
}
}
?>
    
  