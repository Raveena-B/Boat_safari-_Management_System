<script type="text/javascript" src="src/js/jquery-3.5.1.min.js"></script>
<script>
	
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<footer class="footer-distributed">

			<div class="footer-left">
 <a id=Logo href="Index.html"><img src="src/images/logo1.png" alt="CompanyLogo" height="100px" width="100px" align="left" bottom="-18px"></a>
<br><br><br><br>
				<p class="footer-links">
					<a href="index.php" class="link-1">Home</a>
					
					<a href="package.php">Packages</a>
				
					<a href="gallery.php">Gallery</a>
					
					<a href="faq.php">FAQ</a>
					
                     <a href="contact_us.php">Contact</a>
          
				</p>

				<p class="footer-company-name">Galaxy Boat safari © 2020</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p>No:40/5,Premrose Garden,<br>Colombo8,<br>Sri Lanka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+94.77.123.4567</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:galaxyboatsafari@gmail.com">galaxyboatsafari@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					GALAXY BOAT SAFARI is a tour operator founded in 2020 by a group of local expert guides who wanted to perfect tour services offered to both tourists and travel agents. 




				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>
</html>

