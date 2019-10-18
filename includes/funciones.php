<?php
function hace_cuanto($fecha1, $fecha2 = NULL) {
    $fecha1 = new Datetime($fecha1);
    if ( ! $fecha2) {
        $fecha2 = new Datetime('now');
    } else {
        $fecha2 = new Datetime($fecha2);
    }
    if ($fecha1 > $fecha2) return;
    $r_str = array();
    $intervalo = $fecha1->diff($fecha2);
    $diff = $intervalo->format('%ya-%mm-%dd-%hh-%ii-%ss');
    preg_match_all("/[1-9]+[a-z]+/", $diff, $match_diff);
    $time_str = array(  'a' => 'año',
                        'm' => 'mes',
                        'd' => 'día',
                        'h' => 'hora',
                        'i' => 'minuto',
                        's' => 'segundo'
                    );
    foreach ($match_diff[0] as $time) {
        $times = intval($time);
        $index_time = str_replace($times, '', $time);
        $string = $time_str[$index_time];
        $string .= $time > 1 ? ($string === 'mes' ? 'es' : 's' ) : '' ;
        $r_str[] =sprintf('%d %s', $time, $string);
    }
    $ult = end($r_str);
    $prev = prev($r_str);
    $r_str = array_reduce($r_str, function($r, $v) use($prev, $ult, $r_str) {
        if (count($r_str) > 1) {
            $v = $prev === $v ? sprintf('%s ', $v) : ($ult === $v ? sprintf('y %s', $v) :  sprintf('%s, ', $v));
        }
        $r .= $v;
        return $r;
    });
    return $r_str;
}
function sacarHTML($texto){
  $devo= strip_tags(htmlspecialchars_decode($texto));
  return $devo;
}
function buscarEnArray($array,$buscado,$clave){
    $claveBuscada= array_search($buscado, array_column($array, $clave));
    return $array[$claveBuscada];
}
function buscarEnArray2($array,$buscado,$clave){
    $claveBuscada= array_search($array, array_column($buscado, $clave));
    return $array[$claveBuscada];
}

function probar($array){
  echo "<hr>";
  echo "<pre>";
  print_r($array);
  echo "</pre>";
  echo "<hr>";
}
function diferenciaArrays($array1, $array2)
    {
        foreach($array1 as $key => $value)
        {
            if(is_array($value))
            {
                if(!isset($array2[$key]))
                {
                    $difference[$key] = $value;
                }
                elseif(!is_array($array2[$key]))
                {
                    $difference[$key] = $value;
                }
                else
                {
                    $new_diff = diferenciaArrays($value, $array2[$key]);
                    if($new_diff != FALSE)
                    {
                        $difference[$key] = $new_diff;
                    }
                }
            }
            elseif(!isset($array2[$key]) || $array2[$key] != $value)
            {
                $difference[$key] = $value;
            }
        }
        return !isset($difference) ? 0 : $difference;
    }
function callWebService($method)
{
  $url ='https://soa.afip.gob.ar/sr-padron/v2/persona/'.$method;
  $json = file_get_contents($url);
  $array = json_decode($json,true);
  return $array;
}
function guardarIMG($url,$directorio,$nombre) {
      $imagen=file_get_contents($url);
      file_put_contents($directorio.'/'.$nombre, $imagen);

}
function urls_amigables($url) {
      // Tranformamos todo a minusculas
      $url = strtolower($url);
      //Rememplazamos caracteres especiales latinos
      $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
      $repl = array('a', 'e', 'i', 'o', 'u', 'n');
      $url = str_replace ($find, $repl, $url);
      // Añadimos los guiones
      $find = array(' ', '&', '\r\n', '\n', '+');
      $url = str_replace ($find, '-', $url);
      // Eliminamos y Reemplazamos otros carácteres especiales
      $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
      $repl = array('', '-', '');
      $url = preg_replace ($find, $repl, $url);
      return $url;
}

function recortar_texto($texto, $limite=100){   
      $texto = trim($texto);
      $texto = strip_tags($texto);
      $tamano = strlen($texto);
      $resultado = '';
      if($tamano <= $limite){
            return $texto;
      }else{
            $texto = substr($texto, 0, $limite);
            $palabras = explode(' ', $texto);
            $resultado = implode(' ', $palabras);
            $resultado .= '...';
      }     
      return $resultado;
}

function comprobar_email($email){
      return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}
function enviarMail($email, $pass){
      $para= $email;
      $date= date('h:i');
      $asunto= 'Recuperar contraseña ARCO '.$date.'HS.';
      $email_content= 'Tu usuario: '.$email.'<br> Contraseña: '.$pass.'<br>';
      $headers = "MIME-Version: 1.0\r\n"; 
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      // mensaje de: 
      $headers .= "From: consultas@arcomaquinarias.com \r\n"; 
      // contestar a:
      $headers .= "Reply-To: consultas@arcomaquinarias.com\r\n"; 

      mail($para,$asunto,$email_content,$headers);
      return 'ok';
}





 ?>