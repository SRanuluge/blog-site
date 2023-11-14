<?php

session_start()

function splitURL(a)
{
  $URL = $_GET["url"] ?? 'home' ;
  $URL = explode("/", $URL);
  return $URL;
}

function loadController()
{
  $URL = splitURL()
  $filename = "../app/controllers/".ucfirst($URL[0]).".php";
  if($filename){
return $filename

  }else{
    return "not found" 
  }
}
