<?php
$pagina = "../gracias/gracias.html";
Header("Location: $pagina");
?>
<?php
$para = 'victorcee16@gmail.com';
$asunto = 'Mensaje desde la web';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$mail = $_POST['email'];


$contenido = "Este mensaje fue enviado por " . $nombre . " \r\n";
$contenido .= "Sus appelidos son: " . $apellidos . " \r\n";
$contenido .= "Su e-mail es: " . $mail . " \r\n";

mail($para, $asunto, $contenido);
?>
