<?php
const BR = "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <?php require "head.php" ; ?>
  <title>basic bootstrap template</title> 

</head>
<!-- comments  -->
<body>

  <?php require "jumbotron.php" ; ?>

  <?php require "TopNavBar.php" ; ?>

  <div class="container" >
    <div class="row">

      <!-- this is the image from the left-side of the document -->
      <div class="col-sm-4">
        <h2 class= "text-center">Smiley</h2>
        <h5 align= "center" >image from unsplash:</h5>
        <img class= "img-fluid mx-auto myborder" src="images/image_11.png" alt="pretty lady" height="200px">
        <p>Trust in the LORD with all your heart</p>
      </div>  <!-- end of class="col-sm-4" -->

      <!-- this is the image from the right-side of the document -->
      <div class="col-sm-8">
        <h2 class = "text-center">Coastline at night </h2>
        <h5>very pretty..... Don't you think?</h5>
        <img src="images/image_3bc.png" alt="coastline" class="img-fluid myborder"> 
        <h2>Proverbs 3 : 5-8</h2>
        <p>Trust in the LORD with all your heart,
          and do not lean on your own understanding. 
          In all your ways acknowledge him,
          and he will make straight your paths. 
          Be not wise in your own eyes;
          fear the LORD, and turn away from evil. 
          It will be healing to your flesh
        and refreshment  to your bones. </p>
        <br>
      </div>  <!-- class="col-sm-8"  -->
      <!-- this is the next section underneath the right side of the document.  -->
      <div class="col-sm-12">
        <h2 class= "text-center">Working with GIMP</h2>
        <h5 class= "text-center">these were 2 distinct images that I combined, when I was learning to use GIMP</h5>
        <img src="images/image_4.png" alt="lady and the coastline" class="img-responsive mx-auto d-block myborder">  
        <h2 class = "text-center">1 THESSALONIANS 5 : 16 - 20</h2>
        <p>
          Be joyful always; pray continually; give thanks in all circumstances,
          for this is GOD's will for you in CHRIST JESUS. 
          Do not put out the Spirit's Fire; do not treat prophecies 
        with contempt.</p>
      </div>  <!-- class="col-sm-12"  -->
    </div>  <!-- class="row"  -->
  </div>  <!-- class="container"  -->

  <div id="footerDiv" class="jumbotron text-center bg-primary" style="margin-bottom:0">
    <p>Footer</p>
  </div>  <!-- class="jumbotron text-center bg-primary"  -->

</body>
</html>



