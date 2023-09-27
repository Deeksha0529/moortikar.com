

<?php
$con = mysqli_connect('localhost','root','','moortikar');
if(!$con){
    die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redirecting</title>
</head>
<body>
<?php
 
 if(isset($_POST['email']))
 { 
 $email = $_POST['email'];
 $password = $_POST['password'];
 $select_query2 = "SELECT * from `signup` Where password='$password' and email='$email'";
 $result4 = mysqli_query($con,$select_query2);
 $number4 = mysqli_num_rows($result4);
 if($number4==0)
 {   
     echo"<script>alert('INVALID DETAILS');
    
     window.location.href = 'login.html'      
    
       </script>";
     
 }
 else{ 
     $_SESSION['ok'] = $email;
    
       echo "<script>alert('Thankyou login successfully');
        
        
       
        window.location.href = 'index.htm'
            
           </script>";
     }
     
     
     }?>
</body>
</html>