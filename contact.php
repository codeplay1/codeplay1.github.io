<?php include "php/db.php";?>
<?php include "php/functions.php";?>

<!-- HTML File -->
<!DOCTYPE html>
<html lang="sr">
   <head>
      <title>Kiriku M | Kontakt</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Fast food">
      <meta name="keywords" content="brza hrana, novo milosevo, gril, knjiga utisaka">
      <meta name="author" content="Maja Isakovic">
      <link rel="icon" href="favicon/favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
         rel="stylesheet">
      <script src="js/script.js"></script>
   </head>
   <body>
      <!-- header (desktop size) -->
      <header>
         <!-- slider (for mobile size) -->
         <div class="slide1">
            <span class="open_slide">
               <a href="#" onclick="openSideMenu()">
                  <svg width="30" height="30">
                     <path d="M0,5 30,5" stroke="#CE1126" stroke-width="3"/>
                     <path d="M0,14 30,14" stroke="#CE1126" stroke-width="3"/>
                     <path d="M0,23 30,23" stroke="#CE1126" stroke-width="3"/>
                  </svg>
               </a>
            </span>
         </div>
         <!-- Side menu  -->
         <div id="side_menu" class="side_nav">
            <a href="#" id="close_btn" onclick="closeSideMenu()">&times;</a>
            <a href="index.html"> Početna</a>
            <a href="meni.html"> Meni</a>
            <a href="ipressions.php"> Utisci</a>
            <a href="kontakt.html" style="color: #609191;"> Kontakt</a>
         </div>
         <div class="container logo">
            <h1>Kiriku M</h1>
            <nav>
               <ul>
                  <li><a href="index.html">Pocetna</a></li>
                  <li><a href="meni.html">Meni</a></li>
                  <li><a href="ipressions.php">Utisci</a></li>
                  <li><a href="kontakt.html" class="current">Kontakt</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <!--main-->
      <main>
         <!--forma i komentari-->
         <section id="contact_form">
            <div class="frame container">
               <h5 class="center_text hide">Kontaktirajte nas</h5>
               <h5 class="center_text show">Kontakt</h5>
               <div class="social_media_icons right_side">
                  <div class="tooltip face">
                     <a href="https://www.instagram.com/kiriku_m/" target="_blank" ><img src="images/insta_color.png" alt="instagram" title="Instagram"></a>
                     <span class="tooltiptext hide">Pratite nas na instagramu</span>
                  </div>
                  <div class="tooltip insta">
                     <a href="https://web.facebook.com/KirikuRS/" target="_blank" ><img src="images/face_color.png" alt="facebook" title="Facebook"></a>
                     <span class="tooltiptext hide">Posetite nasu facebook stranicu</span>
                  </div>
               </div>
               <p class="subtitle">
                  Kontaktirajte nas za dodatne informacije <br>Vaše pohvale i zamerke su uvek dobrodošle! :) <!--smajli na hover-->
               </p>
               <div class="contact">
                  <?php create(); ?>
                  <form class="contact_form" method="post" action="contact.php" onsubmit="return formValidation(this)">
                     <div class="name">
                        <label class="label" for="name">Ime</label><br>
                        <input class="input" id="name" type="text" name="name" placeholder="Ime">
                        <p style="color: white; font-size:12px;" id="n"></p>
                     </div>
                     <div class="name">
                        <label class="label" for="email">E-mail</label><br>
                        <input class="input" id="email" type="email" name="email" placeholder="E-mail">
                        <p style="color: white; font-size:12px;" id="e"></p>
                     </div>
                     <div class="name">
                        <label class="label" for="message">Poruka</label><br>
                        <textarea class="input_text" id="message" name="message" placeholder="Vaša poruka"></textarea>
                        <p style="color: white; font-size:12px;" id="c"></p>
                     </div>
                     <div class="name">
                        <input class="button" type="submit" name="submit" value="Pošalji">
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <!--Adresa, Radno Vreme i Social Media-->
         <div id="about_and_socialmedia">
            <div class="container flexi_about">
               <!--adresa--> 
               <address>     
                  <i class="center">Adresa</i> <br>
                  <i class="material-icons">location_on</i>  Trg palih heroja br.2<br>
                  <i class="material-icons">location_city</i>  Novo Miloševo<br>
                  <i class="material-icons">local_phone</i> <a href="tel:+381645652478" class="white"> 061/64-80-714</a><br>
                  <i class="material-icons">email</i>  kirikufastfood@gmail.com<br>
               </address>
               <!--radno vreme-->
               <div class="open">
                  <i class="center">Radno vreme</i><br>
                  <i class="material-icons">done</i>  Ponedeljak 16h - 23h<br>
                  <i class="material-icons">done</i>  Utorak 16h - 23h<br>
                  <i class="material-icons">done</i>  Sreda 16h - 23h<br>
                  <i class="material-icons">done</i>  Cetvrtak 16h - 23h<br>
                  <i class="material-icons">done</i>  Petak 16h - 23h<br>
                  <i class="material-icons">done</i>  Subota 16h - 24h<br>
                  <i class="material-icons">clear</i>  Nedelja -zatvoreno-<br>
               </div>
               <!-- Mapa -->
                  <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.5028966202503!2d20.30377421556608!3d45.7210085791048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744d13b6baeeae7%3A0x5d230629045dfce3!2sTrg+Palih+Heroja%2C+Novo+Milo%C5%A1evo!5e0!3m2!1ssr!2srs!4v1515540067886"></iframe>
                  <!--  width="500" height="350" frameborder="0" allowfullscreen  -->
            </div>
         </div>
      </main>
      <!--FOOTER-->
      <footer>
         <p>Copyright &copy; 2018 <span class="red">Maja Isakovic</span></p>
      </footer>
   </body>
</html>