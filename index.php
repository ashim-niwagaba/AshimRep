<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Final | year | project</title>
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <style>
    header nav img{
  width:47px;
  border-radius: 50%;
}
@media(max-width: 400px){
  header nav img{
  display: none;
}
}
  </style>
</head>
<body>
<header>
  <nav>
    <ul class="ul"> 
    <div class="hamburger-div">
      <div class="hamburger-span"></div>
      <div class="hamburger-span"></div>
      <div class="hamburger-span"></div>
    </div>  
      <li id="logo"><img src="assets/logo.jpg" alt="logo" class="log" ></li>
      <?php
    if (isset($_SESSION['userid'])) {
       
        echo  '<form action="includes/logout.inc.php" method="POST">
        
        <button class="btn" type="submit" name="logout-submit">Logout</button><br>
    </form>';
      
    }
    else{
         echo '<li class="li"><a href="login.php">Login</a></li>';

    }
    ?>
   
      
      <li class="li"><a href="#snd-sec">Vaccination centers</a></li>
      <li class="lii"><a href="index.php"></a></li>
    </ul>
  </nav>
</header>

<h2>Vaccination Centers in Kampala</h2>

<section class="img-sec">

  <div class="image">
    <img src="assets/Uganda.png" width="">
  </div>
  <a href="https://www.health.go.ug/covid">
    <div class="news">

    <a href="https://www.health.go.ug/covid" class="button">Read More >></a>
  </div>
  </a>
  
</section>

<section class="snd-sec" id="snd-sec">
  <h2 style="padding: 0; margin: 4px;">Vaccination centers in Kampala district</h2>
  <div class="centers_one">
    
    <ul>
      <h3>Kawempe Division</h3>
      <a href="reservation.php"><li>Komamboga HC III</li></a> 
      <a href="reservation.php"><li>Kisaasi Church of Uganda MC</li></a> 
      <a href="reservation.php"><li>St. Stephen Mpererwe Hospital</li></a> 
      <a href="reservation.php"><li>Kawempe NRH</li></a> 
     
      
    </ul>
  </div>
  <div class="centers_two">
    
    <ul>
      <h3>Nakawa Division</h3>
      <a href="reservation.php"><li>China-Uganda Friendship Hospital, Naguru</li></a> 
      <a href="reservation.php"><li>Kiswa HC III</li></a> 
      <a href="reservation.php"><li>UMC, Victoria Hospital, Bukoto</li></a> 
      <a href="reservation.php"><li>Butabika Hospital</li></a> 
     
    </ul>
  </div>
  <div class="centers_two">
   
    <ul>
       <h3>Makindye Division</h3>
       <a href="reservation.php"><li>Kisugu HC III</li></a> 
       <a href="reservation.php"><li>Kiruddu NRH</li></a> 
       <a href="reservation.php"><li>Kibuli Hosp</li></a> 
       <a href="reservation.php"><li>St.Francis Nsambya Hosp</li></a> 
     

    </ul>
  </div>

  <div class="centers_two">
    
    <ul>
      <h3>Rubaga Division</h3>
      <a href="reservation.php"><li>Rubaga Hospital</li></a> 
      <a href="reservation.php"><li>Kitebi HC III</li></a> 
      <a href="reservation.php"><li>Mengo Hospital</li></a> 
      <a href="reservation.php"><li>Kawaala HC III</li></a> 

     
    </ul>

  </div>
  <div class="centers_two">
   
    <ul>
       <h3>Central Division</h3>
      <a href="reservation.php"><li>Vine Medical Centre</li></a> 
      <a href="reservation.php"><li>Kisenyi HC IV</li></a> 
      <a href="reservation.php"><li>City Hall Clinic</li></a> 
      <a href="reservation.php"><li>Kamwokya Christian Caring Centre</li></a> 

      
    </ul>
  </div>
  
</section>
<div><p>
  
</p></div>

<section class="maps">
  <p>Google maps showing vaccination centers in Kampala</p>
  <div id="map"></div>
</section>
<section class="footer">
  <div><p>
    In other Districts, COVID-19 Vaccinaion is is curried-out at health centers IV and III, General Hospitals and Regional Referral Hospitals.
  </p></div>
  <h3>Important Links</h3>
  <a href="https://www.health.go.ug/covid">Ministry of Health</a>
  <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1">World Health Organisation</a>
  <a href="https://africacdc.org/covid-19/">Afrika</a>
  

</section>
<footer class="footer2">
  <center>&copy; Copright: 2022 Vacc.Net Stay Safe!</center> 
</footer>

<section class="aside">
    <ul>
    <li><a href="#snd-sec">Vaccination Centers Kla</a></li>
    <li><a href="https://www.health.go.ug/cause/covid-19-vaccination-sites-by-district-in-uganda/">Vaccination centers Uganda</a></li>
    <li><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1">W.H.O</a></li>
    <li><a href="https://covid19.who.int/">Covid-Globally</a></li>
    <li><a href="https://www.webmd.com/lung/covid-19-symptoms">Be Aware!</a></li>
    <li><a href="http://www.afenet.net/index.php/news/news/651-guidelines-for-prevention-of-covid-19-in-public-places">Prevetion</a></li>
    <li><a href="index.php">Home</a></li>
    </ul>
    <center>&copy; Copright: 2022 Legit Group Stay Safe!</center>
</section>


<section class="back-drop">
    
</section>
<script type="text/javascript" src="js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr0Y4zgp4TH4Xwpfi6kbmHxsT9cIBecNY &callback=initMap"
  type="text/javascript"></script>

</body>
</html>