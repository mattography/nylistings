<?php

//This is the directory where images will be saved
$target = "/images";
$target = $target . basename( $_FILES['photo']['name']);

//This gets all the other information from the form
$ADDR_NUM=$_POST['ADDR_NUM'];
$ADDR_STR=$_POST['ADDR_STR'];
$pic=($_FILES['photo']['name']);


// connect to the database
 include('connect-db.php');

//Writes the information to the database
mysql_query("INSERT INTO listing (ADDR_NUM,ADDR_STR,photo)
VALUES ('$ADDR_NUM', '$ADDR_STR', '$pic')") ;

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

//Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
?>