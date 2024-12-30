<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookdb";
$tbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>CONNECTION SUCCESSFULL!!</h2><br/>";
}
$ano=$_POST['ano'];
$title=$_POST['title'];
$author=$_POST['author'];
$ed=$_POST['edition'];
$pub=$_POST['publisher'];
$query="INSERT INTO book(ano,title,author,edition,publisher)VALUES('".$ano."','".$title."','".$author."','".$ed."','".$pub."')";
$res=mysqli_query($conn,$query);
if($res)
{
    echo"SUBMITTED SUCCESSFULLY!!";
}
else
{
    echo"ERROR";
}    
mysqli_close($conn);
?>
