<?php

require '../vendor/autoload.php'; // Carga la librería PHPMailer
//require '../vendor/tecnickcom/tcpdf/config/tcpdf_config.php';
require '../config/secrets.php';

use PHPMailer\PHPMailer\PHPMailer;



// Genera un identificador único
$unique_id = uniqid();

// Define el nombre del archivo PDF con el identificador único
//echo  $_SERVER['DOCUMENT_ROOT'];
$pdf_filename = $_SERVER['DOCUMENT_ROOT'] . '/MvcVideo/pdf/mi_pdf_' . $unique_id . '.pdf';

// Crea una instancia de TCPDF
$pdf = new TCPDF();

// Establece el título del documento
$pdf->SetTitle('PDF con Datos');

// Agrega una página al PDF
$pdf->AddPage();

// Agrega contenido al PDF
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Datos del Usuario:', 0, 1, 'L'); // Título
$pdf->Cell(0, 10, 'nombre = juan', 0, 1, 'L'); // Nombre
$pdf->Cell(0, 10, 'numero = 27', 0, 1, 'L'); // Número
$pdf->Cell(0, 10, 'linea 2k', 0, 1, 'L'); // Línea 2k

// Genera el PDF y guarda en el servidor con el nombre único
$pdf->Output($pdf_filename, 'F');

// Crea una instancia de PHPMailer
$mail = new PHPMailer();

// Configuración del servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = constant('E_MAIL'); // Tu dirección de correo
$mail->Password = constant('PWD_MAIL'); // Tu contraseña de correo
$mail->SMTPSecure = 'tls';
$mail->CharSet = "UTF-8";

// Configuración del correo
$mail->setFrom(constant('E_MAIL'), 'programacionphp3bj');
$mail->addAddress('correo@gmail.com', 'Nombre del Destinatario'); // Dirección de correo destino
$mail->Subject = 'Envío de PDF';
$mail->Body = 'Adjunto encontrarás el PDF que solicitaste.';

// Adjunta el PDF al correo
$mail->addAttachment($pdf_filename);

// Envía el correo
if ($mail->send()) {
  echo 'Correo enviado correctamente';
} else {
  echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}

// Elimina el archivo PDF después de enviarlo por correo
unlink($pdf_filename);
