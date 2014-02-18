<?php 

$url="http://tupagina.com/images.php"; // url de la pagina que queremos obtener  
$url_content = '';  
$file = @fopen($url, 'r');  
if($file){  
  while(!feof($file)) {  
    $textohtml .= @fgets($file, 4096);  
  }  
  fclose ($file);  
}  



// Obetener solo las imágenes del código HTML
preg_match_all('/<img[^>]+>/i',$textohtml, $array_imagen); 

// Mostrar array con imágenes
print_r($array_imagen[0]);



// Obetener solo los enlaces del código HTML
preg_match_all('/<a[^>]+>/i',$textohtml, $array_enlace); 

// Mostrar array con enlaces
print_r($array_enlace[0]);



// Si quieres solo la url de las imágenes puedes usar "str_replace"
foreach($array_imagen[0] as $key => $imagen){

  $imagen1 = str_replace("<img width='125px' src='", "", $imagen);
  $url_imagen = str_replace("' />", "", $imagen1);
  
  echo "Url de imagen: ".$url_imagen."<br />" ;
  
}


?>
