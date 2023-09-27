<?php
  $con= mysqli_connect('localhost','root','','moortikar');
  if(!$con)
  {
    die("connection not established".mysqli_connect_error());
  }
  // insertion of elements
  if(isset($_POST['myname']))
  {
  $name=$_POST['myname'];
  $email=$_POST['myemail'];
  $telnum=$_POST['telnum'];
  $mymessage=$_POST['mymessage'];

   $select_query = "select * from `connect_us` where myemail='$email'";
     $result1 = mysqli_query($con,$select_query);
     $number = mysqli_num_rows($result1);

  
  if($number==0)
  {
      $sql="INSERT INTO `connect_us`(`myname`, `myemail`, `telnum`, `mymessage`) VALUES ('$name', '$email', '$telnum', '$mymessage')";
  $res=mysqli_query($con,$sql);
      echo"
      <script>
      alert('Successfully inserted');
      </script>";
  }
  else{
      echo"<script>
      alert('The e mail is alredy registered');
      </script>";
  }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        
        
.container{
    background: url('img/oojpg.jpg');
    padding: 200px 400px;
}
.time{
    font-size: 64px;
    color: white;
    text-align: center;
}
body {
  font-family: "Sofia", sans-serif;
}

.p{
    
    font: 45px;
}
h3{
    font-size: 24px;
    float: right;
}
.para{
    float: right;
}
input{
    width: 94%;
    padding: 5px 14px;
}
.btn{
    margin: 0px 9px;
    padding: 4px 14px;
    background-color: black;
    color: white;
    border: 2px solid grey;
    border-radius: 10px;
    font-size: 20px;
    cursor: pointer;
}
.formgroup{
    font-weight: 400;
   font-family: Georgia, 'Times New Roman', Times, serif;
}


    </style>
</head>
<body>
    <div class="container">
<p class="time">Contact Us..</p>
</div>
<div class="para">
    <h3><centre><u>Questions,concerns,comments..You tell us.we listen!</centre></u></H3>
        <br>
        <br>
        <br>
        <br>
        
        <!-- <p> <mail->info@moortikar.com</mail-></p> -->
        <!-- <p>Contact No: +919829083981</p> -->
        <!-- <p>Monday to Saturday-9:00 am to 7:00 pm</p> -->
        <!-- <p>Sunday - 10:00am to 5:00pm</p> -->
        <!-- <p><h1><u>Send us a message.</u></h1></p> -->
   <img src="img/s1.png" class="you">

        <form action="contact_us.php" method="post">
            
            <label for="name"> Full Name:</label>
            <div>
                <input type="text" name="myname" id="name" placeholder="Name">
            </div>
            <br>
            <label for="myEmail">Email:</label>
            <div><input type="email" name="myemail" placeholder="Email Address">
            </div>
            <br>
            <label for="telnum">Phone Number:</label>
            <div>
            <input type="tel" name="telnum" placeholder="Phone Number"> 
            </div>
            <br>
            <label for="myMessage">Message:</label>
            <div><textarea name="mymessage" cols="90" rows="8" placeholder="Message"></textarea></div>
            <div class="contactus-intro">
                <ul>
                  <li ><span><b>Moortikar.com:</b></span>Mr. Achin Bumb / Mr. Pankaj Jain ( Manager )</li>
                  <li ><span><b>Address :</b></span> F4/36, Chitrakoot, Vaishali Nagar,<br>Jaipur, 302021 Rajasthan,<br> India</p>
                 </li>
                 <li>
                 <b>Name: </b>Ramesh Srivastava<br>
                 <b>Email: </b>sriramesh@gmail.com<br>
                 <b>Phone No. : </b>3533241<br>
                 <b>Address: </b>32 plover street,Lange park ,Chaguanas.</p>
                
                 </li>
     
                 <button class="btn">Send</button>
        </form>
</div>

    </div>
    
    

    
</body>
</html>

