<?php

// if (isset($_POST["nombre"])) {
//     require_once("phpmailer/class.phpmailer.php");
//     $correo = new phpmailer() ;
//     //Datos personales del emisor
//     $mail->From = "luis@ncc.org";
//     $mail->FromName = "Luis Miguel Cabezas" ;
//     $mail->Subject = $_POST [ "asunto" ] ;
//     $mail->Body = $_POST["mensaje"];
//     //Dirección de destino
//     $mail->AddAddress($_POST["nombre"],$_POST["correo"]);
//     if (!$mail->AddEmbeddedImage($_FILES["imagen"], "tmp_name" , '12 34 5', "image/png")) {
//         echo "Falló al añadir un fichero adjunto";
//     }
//     if ( !$mail->Send() ) {
//         echo "Correo enviado correctamente";
//     } else {
//         echo "El correo no ha podido enviarse";
//     }
// }

$correo = $_POST["Correo"];
$asunto = $_POST [ "Asunto" ] ;
$cuerpo = $_POST["Mensaje"];
$resultado = mail($correo, $asunto, $cuerpo);
$msg = "";
if ($resultado) {
$msg = "Correo enviado correctamente";
} else {
$msg = "El correo no ha podido enviarse";
}

header("Location:../index.php?notificacion=" . $msg);
?>