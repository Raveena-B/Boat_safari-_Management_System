<!--source code:https://codepen.io/thewebdev12/pen/OwBbej-->
<?php include('src/includes/header.php'); ?>

<link rel="stylesheet" type="text/css" href="src/styles/p&p.css">

<h1>Privacy Policy</h1>
<center><p style="font-size:17px;color:white;">As Galaxy Boat Safari we are committed to safeguarding and preserving the privacy of our visitors. This Privacy Policy explains what happens to any personal data that you provide to us, or that we collect from you whilst you visit our site. We do update this Policy from time to time so please do review this Policy regularly.</p></center>


 <div class="container">

 <div class="acc">
    <h3>1.In running and maintaining our website we may collect and process the following data about you:</h3> 
     <div class="content">
       <div class="content-inner">
       1. Information about your use of our site including details of your visits such as pages viewed and the resources that you access.<br>

Such information includes traffic data, location data and other communication data.<br>

2. Information provided voluntarily by you. For example, when you make a booking inquiry.<br>

3. Information that you provide when you communicate with us by any means.<br>

     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>2.Use of Your Information</h3> 
     <div class="content">
       <div class="content-inner">
         <p>We use the information that we collect from you to provide our services to you. In addition to this we may use the information for one or more of the following purposes:</p><br>

1. To provide information to you that you request from us relating to our products or services.<br>

2. To provide information to you relating to other products that may be of interest to you. Such additional information will only be provided where you have consented to receive such information.<br>

3. To inform you of any changes to our website, services or goods and products.<br><p>
     </div>
    </div>
   </div> 

  <div class="acc">
    <h3>3.Storing Your Personal Data</h3> 
     <div class="content">
       <div class="content-inner">
       <p>Unfortunately the sending of information via the internet is not totally secure and on occasion such information can be intercepted. We cannot guarantee the security of data that you choose to send us electronically, Sending such information is entirely at your own risk.</p>
     </div>
    </div>
   </div> 


  <div class="acc">
    <h3>4.Disclosing Your Information</h3> 
     <div class="content">
       <div class="content-inner">
       <p>We will not disclose your personal information to any other party other than in accordance with this Privacy Policy and in the circumstances detailed below:</p><br>

1. In the event that we sell any or all of our business to the buyer.<br>

2. Where we are legally required by law to disclose your personal information.<br>

3. To further fraud protection and reduce the risk of fraud.<br>
     </div>
    </div>
   </div> 

   <div class="acc">
    <h3>5.Third Party Links</h3> 
     <div class="content">
       <div class="content-inner">
       <p>On occasion we include links to third parties on this website. Where we provide a link it does not mean that we endorse or approve that site’s policy towards visitor privacy. You should review their privacy policy before sending them any personal data.</p>
     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>6.Contacting Us</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Please do not hesitate to contact us regarding any matter relating to this Privacy Policy at galaxyboatsafari@gmail.com</p>
     </div>
    </div>
   </div> 

 
</div>

<?php include('src/includes/footer.php'); ?>
<script type="text/javascript">

$(document).ready(function(){
	$('.acc h3').click(function(){
		$(this).next('.content').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>