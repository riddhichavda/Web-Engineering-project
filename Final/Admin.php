<?php
$con=mysqli_connect("127.0.0.1","root","","SAS");
if(isset($_POST['uname1'])&& isset($_POST['pass1']))
{
	$uname1=$_POST['uname1'];
	$pass1=$_POST['pass1'];
	if(!empty($uname1)&&!empty($pass1))
	{
	$query="SELECT * from Admin where UserName='$uname1'";
	$query1 = mysqli_query($con,$query);
	$row = mysqli_fetch_array($query1);
	if($row['UserName']==$uname1)
	{
		$cake_id=$_POST['CakeId'];
		$price=$_POST['priceegg'];
		$pricene=$_POST['pricenegg'];
		if(!empty($cake_id)&&!empty($price)&&!empty($pricene))

		{$sql="INSERT INTO Cakes (CakeId,PriceE,PriceNE) VALUES('$cake_id','$price','$pricene')";
	
		mysqli_query($con,$sql);}
		else{
			echo 'All fields are required';
		}
		//else fill data
	}
	else//??
		{echo "Username/Password invalid";}

	}


}

elseif(isset($_POST['uname2'])&& isset($_POST['pass2']))
{

	$uname2=$_POST['uname2'];
	$pass2=$_POST['pass2'];
	if(!empty($uname2)&&!empty($pass2))
	{
	$query="SELECT * from Admin where UserName='$uname2'";
	$query1 = mysqli_query($con,$query);
	$row = mysqli_fetch_array($query1);
	if($row['UserName']==$uname2)
	{
		$cake_id=$_POST['CakeId'];
		if(!empty($cake_id))
		{
		$sql="DELETE FROM Cakes where CakeId='$cake_id'";
		mysqli_query($con,$sql);}
		//else fill data

	}
	else//??
		{
			echo "Username/Password invalid";}

		}

}
elseif(isset($_POST['uname3'])&& isset($_POST['pass3']))
{

	$uname3=$_POST['uname3'];
	$pass3=$_POST['pass3'];
	if(!empty($uname3)&&!empty($pass3))
	{
	$query="SELECT * from Admin where UserName='$uname3'";
	$query1 = mysqli_query($con,$query);
	$row = mysqli_fetch_array($query1);
	if($row['UserName']==$uname3)
	{
		$cake_id=$_POST['CakeId'];
		$price=$_POST['priceegg'];
		$pricene=$_POST['pricenegg'];
		if(!empty($cake_id)&&!empty($price)&&!empty($pricene))
		{
		$sql="UPDATE Cakes SET PriceE='$price',PriceNE='$pricene' where CakeId='$cake_id'";
		mysqli_query($con,$sql);}
		//else fill data
	}
	else//??
		{echo "Username/Password invalid";}
 	}

}/*
elseif(isset($_POST['uname4']))&& isset($_POST['pass4']))
{

	$uname1=$_POST['uname4'];
	$pass1=$_POST['pass4'];
	if(!empty($uname4)&&!empty($pass4))
	{
	$query="SELECT * from Admin where UserName='$uname4'";
	$query1 = mysqli_query($con,$query);
	$row = mysqli_fetch_array($query1);
	if($row['UserName']==$uname4)
	{

	}
	else//??
		{echo "Username/Password invalid";}

	}

}*/
else
	echo "Whoops wrong page. Get me a banana";

	?>