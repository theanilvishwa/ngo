<?php
// session_start();
include("valid.php");

if(!isset($_POST['submit']))
{
$heading1 = $_POST["heading1"];
$content1 = $_POST["content1"];

$img1 = $_FILES['img1']['name'];
$filedir = "about_img/".$img1;
move_uploaded_file($_FILES['img1']['tmp_name'], $filedir);

//echo "$img1";
//echo "$heading1";
//echo "$content1";


$heading2 = $_POST["heading2"];
$content2 = $_POST["content2"];

$img2 = $_FILES['img2']['name'];
$filedir = "about_img/".$img2;
move_uploaded_file($_FILES['img2']['tmp_name'], $filedir);

//echo "$img2";
//echo "$heading2";
//echo "$content2";

$heading3 = $_POST["heading3"];
$content3 = $_POST["content3"];


$img3 = $_FILES['img3']['name'];
$filedir = "about_img/".$img3;
move_uploaded_file($_FILES['img3']['tmp_name'], $filedir);

//echo "$img3";
//echo "$heading3";
//echo "$content3";


$heading4 = $_POST["heading4"];
$content4 = $_POST["content4"];


$img4 = $_FILES['img4']['name'];
$filedir = "about_img/".$img4;
move_uploaded_file($_FILES['img4']['tmp_name'], $filedir);

//echo "$img4";
//echo "$heading4";
//echo "$content4";

$heading5 = $_POST["heading5"];
$content5 = $_POST["content5"];

$img5 = $_FILES['img5']['name'];
$filedir = "about_img/".$img5;
move_uploaded_file($_FILES['img5']['tmp_name'], $filedir);

//echo "$img5";
//echo "$heading5";
//echo "$content5";

$updateQuery = "UPDATE about SET heading1='$heading1',heading2='$heading2',heading3='$heading3',heading4='$heading4',heading5='$heading5',content1='$content1',content2='$content2',content3='$content3',content4='$content4',content5='$content5',img1='$img1',img2='$img2',img3='$img3',img4='$img4',img5='$img5'";

///$insertQuery = "INSERT INTO about(heading1,content1,img1,heading2,content2,img2,heading3,content3,img3,heading4,content4,img4,heading5,content5,img5)
//VALUE('$heading1','$content1','$img1','$heading2','$content2','$img2','$heading3','$content3','$img3','$heading4','$content4','$img4','$heading5','$content5','$img5')";
//echo $a;
$con = dbConnection();
$result = runQuery($con,$updateQuery);
if($result){
  echo "data update successfully...";
  header("location: edit-about.php");
}else{
    echo "data not updated ...";
}
}

?>