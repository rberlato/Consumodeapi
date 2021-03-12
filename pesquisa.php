<?php
error_reporting(-1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

  
  $artists = [];
  $music = [];
    
  if (isset($_POST['cantor'])) {
    $cantor = $_POST['cantor'];
    $cantor =  str_replace(' ', '-', $cantor);
    $artists = UrlArtist();
  }

  if (isset($_GET['art']) && isset($_GET['mus'])) {
    $art = $_GET['art'];
    $mus = $_GET['mus'];
    $music = UrlMusic();
  }


  function UrlArtist(): object {
    
    global $cantor;


    
    $urlArtist = "https://api.vagalume.com.br/{$cantor}/index.js";

    return json_decode(file_get_contents($urlArtist));
  }

  function UrlMusic(): object {
    global $art;
    global $mus;


    $urlMusic = "https://api.vagalume.com.br/search.php?art={$art}&mus={$mus}";

    return json_decode(file_get_contents($urlMusic));
  }

