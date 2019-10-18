<?php

include 'class/class.upload.php';
$image = new Upload($_FILES["image"]);

// valores del archivo subido 
$extension= $image->file_src_name_ext;
$esimagen= $image->file_is_image;



// // validaciones
// // ancho maximo
//     $image->image_max_width = 200;
// // alto maximo
//     $image->image_max_height = 100;
// // maximo de pixeles 
//     $image->image_max_pixels = 50000;
// // radio de ancho y alto 
//     $image->image_max_ratio = 1.5;
//     $image->->image_min_ratio = 0.5;
// // ancho minimo
//     $image->image_min_width = 200;
// // alto minimo
//     $image->image_min_height = 100;

// // editar imagen
//     $image->image_resize= false;
//     $image->image_x  =  100 ;
//     $image->image_y  =  100 ;
//     $image->image_ratio =false;
// // image_ratio_crop si es cierto, cambiar el tamaño de la imagen conservando la relación de tamaños originales, utilizando image_x Y image_y como máximo tamaños, y recorte de excedente para llenar el espacio. ajuste también puede ser una cadena, con uno o más de los 'TBLR', lo que indica de qué lado de la imagen se mantendrá al recortar (por defecto: falso)
//     $image->image_ratio_crop = false;
// // image_ratio_fill si es cierto, cambiar el tamaño de la imagen conservando la relación de tamaños originales, utilizando image_x Y image_y como máximo tamaños, colocar la imagen en el espacio y coloreando el espacio restante. ajuste también puede ser una cadena, con uno o más de los 'TBLR', lo que indica de qué lado del espacio de la imagen estará en (por defecto: falso)
//     $image->image_ratio_fill = false;
// // image_ratio_no_zoom_in mismo que image_ratio , pero no va a cambiar el tamaño de la imagen de origen si es más pequeño que image_x x image_y (por defecto: falso)
//     $image->image_ratio_no_zoom_in  = false;
// // para establecer que toma como maximo, si x o y
//     $image->image_ratio_x =false;
//     $image->image_ratio_y =false;





if($image->uploaded){
    // pongo nombre a la imagenes
    $image->file_new_name_body= 'nuevaimg';
    // calidad de imagenes
    $image->jpeg_quality= '50';
    // convertir imagen a
    $image->image_convert= 'jpg';
    // guardar imagen en
    $image->Process("uploads/");
    if($image->processed){
        echo "Upload Success";
    }
    else{
        echo "Error: ".$image->error;
    }
}
?>