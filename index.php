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
	<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Itim' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
   <title>Restaurant Tour de Pisa</title>
</head>
<body>
 <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
<div class="codepostal">
              <div class="resto">Chercher votre restaurant</div>
              <form method="GET" action="/restaurant">
                <input type="text" name="cherche" placeholder="Votre code postal " />
                <button>OK</button>
              </form>                  
            </div>

<div class='top'></div>
<a href="index.php"><div class='logo'></div></a>
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




	
	<div class="block900">
	<div class="info">
		<p>
		<h3 class="hor">Horaire d'ouverture:</h3>
    <br></br>
		
		
Notre pizzéria est ouverte 7/7 jours. Voici nos horaires d'ouverture:
<br></br>

<li>Lundi: 11h30 à 14h00 et de 18h00 à 22h00</li>
<li>Mardi: 11h30 à 14h00 et de 18h00 à 22h00</li>
<li>Mercredi: 11h30 à 14h00 et de 18h00 à 22h00</li>
<li>Jeudi: 11h30 à 14h00 et de 18h00 à 22h00</li>
<li>Vendredi: 11h30 à 14h00 et de 19h00 à 00h00</li>
<li>Samedi: 11h30 à 14h00 et de 20h00 à 02h00</li>

</p>
<br></br>
<p>
		<h3 class="hor">Contact:</h3>
		
		
Pour tout renseignements complémentaires, vous pouvez nous contacter soit par téléphone soit par mail. Voici nos coordonnées:
<br></br>

		<li>tourdepisa</li>
		<li>Téléphone: 0329338888</li>
		<li>Adresse: 1 place du Général de Gaulle</li>
		<li>Adresse mail: tourdepisa@wanadoo.fr</li>
		



</p>
		</div>

		<div class="presentation">
	
<div class="cadre">Bienvenue chez Tour de Pisa</div>

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 110px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="http://www.lo-sfizziu.com/resources/1/Pizzeria-lo-sfizziu.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="http://cdn.ou-dejeuner.com/establishment/photo/establishment/29100-douarnenez/ma-pizzeria_35998_715.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="http://www.restaurant-lebarock.com/images/restaurant-pizzeria/restaurant-pizzeria12.jpg" />
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
  
		</div>

		<div class="divers">
	
	<div class="fonctionnnement">
    <div class="cadree">Comment ça marche?</div>
    <div class="etapea">
      <div class="wrap">
        <div>
          <h3 class="bidon">Sélectionnez un plat</h3>
          <span class="counta">1</span>
          <span class="txt">Entrez votre localité et choisissez votre repas!</span>
        </div>
      </div>
    </div>
    <div class="etapeb">
      <div class="wrap">
        <div>
          <h3 class="bidon">Paiement facile et sécurisé</h3>
          <span class="countb">2</span>
          <span class="txt">
Payez par Creditcard, PayPal, Bitcoin ou en espèces </span>
        </div>
      </div>
    </div>
    <div class="etapec">
      <div class="wrapc">
        <div>
          <h3 class="bidon">Faites-vous livrer!</h3>
          <div class="count">3</div>
          <div class="txt only-mobile"> Bon appétit!<br/><a class="promovideolink" href="#" onclick="xmlRequest('/showPromoVideo.php','&amp;rurl=//player.vimeo.com/video/110762335','promovideo',false,false,'promovideo  animated');return false;"><i class="fa fa-video-camera"></i> Regarder la vidéo</a></div>
          <div class="takeawayCar"><img src="" alt=""/></div>
        </div>
      </div>
    </div>	
		
		
</div>
</div>
</div>


<footer class="footer">
			<div class="footer-gauche">

				<h3><span>Tour de Pisa</span></h3>

				<p class="footer-liens">
					<a href="index.php">Accueil</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">A Propos</a>
					·
					<a href="#">Faq</a>
					·
					<a href="contact.php">Nous contacter</a>
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
  <script>
        jssor_1_slider_init();
    </script>
</body>
<html>
