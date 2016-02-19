<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="OrderNow.css" />
	<title>Admin Area</title>
	
</head>

<body>
<table class="new" >
        <tr>
          <td><button type="button" class="modern socle">Cake Gallery</button></td>
          <td><a href="OrderForm.php"><button type="button" class="modern socle">Order Now</button></a></td>
          <td><a href="contactus.html"><button type="button" class="modern socle">Contact us</button></a></td>
                <td><a href="AdminPage.html"><button type="button" class="modern socle">Admin</button></a></td>
          <td><button type="button" class="modern socle">About us</button></td>
                <td><a href="index.html"><button type="button" class="modern socle">Home</button></a></td>
          <td></td>
        </tr>
      </table>
<br><br><br><br><br><br><br>
<diiv class="transbox">
    <!--header starts-->
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
  if($row['UserName']==$uname1&&$row['Password']==$pass1)
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
  else//?
    {echo "Username/Password required";}

  }
  else echo "All fields required";

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
  if($row['UserName']==$uname2&&$row['Password']==$pass2)
  {
    $cake_id=$_POST['CakeId'];
    if(!empty($cake_id))
    {
    $sql="DELETE FROM Cakes where CakeId='$cake_id'";
    mysqli_query($con,$sql);}
    //else fill data
    else
      {echo "All fields are required";}

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
  if($row['UserName']==$uname3&&$row['Password']==$pass3)
  {
    $cake_id=$_POST['CakeId'];
    $price=$_POST['priceegg'];
    $pricene=$_POST['pricenegg'];
    if(!empty($cake_id)&&!empty($price)&&!empty($pricene))
    {
    $sql="UPDATE Cakes SET PriceE='$price',PriceNE='$pricene' where CakeId='$cake_id'";
    mysqli_query($con,$sql);}
    else
      {echo "All fields are required";}
    //else fill data
  }
  else//??
    {echo "Username/Password invalid";}
  }

}
elseif(isset($_POST['uname4'])&&isset($_POST['pass4']))
{

  $uname1=$_POST['uname4'];
  $pass1=$_POST['pass4'];
  if(!empty($uname4)&&!empty($pass4))
  {
  $query="SELECT * from Admin where UserName='$uname4'";
  $query1 = mysqli_query($con,$query);
  $row = mysqli_fetch_array($query1);
  if($row['UserName']==$uname4&&$row['Password']==$pass4)
  { 
  $result = mysqli_query($con,"SELECT * FROM Customers");
  while($row = mysqli_fetch_array($result))
  {
  echo $row['OrderId'] . " " . $row['OrderDate']." ".$row['CakeId']." ".$row['Name']." ".$row['Contact'];
  echo "<br>";
  echo $row['Address'];
  echo "<br>";
  }
  }

  else//??
    {echo "Username/Password invalid";}

  }
  

}
else
  echo "Whoops wrong page. Get me a banana";

  ?>
</div>
  
    <!--content ends-->
  <!--wrapper ends-->

</body>

</html>