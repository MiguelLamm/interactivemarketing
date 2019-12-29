<?php

    if(!empty($_POST['voornaam']) && !empty($_POST['naam']) && !empty($_POST['email'])){

        $voornaam = $_POST['voornaam'];
        $naam = $_POST['naam'];
        $email =$_POST['email'];

        if(strpos($email,'@') == false){
            echo 'ah shit, ge vergat een @ in de mail';
        }


        $conn = new PDO("mysql:host=localhost; dbname=interactive;","root","");
        $statement = $conn->prepare("INSERT into userData (email,naam,voornaam) VALUES(:email, :naam, :voornaam)");
        $statement->bindParam(":email",$email);
        $statement->bindParam(":naam",$naam);
        $statement->bindParam(":voornaam",$voornaam);
        $result = $statement->execute();

        if($result == true){
            echo 'signup gelukt';
        }
        else{
            echo 'yikes';
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">

    <title>IMD voor vrouwen | Kom het hier te weten!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Overpass&display=swap" rel="stylesheet">


    <meta name="theme-color" content="#272727">
    <link rel=”canonical” href= "">
    <link rel="shortcut icon" href="">
    <!--Social Media posting-->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5ZG6MS2');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154995670-1"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154995670-1');
    </script>

    <!-- Hotjar Tracking Code for www.Femina.weareimd.be -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1624438,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Place this data between the <head> tags of your website -->
    <meta name="description" content="Ben jij creatief en goed met je computer zoals een webdesigner? TEST HET HIER!" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Ben jij een webdesigner?">
    <meta name="twitter:description" content="Ben jij creatief en goed met je computer zoals een webdesigner? TEST HET HIER!">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="Ben jij een webdesigner" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Ben jij creatief en goed met je computer zoals een webdesigner? TEST HET HIER!" />
    <meta property="og:site_name" content="IMD tester" />
    <meta property="fb:admins" content="Facebook numeric ID" />

    <link rel="icon" type="image/png" sizes="16x16" href="resized/favicon-16x16.png">

    </head>

    <body>
        
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZG6MS2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        
    <p class="fem">Femina</p>    
        <section class="text-section text-section1">
        <div class="sect1">
            <h1>WE NEED YOU!</h1>
            <p id="subtitle">Interactive Marketing Design, een bachelor-studierichting van Thomas More in Mechelen, is elk jaar opnieuw opzoek naar nieuwe studenten die een carrière willen beginnen in webdesign of development. We willen af van het stereotype dat enkel jongens in de IT-sector terechtkomen. IMD is de perfecte middenweg tussen puur coderen en artistieke kunst. </br>
            </br>
            Daarom hebben wij, vier derdejaars studenten, Femina opgericht. Een platform dat vrouwelijke studenten een inkijk geeft om naar IMD te komen. Hieronder kan je een test invullen om te zien of dit iets voor jou is! 
        </div>
        </section>
        
        <section class="text-section text-section2">
        <div class="sect2">
            <h2>Doe de test!</h2>
            <p>Vul onderstaande test in om te weten te komen of jij de capaciteiten hebt om IMD'er te worden!</p>
        </div>
            
            <div id="center">
                <h1 id="titel"></h1>
                <p id="vraag"></p>
                <div class="btn">
                    <button class="buttons" onclick="ja()" id="ja">Ja</button>
                    <button class="buttons" onclick="nee()" id="nee">Nee</button>
                </div>
                <button onclick="start()" id="startknop">Start de test!</button>
                <p id="score"></p>
                <br>
                <p id="nummer"></p>
            </div>
        </section>
        
        <section class="containerform">
            <div class="sect3">
            <h2>Over IMD</h2>
            <p>Wil je alvast nu al meer weten over Interactive Multimedia Design? Bekijk dan hier de programmagids van de opleiding! Je ontdekt er meteen wat IMD jou kan bieden, welke vakken je kan volgen en de beroepsmogelijkheden nadat je afstudeert.</p>
            <a id="programma" href="https://www.thomasmore.be/opleidingen/professionele-bachelor/informatiemanagement-en-multimedia/interactive-multimedia-design" >Programmagids</a>
            </div>
            <div class="form">
                <h2>Schrijf je in voor meer!</h2>
                <form action="" method="POST">
                    <input type="text" name="naam" id="naam" placeholder="Naam">
                    <br>
                    <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam">
                    <br>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <br>
                    <input type="submit" value="Versturen">
                </form>
            </div>
        </section>

        <!-- <section class="about">
            <p>IMD staat voor Interactive Multimedia & Design en wij specialiseren ons in websites.</p>
        </section> -->

        <script>
            var score = 0;
            var vraagnummer = 1;
    
            function ja() {
                score++;
                vraagnummer++;
            }
    
            function nee() {
                vraagnummer++;
            }
    
            function start() {
    
                document.getElementById("startknop").innerHTML = "volgende vraag";
    
                if (vraagnummer == 1) {
                    document.getElementById("titel").innerHTML = "Vraag 1";
                    document.getElementById("vraag").innerHTML = "Kan je goed met computers werken?";
                } else if (vraagnummer == 2) {
    
                    document.getElementById("titel").innerHTML = "Vraag 2";
                    document.getElementById("vraag").innerHTML = "Surf je vaak op het internet?";
                } else if (vraagnummer == 3) {
    
                    document.getElementById("titel").innerHTML = "Vraag 3";
                    document.getElementById("vraag").innerHTML = "Kan je met stress omgaan?";
                } else if (vraagnummer == 4) {
    
                    document.getElementById("titel").innerHTML = "Vraag 4";
                    document.getElementById("vraag").innerHTML = "Is creativiteit een deel van jou?";
                } else if (vraagnummer == 5) {
    
                    document.getElementById("titel").innerHTML = "Vraag 5";
                    document.getElementById("vraag").innerHTML = "Hou je van nieuwe dingen creeëren?";
                }
    
                if (vraagnummer == 6) {
    
                    if (score >= 0 && score <= 2) {
                        document.getElementById("titel").innerHTML = "Geen zorgen!";
                        document.getElementById("vraag").innerHTML = "Bij IMD leer je de fundamentele bouwstenen.";
                    } else if (score => 3 && score <= 4) {
                        document.getElementById("titel").innerHTML = "Je hebt talent!";
                        document.getElementById("vraag").innerHTML = "Je hebt de talenten om bij IMD te komen.";
                    } else if (score >= 5) {
                        document.getElementById("titel").innerHTML = "UITSTEKEND!";
                        document.getElementById("vraag").innerHTML = "Jij bent de toekomstige IMD student!";
                    }
    
                    document.getElementById("ja").style.display = "none";
                    document.getElementById("nee").style.display = "none";
                    document.getElementById("startknop").style.display = "none";
                }
            }
        </script>
</body>
</html>