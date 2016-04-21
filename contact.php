---------------------------------
<?php
  session_start();
?>

----------------------------------
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
	



<div class="contacts">
 <div class="mapcontact">
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10641.818392451098!2d6.441593!3d48.178592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3184cd6e4faf2ff0!2sCentre+d&#39;affaires!5e0!3m2!1sen!2sfr!4v1461139258912" width="390" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
--------------------------------------------------------------------------------
    <div class="container">
     <div class="starter-template">

      <?php if(array_key_exists('errors', $_SESSION)): ?>
       <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
       </div>
    
      <?php unset($_SESSION['errors']); endif; ?>
      
<?php if(array_key_exists('success', $_SESSION)): ?>
       <div class="alert alert-success">
           Votre e-mail nous est bien pervenu ! :)
          <?= implode('<br>', $_SESSION['errors']); ?>
       </div>
    
      <?php unset($_SESSION['errors']); endif; ?>
      




       <form action="post_contact.php" method="POST">
        <div class="row">
        <div class="col-md-6">
         <div class="form-group">
           <label for="inputname">Nom</label>
           <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"
          </div>
         </div>
 <div class="col-md-6">
         <div class="form-group">
           <label for="inputfirstname">Prenom</label>
           <input type="text" name="firstname" class="form-control" id="inputfirstname" value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : ''; ?>"
          </div>
         </div>
 <div class="col-md-6">
         <div class="form-group">
           <label for="inputadress">Adresse</label>
           <input type="text" name="adress" class="form-control" id="inputadress" value="<?= isset($_SESSION['inputs']['adress']) ? $_SESSION['inputs']['adress'] : ''; ?>"
          </div>
         </div>
 <div class="col-md-6">
         <div class="form-group">
           <label for="inputtel">N°Tel.</label>
           <input type="text" name="tel" class="form-control" id="inputtel" value="<?= isset($_SESSION['inputs']['tel']) ? $_SESSION['inputs']['tel'] : ''; ?>"
          </div>
         </div>
 <div class="col-md-6">
         <div class="form-group">
           <label for="inputmail">Mail</label>
           <input type="text" name="mail" class="form-control" id="inputmail" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ''; ?>"
          </div>
         </div>
 <div class="col-xs-6">
         <div class="form-group">
           <label for="inputmessage">Message</label>
           <textarea id="inputmessage" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
         </div>
         </div>
       </form>
    </div>
</div>
-----------------------------------------------------------------------------

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
function resetForm(form) {
    // clearing inputs
    var inputs = form.getElementsByTagName('input');
    for (var i = 0; i<inputs.length; i++) {
        switch (inputs[i].type) {
            // case 'hidden':
            case 'text':
                inputs[i].value = '';
                break;
            case 'radio':
            case 'checkbox':
                inputs[i].checked = false;   
        }
    }

    // clearing selects
    var selects = form.getElementsByTagName('select');
    for (var i = 0; i<selects.length; i++)
        selects[i].selectedIndex = 0;

    // clearing textarea
    var text= form.getElementsByTagName('textarea');
    for (var i = 0; i<text.length; i++)
        text[i].innerHTML= '';

    return false;
}
</script>
</body>
<html>
----------------------------------------------------
<?php

unset($_SESSION['inputs']); 
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>
--------------------------------------------------
    

