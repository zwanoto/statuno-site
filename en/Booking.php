
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Automated appointment booking for statistical consulting and statistics tutoring">
    <meta name="author" content="Thomas Zwanowetz">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Statistics Consulting - Book an Appointment</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <link rel="canonical" href="https://statuno.com/en/Booking.php">

<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->
<?php
$visitors = file_get_contents('../counter.txt');
$visitors = $visitors + 1;
file_put_contents('../counter.txt', $visitors);
?>
</head>

<style>
        select#language-select {
        background-color: #414141;
        color: white;
    }
    .big-calendar-icon {
      font-size: 100px;
    }
    <style>
    form#contact button:hover {
      background-color: #4771cb!important;
      color: #fff!important;
      border-bottom: 2px solid black!important;
    }
    .framework {
      background-color: white;
      border: 1px solid #0069FF;
      border-radius: 0px;
      color: blueblack;
      text-align: center;
      margin-top: 10px;
      width: 100%;
      padding: 20px; /* Adjust the padding as desired */
    }
  </style>
<body>


  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="https://www.statuno.com/en/index.php" class="logo">
              <h4>Statuno </h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="Team.php" >Team</a></li> 
              <li class="scroll-to-section"><a href="Prices.php">Prices </a></li> 
               <li class="scroll-to-section"><a href="Testimonials.php">Testimonials </a></li> 
               <li class="scroll-to-section"><a href="Legal.php">Legal Notice </a></li>
               <li class="scroll-to-section"><a href="Contact.php">Contact Us</a></li> 
               <li class="scroll-to-section"><a href="../Terminbuchung.php"><strong> DE </strong> </a></li> 

               <li class="main-blue-button"><a href="Booking.php">Book Now </a></li> 
             </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <style>
    body {
      background-color: lightblue;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      height: 120vh;
      margin: 0;
    }
  
    .box {
      margin-top: 50px;
      margin-bottom: 20px;
      background-color: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px;
    }
  
    h2 {
      text-align: center;
      margin-top: 0;
    }
  
    .box h4 {
      margin: 10px 0;
    }
  
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      background-color: #f9f9f9;
      font-size: 14px;
    }
  
    #selectedTime {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
    }
  
    .button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  .calendly-button {
    display: inline-block;
    text-align: center; /* Add this line to center the button horizontally */
  }
  
  .calendly-button a {
    display: inline-block;
    background-color: #1338be;
    font-size: 15px;
    font-weight: 400;
    color: #fff !important;
    text-transform: capitalize;
    padding: 12px 25px;
    border-radius: 23px;
    letter-spacing: 0.25px;
    transition: all .3s;
  }
  
  .calendly-button a:hover {
    background-color: darkblue!important;
    color: white!important;
  }</style>
  
  <body>
    <div class="box" style="margin-top:150px">
    <h2><strong><span class="calendar-symbol">📅</span> Book an Appointment</strong></h2>
      <br>

      <div>
        <h4>Duration</h4>
        <select id="select-button1" onchange="updateTime()"  style=   "width: 100%;
      padding: 8px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      background-color: #f9f9f9;
      font-size: 14px;">
        <option value="1">Initial Consultation (15 minutes)</option>
        <option value="2">30 minutes</option>
        <option value="3">45 minutes</option>
        <option value="4" selected>1 hour</option>
        <option value="5">1.5 hours</option>
        <option value="6">2 hours</option>
        <option value="7">3 hours</option>
        </select>
      </div>
      <div>
        <h4>Payment Method</h4>
        <select id="framework2" onchange="updatePayment()" style="display: flex;">
          <option value="1">Paypal (-10%)</option>
          <option value="2">Credit Card (-10%)</option>
          <option value="3">Pay Later</option>
        </select>
        </div>
        <div>
          <h4>Price</h4>
          <div id="selectedTime">99 USD</div>
        </div>
    <!-- Calendly Link-Widget Begin -->
    <br>
    <div id = 'container1' class="button-container" style="display:none">
     <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/kostenloses-erstgesprach'}); return false;">Confirm and choose an appointment</a></div>
    </div><!-- Calendly Link-Widget End -->
    <!-- Calendly Link-Widget Begin -->
    <div id = 'container2' class="button-container" style="display:none">
     <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-30min'}); return false;">Confirm and choose an appointment</a></div>
    </div><!-- Calendly Link-Widget End -->
    <div id = 'container3' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-45min'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <!-- Calendly Link-Widget Begin -->
     <div id = 'container4' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1h'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container5' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1-5h'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <!-- Calendly Link-Widget Begin -->
     <div id = 'container6' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-2h'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container7' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-3h'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container8' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-30-minuten-paypal'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
     <div id = 'container9' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-45-minuten-paypal'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
     <div id = 'container10' class="button-container" style="display:flex">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1h-paypal'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
     <div id = 'container11' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1-5h-paypal'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
     <div id = 'container12' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statist'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
     <div id = 'container13' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-3h-paypal'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container14' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-30-minuten-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container15' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-45-minuten-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container16' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1-stunde-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container17' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-1-5h-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container18' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-2h-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
     <div id = 'container19' class="button-container" style="display:none">
      <div  class="main-blue-button"> <a  id = 'calendly-button' href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/statuno/statistik-beratung-3h-kreditkarte'}); return false;">Confirm and choose an appointment</a></div>
     </div><!-- Calendly Link-Widget End -->
    
        </div>
    
     
      </body>
      
      

  <!-- Scripts -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

  <script>
    // Get references to the select button and the link button containers


// Call the function initially to set the initial visibility of link buttons
    var factor = 1;

     function updateTime() {
  var selectElement = document.getElementById("select-button1");
  var paymentElement = document.getElementById("framework2");
      var paymentValue = paymentElement.value;

  var selectedValue = selectElement.value;
  var price = 0;
selectedValue_ = selectedValue
  if (selectedValue === "1") {
    price = 0; // Erstgespräch 15 min - 89 Euros
    selectValue = "1"
  } else if (selectedValue === "2") {
    if (paymentValue == "1"){
      selectValue = "8"}
    else if (paymentValue == "2"){
      selectValue = "14"}
    else if (paymentValue == "3"){
      selectValue = "2"}
    price = 54; // 30 min - 89 Euro
  } else if (selectedValue === "3") {
    if (paymentValue == "1"){
      selectValue = "9"}
    else if (paymentValue == "2"){
      selectValue = "15"}
    else if (paymentValue == "3"){
      selectValue = "3"}
    price = 77; // 45 min - 89 Euros
  } else if (selectedValue === "4") {
    if (paymentValue == "1"){
      selectValue = "10"}
    else if (paymentValue == "2"){
      selectValue = "16"}
    else if (paymentValue == "3"){
      selectValue = "4"}
    price = 99; // 60 min - 89 Euros
  } else if (selectedValue === "5") {
    if (paymentValue == "1"){
      selectValue = "11"}
    else if (paymentValue == "2"){
      selectValue = "17"}
    else if (paymentValue == "3"){
      selectValue = "5"}
    price = 143; // 1.5 h - 149 Euros
  } else if (selectedValue === "6") {
    if (paymentValue == "1"){
      selectValue = "12"}
    else if (paymentValue == "2"){
      selectValue = "18"}
    else if (paymentValue == "3"){
      selectValue = "6"}
    price = 188; // 2 h - 199 Euros
  } else if (selectedValue === "7") {
    if (paymentValue == "1"){
      selectValue = "13"}
    else if (paymentValue == "2"){
      selectValue = "19"}
    else if (paymentValue == "3"){
      selectValue = "7"}
    price = 272; // 3 h - 249 Euros
  }
if (paymentValue == "3"){factor = 1.11;}
else {factor = 1.00;}
var price_ = Math.round(price * factor);
  document.getElementById("selectedTime").innerHTML = price_ + " Euro";
  const selectButton1 = document.getElementById('select-button1');
const linkButtonContainers = document.getElementsByClassName('button-container');

// Function to update the visibility of link buttons based on the selected option
// const selectValue = selectButton1.value;

// Hide all link button containers
for (let i = 0; i < linkButtonContainers.length; i++) {
linkButtonContainers[i].style.display = 'none';
}

// Show the link button container corresponding to the selected option
const selectedContainer = document.getElementById(`container${selectValue}`);
selectedContainer.style.display = 'flex';

}



function updatePayment() {
      var paymentElement = document.getElementById("framework2");
      var paymentValue = paymentElement.value;
      var selectElement = document.getElementById("select-button1");
      var selectedValue = selectElement.value;

      var priceElement = document.getElementById("select-button1");
      var price = 0;
      var factor = 1.000;
  
if (selectedValue === "1") {
    price = 0; // Erstgespräch 15 min - 89 Euros
    selectValue = "1"
  } else if (selectedValue === "2") {
    if (paymentValue == "1"){
      selectValue = "8"}
    else if (paymentValue == "2"){
      selectValue = "14"}
    else if (paymentValue == "3"){
      selectValue = "2"}
    price = 54; // 30 min - 89 Euro
  } else if (selectedValue === "3") {
    if (paymentValue == "1"){
      selectValue = "9"}
    else if (paymentValue == "2"){
      selectValue = "15"}
    else if (paymentValue == "3"){
      selectValue = "3"}
    price = 77; // 45 min - 89 Euros
  } else if (selectedValue === "4") {
    if (paymentValue == "1"){
      selectValue = "10"}
    else if (paymentValue == "2"){
      selectValue = "16"}
    else if (paymentValue == "3"){
      selectValue = "4"}
    price = 99; // 60 min - 89 Euros
  } else if (selectedValue === "5") {
    if (paymentValue == "1"){
      selectValue = "11"}
    else if (paymentValue == "2"){
      selectValue = "17"}
    else if (paymentValue == "3"){
      selectValue = "5"}
    price = 143; // 1.5 h - 149 Euros
  } else if (selectedValue === "6") {
    if (paymentValue == "1"){
      selectValue = "12"}
    else if (paymentValue == "2"){
      selectValue = "18"}
    else if (paymentValue == "3"){
      selectValue = "6"}
    price = 18; // 2 h - 199 Euros
  } else if (selectedValue === "7") {
    if (paymentValue == "1"){
      selectValue = "13"}
    else if (paymentValue == "2"){
      selectValue = "19"}
    else if (paymentValue == "3"){
      selectValue = "7"}
    price = 272; // 3 h - 249 Euros
  }
    if (paymentValue =="3"){factor = 1.11}
    else {factor = 1.00;}

      var price_ = Math.round(price * factor);
      document.getElementById("selectedTime").innerHTML = price_ + " Euro";
      const selectButton1 = document.getElementById('select-button1');
const linkButtonContainers = document.getElementsByClassName('button-container');

// Function to update the visibility of link buttons based on the selected option
// const selectValue = selectButton1.value;

// Hide all link button containers
for (let i = 0; i < linkButtonContainers.length; i++) {
linkButtonContainers[i].style.display = 'none';
}

// Show the link button container corresponding to the selected option
const selectedContainer = document.getElementById(`container${selectValue}`);
selectedContainer.style.display = 'flex';

// Update the URL based on the selected option
}

    
    // Get a reference to the button element
// Get references to the select button and the button element

// Function to update the URL based on the selected option
// Add an event listener to the select button

// Call the function initially to set the initial URL


  </script>
</body>
</html>