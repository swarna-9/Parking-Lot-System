<?php
include('inc/dbcon.php');


if (isset($_POST['submit_multi'])){

$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	mysqli_query($connect, "DELETE FROM zones where id='$id[$i]'");
}
header("location: bookings.php");

}
?>