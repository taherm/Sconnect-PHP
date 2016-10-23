




<?php
//error_reporting(0);

 $sem=$_POST['s'];
$target_dir = "uploads/$sem[0]/";
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
        $d=$_POST['desc'];
        /*if ($d==NULL)
{
    ?>

<script>
	alert('Description Cannot Be Empty');
	window.location='afterteacherlogin.php';
</script>   
<?php

}*/
        session_start();
        $b=$_SESSION['login_teacher'];
        if ($b==NULL)
{
    ?>

<script>
	alert('Uploader Name Cannot Be Empty');
	window.location='afterteacherlogin.php';
</script>   
<?php

}
        
        $dt=date("d-m-Y");
        
        $sql="insert into data(sem,info,uploader,date,file) values($sem[0],'$d','$b','$dt','$url')";
        
        
        $res=$mysqli->query($sql);
        
            //echo"sucessfull";
        
            //echo "unsucessfull";
        //echo "moved to sql $url";
    } 


    $de=$_POST['desc'];
    //$by=$_POST['by'];
    
    $ss=$_POST['s'];
    $t;
    if($ss[0]==2)
        $t="sconnect@googlegroups.com";
        else if($ss[0]==3)
            $t="t_mukadam@yahoo.com";
            else if($ss[0]==1)
                $t="mukadam.taher@gmail.com";

             
$to =$t;
$subject =$b;
$txt =$de;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:mca.msrit@yahoo.com' . "\r\n";
//$headers .= "Cc:" . "\r\n";

$g=mail($to,$subject,$txt,$headers);
if($g)
{
?>
<script>
	alert('Mail Sent');
	window.location='afterteacherlogin.php';
</script>
<?php
}

    else
    {
?>        
     <script>
	alert('Mail Not Sent');
	window.location='afterteacherlogin.php';
</script>   
<?php
    }
    
    

}
    
?>
    
  