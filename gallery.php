<!--https://www.w3schools.com/howto/howto_css_hero_image.asp-->
<?php include('src/includes/header.php'); ?>
<link rel="stylesheet" type="text/css" href="src/styles/gallery.css">

<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<div class="hero-image">
  <div class="hero-text">
    <h1>Welcome to the Gallery</h1>
    <p style="color:#c2c0c0; font-family:Arial;">This page contain some featured images and you can enlarge the images in our gallery to see the beauty of our boat safari experience...</p>
</div>
</div>


<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="src/images/img1.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
       </div>
   <div class="column">
    <img src="src/images/img2.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
       </div>
   <div class="column">
    <img src="src/images/img3.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
       </div>
   <div class="column">
   <img src="src/images/img4.jpeg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
        </div>
   <div class="column">
   <img src="src/images/img5.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
       </div>
   <div class="column">
   <img src="src/images/img6.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
    <div class="column">
   <img src="src/images/img7.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
  <div class="column">
   <img src="src/images/img8.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
     <div class="column">
   <img src="src/images/img9.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
     <div class="column">
   <img src="src/images/img10.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
     <div class="column">
   <img src="src/images/img11.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
       <div class="column">
   <img src="src/images/img12.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
    <div class="column">
   <img src="src/images/img13.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
    <div class="column">
   <img src="src/images/img14.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
     <div class="column">
   <img src="src/images/img15.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
     <div class="column">
   <img src="src/images/img16.jpg" alt="Galaxy Boat Safari" style="width:100%" onclick="myFunction(this);">
      </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span><!--&times show the close button(multiply sign)refernce about &times=https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_close-->
  <img id="expandedImg" style="width:60%" class="center">
  <div id="imgtext"></div>
</div>

<script type="text/javascript">
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>


<?php include('src/includes/footer.php'); ?>
 