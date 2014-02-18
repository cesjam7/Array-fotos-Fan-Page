<?php 

/////////////////////////////////////////////////////////////
//////////// IMAGENES DE UN ALBUN EN ESPECIFICO /////////////
/////////////////////////////////////////////////////////////

$url="http://tupagina.com/images.php?aid=285399138245526"; // url del albun, lo puedes sacar dando click a una foto del array que te genera en albunes_facebook.php
$url_content = '';  
$file = @fopen($url, 'r');  
if($file){  
  while(!feof($file)) {  
    $textohtml .= @fgets($file, 4096);  
  }  
  fclose ($file);  
}  


// NOTA: Saco solo los enlaces porque las imagenes son pequeñas y los enlaces te llevan a impagenes más grandes.

// Obtener solo los enlaces del código HTML
preg_match_all('/<a[^>]+>/i',$textohtml, $array_enlace); 

// Mostrar array con enlaces.
print_r($array_enlace[0]);

$limite = 0;
foreach($array_enlace[0] as $key => $imagen){
  $limite++;
  
  if($limite>3){
  
    $imagen1 = str_replace("<a class='ImageLink' href = '", "", $array_enlace[0][$key]);
    $url_imagen = str_replace("'>", "", $imagen1);
  
    echo "Url de imagen: ".$url_imagen."<br />" ;
    
  }
  
}


?>
