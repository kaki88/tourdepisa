<?php
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
   $errors['name'] = "Vous n'avez pas entré votre nom !";
}
if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
   $errors['firstname'] = "Vous n'avez pas entré votre prenom !";
}
if(!array_key_exists('adress', $_POST) || $_POST['adress'] == ''){
   $errors['adress'] = "Vous n'avez pas entré votre adresse !";
}
if(!array_key_exists('tel', $_POST) || $_POST['tel'] == ''){
   $errors['tel'] = "Vous n'avez pas entré votre numero de telephone !";
}
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
   $errors['mail'] = "Vous n'avez pas entré d' e-mail valide !";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
   $errors['message'] = "Vous n'avez pas entré de message !";
}
  
session_start();

  if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputes'] = $_POST;
    header('Location: http://localhost/pizza/contact.php');
  }else{
$_SESSION['success'] = 1;
$message = $_POST['message'];
$headers = 'FROM: creusvirginie@gmail.com';
mail('creusvirginie@gmail.com', 'Formulaire de contact', $message,$headers);
header('Location: http://localhost/pizza/contact.php');
}
