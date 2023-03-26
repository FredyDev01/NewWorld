<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/Exception.php';
    require 'phpmailer/SMTP.php';


    if($_POST && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $Telefono = $_POST['Telefono'];
        $Email = $_POST['Email'];
        //PROCESANDO EL ENVIO DE DATOS AL CORREO
        $Destinatario = "fredy12cbpu@gmail.com";
        $Mailer = new PHPMailer();
        try{                         
            $Mailer->isSMTP();
            $Mailer->Host = "smtp.gmail.com";
            $Mailer->SMTPAuth = true;
            $Mailer->Username = $Destinatario;
            $Mailer->Password = "pwwxatacturmzjnf";
            $Mailer->SMTPSecure = "tls";
            $Mailer->Port = 587;                
            $Mailer->setFrom($Email, "$Nombres $Apellidos");
            $Mailer->addAddress($Destinatario);
            $Mailer->addReplyTo($Email);
            $Mailer->msgHTML(true);
            $Mailer->Subject = "Nuevo mundo: Persona interesada.";
            $Mailer->Body = "<h2>Hola soy $Nombres $Apellidos</h2><p>Estoy interesad@ en tu institución, te adjunto mi informacion de contacto: <br><br>Telefono: $Telefono<br>Email: $Email<br><br>Espero que me contactes pronto :D.</p>";
            $Mailer->send();
            echo "Response->" . json_encode(array("Estado" => true, "Mensaje" => "El mensaje de su inscripción fue enviado con exito al administrador de la institución, espere una muy pronta respuesta."));
        }catch(Exception $error){
            echo "Ocurrio un error en el envio: $error";
            echo "Response->" . json_encode(array("Estado" => false, "Mensaje" => "Nuestra aplicación tiene algunos problemas al tratar de enviar su correo, le recomendamos volver a intentarlo mas tarde."));
        }
    }else{
        echo "Response->" . json_encode(array("Estado" => false, "Mensaje" => "Al parcer no todos los campos del formulario fueron llenados con exito, le recomendamos que lo vuelva a intentar sin saltarse los campos necesarios."));
    }
?>