<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="./resources/css/estilos.css">
    <link rel="icon" href="./resources/assets/LogoPrincipal.png">    
    <title>NuevoMundo - Inicio</title>    
</head>
<body>
    <?php 
        $Seccion = 'Inicio';
        include('./templates/menu.php') 
    ?> 
    <header class="ctnCab">
        <h1>Bienvenido a nuestra institución</h1>
        <p class="cabTxt">Brindamos una gran calidad de educación a todos nuestros estudiantes en los niveles de inicial, primaria y secundaria.</p>
        <a class="cabBtn" href="#Historia">Nuestra historia</a>
        <div id="particles-js"></div>
    </header>
    <article>
        <section class="ctnEsc">
            <h3>¿Por que escogernos? <hr></h3>
            <main class="escCard">
                <div class="escCardItem">
                    <div class="escCardFoto">
                        <img src="./resources/assets/Libros.jpg" alt="Foto-libros">                       
                    </div>
                    <div class="escCardText">
                        <h4>Variedad de libros</h4>
                        <p>Nuestra biblioteca cuenta con una gran cantidad de libros para el desarrollo de las actividades academicas.</p>
                    </div>
                </div>
                <div class="escCardItem">
                    <div class="escCardFoto">
                        <img src="./resources/assets/Profesor.jpg" alt="Foto-profesor">                        
                    </div>
                    <div class="escCardText">
                        <h4>Docentes calificados</h4>
                        <p>Todos los docentes presentes han tenido una gran linea de experiencia y estan dispuestos a brindar la mejor eduacion.</p>
                    </div>
                </div>
                <div class="escCardItem">
                    <div class="escCardFoto">
                        <img src="./resources/assets/computo.jpg" alt="Foto-computo">                        
                    </div>
                    <div class="escCardText">
                        <h4>Equipos de calidad</h4>
                        <p>Contamos con aulas de computo totalmente equipadas con lo mejor en tecnologia, para un mejor.</p>
                    </div>
                </div>
            </main>
        </section>
        <section class="ctnHis" id="Historia">            
            <div class="hisContent">
                <h3>Nuestra historia <hr></h3>                
                <img src="./resources/assets/ConstColegio.png" alt="Construccion-colegio">
                <p>
                    En los años 1988 iniciamos con el proyecto "Nuevo mundo", que se centra en la eduación particular de los niños y jovenes a nivel nacional, dicho transcurso nos tomo alrededor de 10 años en los cuales pudimos implementar el nivel de primaria y inicial, al poco tiempo de eso nos hicimos con el recurso suficiente para implementar el area de secundaria.<br><br>
                    En consecuencia nos planteamos la mision de ofrecer una enseñanza de calidad con una minima inversion y la vision de expandirnos en diferentes regiones para alcanzar a muchas mas personas.
                </p>                
            </div>
            <img src="./resources/assets/ConstColegio.png" alt="Construccion-colegio">                                                            
        </section>
        <section class="cntTes">
            <h3>Testimonio de padres <hr></h3>
            <main class="splide" aria-label="Carrusel con Splide">
                <div class="splide__track">
                    <ul class="splide__list">
			            <li class="splide__slide">
                            <div class="tesCardItem">
                                <div class="tesCardFoto">
                                    <img src="https://randomuser.me/api/portraits/men/31.jpg" alt="FotoRandon-31">
                                </div>
                                <div class="tesCardText">
                                    <h4>Jairo Molero</h4>
                                    <p>Mantuvieron un muy buen nivel en el nivel de secundaria, ya que mi hijo logro obtener conocimientos utiles para su desarrollo futuro.</p>
                                </div>
                            </div>
                        </li>
			            <li class="splide__slide">
                            <div class="tesCardItem">
                                <div class="tesCardFoto">
                                    <img src="https://randomuser.me/api/portraits/women/53.jpg" alt="FotoRandon-31">
                                </div>
                                <div class="tesCardText">
                                    <h4>Daniela Montaño</h4>
                                    <p>Tienen muy buenas instalaciones que se encuentran bien equipadas, es por ello que recomiendo esta institucion para sus hijos.</p>
                                </div>
                            </div>
                        </li>
			            <li class="splide__slide">
                            <div class="tesCardItem">
                                <div class="tesCardFoto">
                                    <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="FotoRandon-31">
                                </div>
                                <div class="tesCardText">
                                    <h4>Lorenzo Garca</h4>
                                    <p>La calidad de los profesores es realmente impresionante, ya que lograron que mi hija mejorara notablemente sus calificaciones.</p>
                                </div>
                            </div>
                        </li>
			            <li class="splide__slide">
                            <div class="tesCardItem">
                                <div class="tesCardFoto">
                                    <img src="https://randomuser.me/api/portraits/men/83.jpg" alt="FotoRandon-31">
                                </div>
                                <div class="tesCardText">
                                    <h4>Roberto Carlos</h4>
                                    <p>El ambiente social que se maneja dentro de las aulas es realmente agradable, segun me comenta mi hijo, dado a eso lo recomiendo.</p>
                                </div>
                            </div>
                        </li>
		            </ul>
                </div>
                <div class="tesContentBlur">
                    <div class="testBlur"></div>
                    <div class="testBlur blurRight"></div>
                </div>                
            </main>
        </section>
        <section class="ctnDud">
            <h3>Preguntas frecuentes <hr></h3>
            <main class="dudAcord">
                <div class="dudItem">
                    <input type="radio" id="Acord-1" class="dudOpen" name="AcordSelect">
                    <div class="dudTitle">
                        <label for="Acord-1">¿Cuando iniciamos las clases? <i class="fas fa-chevron-down"></i></label>
                    </div>                    
                    <p class="dudContent">En todos los niveles las clases inician el 13 de marzo, en el nivel de inical y primaria el horaria es de 13:00 hasta las 18:00, en el nivel secundario el horario es de 7:00 hasta hasta las 13:00.</p>
                </div>
                <div class="dudItem">
                    <input type="radio" id="Acord-2" class="dudOpen" name="AcordSelect">
                    <div class="dudTitle">
                        <label for="Acord-2">¿Donde nos encuentras? <i class="fas fa-chevron-down"></i></label>
                    </div>                    
                    <p class="dudContent">Por el momento solo contamos con una institucion que se encuentra en la Av. 2 de Mayo 1502 Of 603 - San Isidro, al frente del parque "La muralla".</p>
                </div>
                <div class="dudItem">
                    <input type="radio" id="Acord-3" class="dudOpen" name="AcordSelect">
                    <div class="dudTitle">
                        <label for="Acord-3">¿Cuales son nuestros precios? <i class="fas fa-chevron-down"></i></label>
                    </div>                    
                    <p class="dudContent">Esto suele variar segun el nivel al que se quiere ingrezar, por parte del nivel inicial el coste es de S/200, en el primario el coste es S/280 y finalmente en el secundario es S/350.</p>
                </div>
                <div class="dudItem">
                    <input type="radio" id="Acord-4" class="dudOpen" name="AcordSelect">                    
                    <div class="dudTitle">
                        <label for="Acord-4">¿Como me inscribo? <i class="fas fa-chevron-down"></i></label>
                    </div>                    
                    <p class="dudContent">Tenemos una seccion en la pagina que le permite registrar sus datos basicos y de contacto, a partir del envio del formulario le podremos enviar un correo con la informacion necesaria para la matricula.</p>
                </div>
            </main>
        </section>
    </article>
    <footer>
        <main class="footInfo">
            <div>
                <h4>Contactanos:</h4>            
                    <p>Sede: Av. 2 de Mayo 1502 - San Isidro</p>
                    <p>Email: info@nuevomundo.edu.pe</p>
                    <p>Telefono: (078) 647-5442</p>
                </ul>                                    
            </div>
            <div>
                <h4>Horarios de atencion:</h4>            
                <p>Lunes a Viernes: 10:00 - 17:00</p>
                <p>Sabado: 13:00 - 17:00</p>            
            </div>
            <div>
                <h4>Nuestras redes:</h4>            
                <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>          
                <a href="" target="_blank"><i class="fab fa-whatsapp"></i></a>            
            </div>            
        </main>   
        <div class="footCopy">
            <p>© Todos los derechos reservados 2023.</p>     
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="./resources/js/particles.min.js"></script>
<script src="./resources/js/setParticles.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',        
        focus: 'center',
        autoWidth: true,
        perMove: 1,       
    })
    splide.mount()
</script>
</html>