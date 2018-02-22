<?php include "php/db.php";?>
<?php include "php/functions.php";?>

<!-- HTML Page -->
<!DOCTYPE html>
<html lang="sr">
   <head>
      <title>Kiriku M | Knjiga utisaka</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Fast food">
      <meta name="keywords" content="brza hrana, novo milosevo, gril, restoran">
      <meta name="author" content="Maja Isakovic">
      <link rel="icon" href="favicon/favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/style.css">
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
            <a href="utisci.html" style="color: #609191;"> Utisci</a>
            <a href="contact.php"> Kontakt</a>
         </div>
         <div class="container logo">
            <h1>Kiriku M</h1>
            <nav>
               <ul>
                  <li><a href="index.html">Pocetna</a></li>
                  <li><a href="meni.html">Meni</a></li>
                  <li><a href="utisci.html" style="color: #609191;">Utisci</a></li>
                  <li><a href="contact.php">Kontakt</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <main id="heading_impression">
         <!--top knjiga slika-->
         <section>
            <div class="container book_image">
               <img class="book_open" src="images/book.png" alt="Knjiga utisaka">	
               <h2 class="h2_book_imp">Upišite se u našu knjigu utisaka</h2>
            </div>
         </section>
         <!--forma i komentari-->
         <section id="forma_comments">
            <div class="container flexi">
               <div class="space_around">
               <?php createComent(); ?>
                  <h3 class="h3_comment">Ostavite komentar</h3>
                  
                  <form class="comment_form" method="post" action="ipressions.php" onsubmit="return comentFormValidation(this)">
                     <div class="name">
                        <label class="label" for="name">Ime</label><br>
                        <input class="input" id="name" type="text" name="name_coment" placeholder="Ime">
                        <p style="color: white; font-size:12px;" id="cn"></p>
                     </div>
                     <div class="name">
                        <label class="label" for="comment">Komentar</label><br>
                        <textarea class="input_text" id="comment" name="comment_coment" placeholder="Vaš komentar"></textarea>
                        <p style="color: white; font-size:12px;" id="cc"></p>
                     </div>
                     <div class="name">
                        <input class="button" type="submit" name="submit" value="Potvrdi">
                     </div>
                  </form>
                   <div class="comments">
                  		<?php readComent();?>
               	   </div>             
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
               <!--social media icons-->
               <div class="social_media_icons">
                  <div class="tooltip face">
                     <a href="https://www.instagram.com/kiriku_m/" target="_blank" ><img src="images/insta_color.png" alt="instagram" title="Instagram"></a>
                     <span class="tooltiptext hide">Pratite nas na instagramu</span>
                  </div>
                  <div class="tooltip insta">
                     <a href="https://web.facebook.com/KirikuRS/" target="_blank" ><img src="images/face_color.png" alt="facebook" title="Facebook"></a>
                     <span class="tooltiptext hide">Posetite nasu facebook stranicu</span>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <!--FOOTER-->
      <footer>
        <p>Copyright &copy; 2018 <span class="red">Maja Isakovic</span></p>
      </footer>
   </body>
</html>