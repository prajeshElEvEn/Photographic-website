<?php
$conn=mysqli_connect("localhost","root","","sign_in");

	if(!$conn)
	{
		echo "Error!".mysqli_connect_error();
	}
	else
	{
		echo "";
	}
    echo "</br>";
$fname=$_POST["fn"];
$lname=$_POST["ln"];
$city=$_POST["city"];
$email=$_POST["user"];
$mno=$_POST["no"];
	$qry="insert into sign(fname,lname,city,Email,mno) values('".$fname."','".$lname."','".$city."','".$email."','".$mno."')";

	$res=mysqli_query($conn,$qry);
	if($res!="")
	{
		echo "Successfully registered!";
	}
	else
	{
		echo "There was a problem creating that account!";
	}
?>