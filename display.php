<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookdb";
$tbname="book";
$title=$_POST['display'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>BOOK DETAILS</h2><br/>";
}
$sql="SELECT * FROM book WHERE title='".$title."'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0) 
{
    echo"<table border=2 align=center>";
    echo"<tr><th>Accession Number:</th>";
    echo"<th>Title:</th>";
    echo"<th>Author:</th>";
    echo"<th>Edition:</th>";
    echo"<th>Publisher:</th></tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<tr><td>$row[ano]</td>";
        echo"<td>$row[title]</td>";
        echo"<td>$row[author]</td>";
        echo"<td>$row[edition]</td>";
        echo"<td>$row[publisher]</td></tr>";
    }
    echo"</table>";
}
else
{
    echo"0 results";
}
mysqli_close($conn);
?>
