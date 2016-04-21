<!doctype html>
<html lang='fr'>
<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="cssmenu.css">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" type="text/css" href="css2.css"/>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <title>Restaurant Tour de Pisa</title>
</head>
<body>

<div class="codepostal">
              <div class="resto">Chercher votre restaurant</div>
              <form method="GET" action="/restaurant">
                <input type="text" name="cherche" placeholder="Votre code postal " />
                <button>OK</button>
              </form>                  
            </div>

<div class='top'></div>
<div class='logo'></div>
<div class='titre'>Tour de Pisa</div>
<div class='tel'>03 29 33 88 88</div>
<div class='sstitre'>Pizzas au feu de bois sur place ou à emporter</div>
<div class='cssmenu'>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'>Accueil</a></li>
   <li><a href='produits.php'>Nos produits</a></li>
   <li><a href='contact.php'>Nous contacter</a></li>
</ul>
</div>
</div>
	



<div class="contacts">
 <form action="/contact" method="post">
   <div class="mapcontact">
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10641.818392451098!2d6.441593!3d48.178592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3184cd6e4faf2ff0!2sCentre+d&#39;affaires!5e0!3m2!1sen!2sfr!4v1461139258912" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
   <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" />
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" />
    </div>
    <div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" />
    </div>
    <div>
        <label for="téléphone">Téléphone :</label>
        <input type="text" id="téléphone" />
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" />
    </div>
    <div>
        <label class="textmessage"for="message">Message :</label>
        <textarea class="message" id="message"></textarea>
    </div>
    <div >
    	<input class= "bouton" type="submit" value="Envoyer"> 
 
    </div>
   
</form>
</div>


<footer class="footer">
            <div class="footer-gauche">

                <h3><span>Tour de Pisa</span></h3>

                <p class="footer-liens">
                    <a href="#">Accueil</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">A Propos</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Nous contacter</a>
                </p>

                <p class="footer-realiser">Simplon-Epinal @ 2016</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>1 Avenue du Général de Gaulle</span> 88000 Épinal</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>03 29 33 88 88</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:pizzeria@tour-de-pisa.com">pizzeria@tour-de-pisa.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-apropos">
                    <span>A propos</span>
                    Aujourd’hui, “Tour de Pisa” est la première enseigne française sur le marché de la pizza livré à domicile.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>

                </div>

            </div>

        </footer>

</body>
<html>
 


    

