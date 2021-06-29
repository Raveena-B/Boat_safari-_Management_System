<!--source code:https://codepen.io/thewebdev12/pen/OwBbej-->
<?php include('src/includes/header.php'); ?>

<link rel="stylesheet" type="text/css" href="src/styles/faq.css">
<h1>FAQ Section</h1>

 <div class="container">

 <div class="acc">
    <h3>Question 1: Should I check my phone or email before the trip?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Yes, please! We might need to adjust plans. Nice weather on land sometimes means rough seas. Please be reachable in case of weather or scheduling concerns. When you book, please enter a cell phone number and remember to check voice mail and email before your trip (including the SPAM folder).</p>
     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>Question 2: Why should I arrive 30 minutes early?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>The boat leaves the dock at the tour start time and boarding is 15 minutes before that. We have a safety orientation, distribute waterproof clothing, and put on life vests. You’ll need another 15 minutes to visit the restroom and pay for parking at the far end of the parking lot. Late arrivals will shorten the time on the water for everyone on board.</p>
     </div>
    </div>
   </div> 

  <div class="acc">
    <h3>Question 3: What happens if it rains?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>The tour runs in light rain and other moderate weather conditions, but Fthe captain may cancel a trip up to an hour before the start time in the event of severe or unsafe weather conditions. If we cancel the event, ticket holders will be allowed to reschedule tickets (subject to availability), convert their tickets to Gift Certificates for use in the future, or receive a full refund.</p>
     </div>
    </div>
   </div> 


  <div class="acc">
    <h3>Question 4: Has the boat ever gone over the Falls?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Our trip is located down river from the falls, therefore it is impossible for our boats to go over the Falls. The closest our tour gets to the Falls is the Whirlpool, which is approximately one mile north. A good section of class six whitewater keeps us from going any further up river.</p>
     </div>
    </div>
   </div> 

   <div class="acc">
    <h3>Question 5: How many people does the boat hold?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>We have 9 boats in our fleet. The Freedom Jet holds 62 passengers. Five of our Wet Jet boats hold 48 passengers each and two hold 54 passengers. Due to COVID-19, our capacity on each vessel has been adjusted for the 2020 season.</p>
     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>Question 6: What else should I bring?</h3> 
     <div class="content">
       <div class="content-inner">
         <ul>
         <li>sunscreen</li>
         <li>sunglasses</li>
         <li>camera</li>
         <li>snack, drink</li>
         </ul>
     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>Question 7: What should I NOT bring?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>full meals or messy/crumbly snacks
fragile glassware; sharp knives
muddy or caked shoes (keep boat clean & reduce our water use)
fine leather shoes/jackets that could be damaged by salt spray
sharp or high heels</p>
     </div>
    </div>
   </div> 

 <div class="acc">
    <h3>Question 8: What is NOT allowed on board?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Cannabis
         firearms including permitted concealed carry</p>
     </div>
    </div>
   </div> 


  <div class="acc">
    <h3>Question 9: Is this tour good for all ages?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Our age limit is 8 and up on all trips. For safety reasons we do not allow younger children. Children must wear life jackets assigned by the Captain at all times and follow all safety instructions, with parents’ attention.</p>
     </div>
    </div>
   </div> 

  <div class="acc">
    <h3>Question 10: Can I book a private tour?</h3> 
     <div class="content">
       <div class="content-inner">
         <p>Yes! We offer private charters. To inquire further, please email us.</p>
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