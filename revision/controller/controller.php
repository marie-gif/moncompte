<?php

function getPageDevenir(){
   
    
    require_once "vue/devenir.vue.php";
    }
function getPageDevenirModel(){
   
    
    require_once "model/devenir.model.php";
     }
function getPageEtreModel(){
    //session_start();
     require_once "model/etre.model.php";
     }

function getPageEtre(){
    session_start();
     require_once "vue/etre.vue.php";
    }
function getPageMonCompteModel(){
    session_start();
     require_once "model/monCompte.model.php";
    }
function getPageMonCompte(){
    
        require_once "vue/monCompte.vue.php";
    }
function getPageMonProfilModel(){
    session_start();
        require_once "model/monProfil.model.php";
    }