
<?php
$con = mysqli_connect('localhost','root','','moortikar');
if(!$con){
    die("error connecting databse".mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
if(isset($_POST['name']))
{
$name = $_POST['name'];
$email =$_POST['email'];
$telnum =$_POST['telnum'];
$password = $_POST['password'];
$select_query = "SELECT * from `signup` where email ='$email'";
$result2 = mysqli_query($con,$select_query);
$number2 = mysqli_num_rows($result2);
if($number2>0)
{
    echo"<script>alert('already exist')          
    window.location.href = 'index.htm';
      </script>";
    
}
else{
$sql= "INSERT INTO `signup`( `name`, `email`, `telnum`, `password`) VALUES ('$name', '$email','$telnum','$password')";
$result = mysqli_query($con,$sql);

        echo"<script>alert('Thankyou');
        document.write('Welcome to Moortikar');
        setTimeout(function(){
        window.location.href = 'index.htm'},2000);
       
      </script>";
}


}

?>
</body>
</html>