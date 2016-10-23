<html>
<body>
    
    
    
    <?php
    error_reporting(0);
    session_start(); 
    $u=$_SESSION['usn'];
    $mysqli=new mysqli("localhost","root","","sc");
    $sql2="SELECT semester from student where usn=$u";
$result=$mysqli->query($sql2);
    $row=$result->fetch_array();
    $s=$row[0];
    echo "sem:::$s";

$sql="SELECT file from data where sem=$s";
$result=$mysqli->query($sql);
/*while($row=$result->fetch_array())
{
    echo "<a href='uploads/$s/$row[1]'>download</a><br>";
}
*/
$row=$result->fetch_array();
    echo "<a href='uploads/$s/$row[1]'>download</a><br>";
    ?>

    </body>
    </html>
    