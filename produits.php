<!doctype html>
<html lang='fr'>
<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="cssmenu.css">
   <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" type="text/css" href="hover-effects.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

   <title>Nos produits</title>
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

<div class="toutcarte">
<?php 
$url = 'images/catalogue-pizzas.xml';
$xml = simplexml_load_file($url);
foreach($xml as $pizza){
  $img = $pizza->image;
  echo 
  '<div class="port-6 effect-3"><h3 class="titredespizzas">'.
  $pizza->nom.'</h3><div class="image-box truc"><img class="lspizza" src="images/'.
  $img.'"></div><div class="text-desc"><h3>'.
  $pizza->nom.'</h3><p class="hi">'.$pizza->composition.'<p>
  <p class="lesprix"> <input type="checkbox">  '.$pizza->prix->attributes()->taille_l.'€  &nbsp;&nbsp;<input type="checkbox">'.$pizza->prix->attributes()->taille_xl.'€  &nbsp;&nbsp;<input type="checkbox">'.$pizza->prix->attributes()->taille_xxl.'€<p><div class="ajpanier">
  <form id="myform" method="POST" action="#">
    <input type="button" value="-" class="qtyminus" field="quantity" />
    <input type="text" name="quantity" value="1" class="qty" />
    <input type="button" value="+" class="qtyplus" field="quantity" />
	<button class="enjoy-css"> <i class="fa fa-shopping-cart"></i> Ajouter au Panier</button>
</form>
  </div></div></div>'; 
}
?>
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
jQuery(document).ready(function(){
    $('.qtyplus').click(function(e){
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal)) {
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
    $(".qtyminus").click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
});
</script>
</body>
<html>

