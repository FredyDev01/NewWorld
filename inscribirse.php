<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="./resources/css/estilos.css">
    <link rel="icon" href="./resources/assets/LogoPrincipal.png">    
    <title>NuevoMundo - Inscribirse</title>
</head>
<bodys>
    <?php 
        $Seccion = 'Inscribirse';
        include('./templates/menu.php') 
    ?>            
    <main class="ctnFrom">
        <div id="particles-js"></div>
        <form id="FormUpt">
            <div class="CtnLog">
                <img src="./resources/assets/LogoForm.png" alt="LogoLogin" title="Logo">
            </div>
            <h3>Nuevo interesado <hr></h3>
            <p>Bienvenidos al formulario de la I.E "Nuevo mundo".</p>
            <div class="CtnInp">            
                <input type="text" name="Nombres" class="Inp"  placeholder="Nombres:">                                
                <span class="Message Success">Los nombres se llenaron de forma correcta.</span>
                <span class="Message Error">Nombres no tiene los caracteres suficientes.</span>
            </div>            
            <div class="CtnInp">
                <input type="text" name="Apellidos" class="Inp" placeholder="Apellidos:">                
                <span class="Message Success">Los apellidos se llenaron de forma correcta.</span>
                <span class="Message Error">Apellidos no tiene los caracteres suficientes.</span>
            </div>
            <div class="CtnInp">
                <input type="tel" name="Telefono" id="txtTel" class="Inp" placeholder="Telefono:">                  
                <span class="Message Success">El telefono se lleno de forma correcta.</span>
                <span class="Message Error">Telefono no tiene 9 caracteres o contiene letras.</span>
            </div>
            <div class="CtnInp">                            
                <input type="email" name="Email" class="Inp" placeholder="Email:">                            
                <span class="Message Success">El email se lleno de forma correcta.</span>
                <span class="Message Error">Email se encuentra vacio o no tiene el '@ - .com'.</span>            
            </div>
            <div class="CtnBtn">
                <input type="submit" value="Enviar correo">
                <input type="reset" value="Resetear">
            </div>
        </form>
    </main>
</body>
<script src="./resources/js/particles.min.js"></script>
<script src="./resources/js/setParticles.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./resources/js/funcForm.js"></script>
</html>
