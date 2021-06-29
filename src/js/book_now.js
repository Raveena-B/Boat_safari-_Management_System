


if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

  function validation(){

	var fname=document.getElementById("fname").value;
	var email=document.getElementById("email").value;
  var adr=document.getElementById("adr").value;	
	var city=document.getElementById("city").value;
	var ccnum=document.getElementById("ccnum").value;	
  var state=document.getElementById("state").value;	
  var zip=document.getElementById("zip").value;	
  var cname=document.getElementById("cname").value;	
  var expmonth=document.getElementById("expmonth").value;	
  var expyear=document.getElementById("expyear").value;	
  var cvv=document.getElementById("cvv").value;	
	
	if(fname.length<5){
		   text="Please Enter valid Name"
		   document.getElementById('error-name').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
		   return false;  
	}else{
    document.getElementById('error-name').innerHTML= '';
  }  
	if(email.indexOf('@') == -1 || email.length<6){
       text="Please Enter valid Email"
       document.getElementById('error-email').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }else{
    document.getElementById('error-email').innerHTML= '';
  } 

   if(adr.length<5){
       text="Please Enter valid Address"
       document.getElementById('error-adr').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }else{
    document.getElementById('error-adr').innerHTML= '';
  } 

	if(city.length<1){
       text="Please Enter valid City Name"
       document.getElementById('error-city').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   } else{
    document.getElementById('error-city').innerHTML= '';
  } 

   if(state.length<1){
       text="Please Enter valid State"
       document.getElementById('error-state').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   } else{
    document.getElementById('error-state').innerHTML= '';
  } 
  if(zip.length<1){
       text="Please Enter valid Zip"
       document.getElementById('error-zip').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }   else{
    document.getElementById('error-zip').innerHTML= '';
  } 
  if(cname.length<5){
       text="Please Enter valid Name on The Card"
       document.getElementById('error-cname').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }     else{
    document.getElementById('error-cname').innerHTML= '';
  } 
	if(ccnum.length<5){
       text="Please Enter valid Card Number"
       document.getElementById('error-ccnum').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }else{
    document.getElementById('error-ccnum').innerHTML= '';
  } 

  if(expmonth.length !==2){
       text="Please Enter valid Exp Month"
       document.getElementById('error-expmonth').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }    else{
    document.getElementById('error-expmonth').innerHTML= '';
  } 
   
   if(expyear.length !== 2){
       text="Please Enter valid Year"
       document.getElementById('error-expyear').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   } else{
    document.getElementById('error-expyear').innerHTML= '';
  }      

   if(cvv.length !== 3){
       text="Please Enter valid CVV"
       document.getElementById('error-cvv').innerHTML=text;
       var elmnt = document.getElementById("book_now");
       elmnt.scrollIntoView();
       return false;  
   }   else{
    document.getElementById('error-cvv').innerHTML= '';
  }     
  
  
  


   document.getElementById("book_now_form").submit();

  }
	

  
