<?php
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])
? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require 'model/Autoloader.php';
// Autoloader::register();
require_once "controller/controller.php";



try {
    if(isset($_GET['page']) && !empty($_GET['page'])){
       

    switch ($_GET['page']){
        case"devenir": getPageDevenir();
    break;
         case"devenirModel": getPageDevenirModel();
    break;
        case"etreModel": getPageEtreModel();
    break;
         case"etre": getPageEtre();
    break;
        case"monCompteModel": getPageMonCompteModel();
    break;
       case "monCompte": getPageMonCompte();
    break;
        case "monProfilModel":getPageMonProfilModel();
    break;
     
 
    default: throw new Exception("La page n'existe pas");
      }

    } else {
    getPageDevenir();
   }
 } catch(Exception $e){
    $errorMessage = $e->getMessage(); 
    require "views/error.view.php";
    }