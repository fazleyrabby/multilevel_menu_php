<?php
   require_once 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiMenu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">

  <h4>Static HTML</h4>
  <ul class="nav">
  <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li>
            <a href="services.html">Services</a>
            <ul>
                <li><a href="service1.htm">service1</a></li>
                <li><a href="">service2</a>
                    <ul>
                        <li><a href="">service2-a</a>
                        <ul>
                          <li><a href="service2.html">service2-b</a></li>
                          <li><a href="service2.html">service2-c</a></li>
                        </ul>
                      
                      </li>
                    </ul>
                </li>
                <li><a href="service3.htm">service3</a></li>
                <li><a href="service4.htm">service4</a></li>
            </ul>
        </li>
        <li><a href="gallery.html">Gallery</a>
            <ul>
              <li><a href="service2.html">service2-b</a></li>
              <li><a href="service2.html">service2-c</a>
            </li>
            </ul>
        </li>
        <li><a href="contact.html">contact</a></li>
  </ul>
    


  <h4>PHP</h4>
  <ul class="nav">
    <?php 
      $menuObj = new Menu();
      $menuObj->show();
    ?>
  </ul>


</div>


</body>
</html>



