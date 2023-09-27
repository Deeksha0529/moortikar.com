<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Mooli&family=Pacifico&family=Roboto:wght@100&family=Sacramento&family=Satisfy&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Mooli&family=Pacifico&family=Roboto:wght@100&family=Sacramento&family=Satisfy&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* .myimg{
            border: 2px solid grey;

        }    */
        .contain{
            background-color: rgb(13, 13, 13) !important;
            background: url(https://static.vecteezy.com/system/resources/thumbnails/001/632/448/small/dark-blue-stripes-geometric-overlapping-background-free-vector.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            color: rgb(239, 238, 238) !important;
            height: 75px !important;
            padding: auto !important;
            border-radius: 30px !important;
            margin-top:10px;
            padding-top: 15px;
            font-style: normal;
      
}
.navbar{
        background-color: hotpink !important;
        border-radius: 30px !important;
        position: sticky !important;
        height: 65px !important;
        display: block;       
        margin-top: 10px;
        background-image: url(https://cdn.pixabay.com/photo/2012/04/13/01/23/moon-31665_1280.png);
        background-repeat: no-repeat;
        background-size: cover;
        
      }
      .navbar li{
        float: left;
        list-style: none;
        margin: 13px 20px;
        

      }
 .navbar ul{
    overflow: auto;
 }
 .navbar li a{
    padding: 3px 3px;
    text-decoration: none;
    color: white;
    
    
 }
 .navbar li a:hover{
    color: red;
    text-decoration: underline;
 }
        .pic {

            height: 280px;
            padding: 4px;

        }

        .ne {
            display: flex;
            border: 2px solid grey;
        }

        .tio {
            display: flex;
            border: 2px solid grey;

        }

        .btn {
            border-radius: 1px;
            border: 2px solid black;
            color: white;
            background-color: black;
            padding: 4px;
        }

        body {
            background: url(data:image/jpeg;base64,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);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Mooli', sans-serif;
        }
        .search{
            display: inline-block;
          
         position: absolute;
           top: 20px;
         left: 90%;
         border-radius: 5%;
              z-index: 1;}
    
              .regis
        {
          background-color: green;
          border-radius: 90%;
          color: red;

        }
        .register{
        display: inline-block;
         width: 20px;
         height: 10;
         position: absolute;
         top:40px ;
         left: 90%;
         border-bottom: 50%;
         color: red;
        }
 
    </style>
</head>

<body>  
    <div class="contain" >
        <center>
         <b><h2>"OUR PRODUCTS"</h2></b>
        </center>
        <a href="signup.html"class="register" ><button class="regis">Register</button></a>
  
  
  </div>
  <header>
      <nav class="navbar">
          <ul>
              <li><a href="index.htm">Home</a></li>
              <li><a href="./profile.htm">Our Profile</a></li>
              <li><a href="./contact_us.php">Contact Us</a></li>
             
              <li><a href="./HTML/about page.html">About us</a></li>
              <div class="search">
                  <a href="cart1.php"> <img src="cart.webp" style=" width: 30px; height: 40px;">  </a>
              </div>
          </ul>
      </nav>
   
    <div class="myimg">
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;<u>White Marble Radha Krishna Statue</u></h2>
        <p>Our expertise also lies in manufacturing and designing a wide assortment of Radha Krishna Idols. Showing the
            real feeling of love, Lord Krishna is known for his fabulous beauty, mesmerizing divine plays (lilas),
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devotion (bhakti) & salvation (Mukti). The golden-colored Mukut has
            added more beauty to both of them.
            Wearing elegant dresses and beautiful matching jewelry, Radha Krishna Statues are ready to steal
            everyone'severyone's heart.

            Marble RadhaKrishna Idols in Rajasthan. In this category, you will find both Krishna and Radha Krishna
            idols. We have Lord Krishna statues in varying patterns, and this collection has many idols playing flute in
            the signature pose. A cow or peacock accompanies the Radha Krishna murti on the pedesOrder
        </p>
        <div class="tio">
            <div class="ne">

                <a href="https://www.facebook.com"><img
                        src="https://i.etsystatic.com/21419120/r/il/143230/3126081962/il_570xN.3126081962_i955.jpg" class="pic"></a>
            </div>

            <div class="two">
            <a href="https://www.facebook.com">
                <span><button class="btn">Order</button></span></a>
            </div>


            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://cdn.exoticindia.com/images/products/original/sculptures-2019/zer252.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://i.etsystatic.com/21419120/r/il/11a429/3115465046/il_fullxfull.3115465046_jr03.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://i.etsystatic.com/21419120/r/il/f691f8/2817685600/il_fullxfull.2817685600_4nrf.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            
        </div>

        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;<u>White Marble Hanuman Statues/Murti/Idols</u></h2>
        <p>We offer Hanuman Statue which is crafted with white marble. In this statue Lord Hanuman is in sitting posture
            and with blessings hand which offers lots of blessing to devotees. These statues are designed with perfect
            cutting, and dimensional accuracy which makes these statues an ideal. These are the symbol of peace and
            happiness.

            We are one of the best Hanuman marble statue suppliers in the Pink City Jaipur, India. This collection has
            idols of Lord Hanuman in varying designs and postures. We hold two main varieties of Hanuman idols in the
            sitting position. You can either buy sitting Lord Hanuman meditating with both hands on the lap or with his
            one hand blessing the devotees and other holding the mace.



        </p>
        <div class="tio">
            <div class="ne">

                <a href="https://www.facebook.com"><img
                        src="https://handicraftbazaar.in/cdn/shop/products/MaaDurgaLifestyle2_1200x1200.jpg?v=1676443995" class="pic"></a>
            </div>

            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>


            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://m.media-amazon.com/images/I/51+3qy4EB8L.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://5.imimg.com/data5/JI/UG/NR/SELLER-89621518/marble-radha-krishna-statue.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://5.imimg.com/data5/SELLER/Default/2021/1/BL/FS/TA/89920451/marble-saraswati-statue-500x500.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquir./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>

        </div>
        <p>It is believed that praying to Lord Hanuman can bring good luck and fortune. He will give the power and
            strength to fight difficulties to his devotees. Our workforce spends a huge amount of time to provide the
            finest white marble hanuman statues/sculptures. The excellent craftsmanship has lead to detailed artistry
            resulting in the creation of premium quality idols.

            Hanuman murti has a high demand in the Indian holy statue industry. These are among one of the best idols of
            Marble Artifacts. Our products are highly appreciated for their elegant look and design. The statue provided
            by us shows elegance and class and the most importantly hard work and excellence of our expert. Our products
            are valued by the current customers for their grace and exquisite designs.</p>
            </div>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Temples</u></h2>
        <p>We offer beautifully designed marble inlays that are very detailed and feature exclusive patterns. The ornate
            carvings available are indeed an invaluable addition to the structure. We offer a stunning collection of
            marble inlay that can be combined with other stones to enhance the overall ambience. Our range evokes the
            zeal for perfection in our skilled craftsmen, Available in varied styles, designs and sizes, these marble
            flooring can be customized as per the client specifications and requirements. Our range includes Marble
            Medallion Flooring, Marble Inlay Floor, Decorative Marble Inlay, Natural Stone Inlay, Handcrafted Inlay,
            Colored Inlay, Handmade Floor Inlay etc.
        </p>
        <div class="tio">
            <div class="ne">

                <a href="https://www.facebook.com"><img
                        src="https://ii1.pepperfry.com/media/catalog/product/t/e/1100x1210/teak-finish-engineering-wood-home-temple-by-heartily-teak-finish-engineering-wood-home-temple-by-hea-rhl49w.jpg" class="pic"></a>
            </div>

            <div class="two">
                <a href="./enquiry/enquiry_form.html"><span><button class="btn">Order</button></span></a>
            </div>


            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://images.woodenstreet.de/image/data/home-temple/alanis-home-temple/walnut/updated/1.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://3.imimg.com/data3/GY/NW/MY-3422044/simple-marble-mandir.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            <div class="ne">
                <a href="https://www.facebook.com"><img
                        src="https://sartaajsangemarmar.com/wp-content/uploads/2022/12/Small-Sangemarmar-Marble-Temple.jpg" class="pic"></a>
            </div>
            <div class="two">
                <a href="./enquiry/enquiry_form.html"><button class="btn">Order</button></a>
            </div>
            
            
            
        </div>

</div>

    </div>
    
</body>

</html>