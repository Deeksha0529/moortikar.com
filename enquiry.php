<?php
  $con= mysqli_connect('localhost','root','','moortikar');
  if(!$con)
  {
    die(mysqli_connect_error());
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquiry</title>
  </head>
  <body>
  <?php
  // insertion of elements
  if(isset($_POST['name']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $telnum=$_POST['telnum'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $sql="INSERT INTO `enquire`(`name`, `email`, `telnum`,`subject`, `message`) VALUES ('$name', '$email', '$telnum', '$subject','$message')";
  $res=mysqli_query($con,$sql);
      
      echo"<script>alert('Thankyou ');
      alert('we will contact you later');
      document.write('Welcome to Moortikar');
      setTimeout(function(){
      window.location.href = 'index.htm'},2000);
      </script>";
  }
    ?>;
  </body>
  </html>