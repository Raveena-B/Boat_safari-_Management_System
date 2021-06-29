<!--source code:https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto--->

<?php include('src/includes/header.php'); ?>

<link rel="stylesheet" type="text/css" href="src/styles/slider.css">
<div style="background-image: url('src/images/homepage4.jpg');">

<div class="content">

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="src/images/safari1.jpg" style="width:100%">
  <div class="text">Whild Safari</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img  src="src/images/safari3.jpg" style="width:100%">
  <div class="text">Self Drive Safari</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="src/images/safari5.jpg" style="width:100%">
  <div class="text">Self Drive Safari</div>
</div>

</div>



</div>
</div>

<script type="text/javascript">

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
<?php include('src/includes/footer.php'); ?>