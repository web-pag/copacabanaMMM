<?php
require_once("db.php");
$conexion = conexion();

$statement = $conexion->prepare("SELECT * FROM nivel_compromiso");
$statement2 = $conexion->prepare("SELECT * FROM clase_crecimiento");
$statement3 = $conexion->prepare("SELECT * FROM tema_campana");

$statement->execute();
$statement2->execute();
$statement3->execute();
$datos = $statement->fetchAll();
$datos2 = $statement2->fetchAll();
$datos3 = $statement3->fetchAll();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campa&ntilde;as Iglesia MMM Copacabana</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <header>
        <img src="logo-MMM.png" alt="Logo MMM" class="imglogo">
        <div id="responsive" class="navigation">
            <ul class="menu">

                <div class="close-btn"></div>

                <li class="menu-item">
                    <a class="sub-btn" href="#">Creer <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="sub-item more">
                            <a class="more-btn" href="#">Creer Parte 1 <i class="fas fa-angle-right"></i></a>
                            <ul class="more-menu">
                                <li class="sub-item"><a href="#"> 1. Dios.</a></li>
                                <li class="sub-item"><a href="#"> 2. Dios Personal.</a></li>
                                <li class="sub-item"><a href="#"> 3. Salvación.</a></li>
                                <li class="sub-item"><a href="#"> 4. Biblia.</a></li>
                                <li class="sub-item"><a href="#"> 5. Identidad en Cristo.</a></li>
                                <li class="sub-item"><a href="#"> 6. Iglesia.</a></li>
                                <li class="sub-item"><a href="#"> 7. Humanidad.</a></li>
                                <li class="sub-item"><a href="#"> 8. Compasión.</a></li>
                                <li class="sub-item"><a href="#"> 9. Mayordom&iacute;a.</a></li>
                                <li class="sub-item"><a href="#">10. Eternidad.</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a class="sub-btn" href="#">40 d&iacute;as en la Palabra <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=7WJjM2GqsLA"
                                target="_blank">Sesi&oacute;n 1.
                                ¡Pronunciarlo!</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=ltm_umKxxeI&t=5s"
                                target="_blank">Sesi&oacute;n 2.
                                ¡Visualizarlo!</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=AFnrEMlqNFc&t=20s"
                                target="_blank">Sesi&oacute;n 3.
                                ¡Probarlo!</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=lAdNHHNhtaw"
                                target="_blank">Sesi&oacute;n 4.
                                ¡Parafrasearlo!</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=J2xT6U18-cg&t=22s"
                                target="_blank">Sesi&oacute;n 5.
                                ¡Personalizarlo! y ¡Orarlo!</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=39xmEHtirRQ&t=1s"
                                target="_blank">Sesi&oacute;n 6.
                                Principios de Interpretación de la Biblia.</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a class="sub-btn" href="#">40 días de Oraci&oacute;n <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=S885JyWM2pE&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=2"
                                target="_blank">Sesión 1. El Propósito de la Oración.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=GbyLxwUSzUs&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=3"
                                target="_blank">Sesión 2. Cómo Orar con Confianza.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=CiHDpCgaLNQ&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=4"
                                target="_blank">Sesión 3. El Modelo de Oración (Parte Uno).</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=FAsDVXbsOfE&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=5"
                                target="_blank">Sesión 4. El Modelo de Oración (Parte Dos).</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=RiLZ3rRPOpE&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=6"
                                target="_blank">Sesión 5. Orando por un Quebrantamiento.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=tvu2iPff7bc&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=7"
                                target="_blank">Sesión 6. Cómo Orar en una Crisis.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=Mrro0mJVloY&list=PL-SA5q0cwd9yrQppkXHwIVLHAKJ3kA5NN&index=8"
                                target="_blank">Sesión 7. (Sesión Adicional).</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a class="sub-btn" href="#">¿Para qué estoy aquí en la tierra? <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=QHQUOiFuMKE&t=650s"
                                target="_blank">Sesión 1.
                                Tú eres Importante para Dios.</a></li>
                        <li class="sub-item"><a href="https://www.youtube.com/watch?v=Mu9pCvw3we4&t=18s"
                                target="_blank">Sesión 2.
                                Fuiste Planeado para Agradar a Dios.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=-xQBgsi8zOY&list=PLTao0AyGEjXTVQcZfN7OIBr5TgAcAzBSW&index=3"
                                target="_blank">Sesión 3. Fuiste Hecho para la Familia de Dios.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=orT7A_JMf8Q&list=PLTao0AyGEjXTVQcZfN7OIBr5TgAcAzBSW&index=4"
                                target="_blank">Sesión 4. Fuiste Creado para Ser como Cristo.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=L8iq39dUZJM&list=PLTao0AyGEjXTVQcZfN7OIBr5TgAcAzBSW&index=5"
                                target="_blank">Sesión 5. Fuiste Formado para Servir a Dios.</a></li>
                        <li class="sub-item"><a
                                href="https://www.youtube.com/watch?v=cUwITRh29ow&list=PLTao0AyGEjXTVQcZfN7OIBr5TgAcAzBSW&index=6"
                                target="_blank">Sesión 6. Fuiste Hecho para una Misión.</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="https://impactoradio590.com/" target="_blank">Impacto Radio 590 AM <i
                            class="fas fa-angle"></i></a>
                </li>

            </ul>
        </div>
        <div class="menu-btn"></div>
    </header>

    <div>
        <section class="section-home">
            <h1>Iglesia Copacabana</h1>
        </section>
    </div>


    <!--Formulario-->
    <!-- <div class="container">
        <form action="insertar.php" id="survey-form" method="POST">
            <h1 id="tittle" class="text-center">Formulario de Encuesta</h1>
            <p id="description" class="description text-center"> Por favor llene esta encuesta.</p>

            <div class="form group">
                <label id="name-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required />
            </div>

            <div class="form group">
                <label id="emai-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese su correo" required />
            </div>

            <div class="form group">
                <label id="number-label" for="edad">Edad<span class="clue">(Opcional)</label>
                <input type="text" name="edad" min="10" max="99" class="form-control" placeholder="Edad" />
            </div>

            <div class="form group">
                <label for="Id_Compromiso">¿Cu&aacute;l es su nivel de compromiso con la Iglesia?</label>
                <select id="" name="Id_Compromiso" class="form-control" required>
                    <option value="0">Seleccione una opción</option>
                    <?php foreach ($datos as $dato) : ?>

                    <option value="<?= $dato['Id_Compromiso'] ?>"><?= $dato['Nombre'] ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form group">
                <label for="Id_Clase">¿Cu&aacute;l clase de crecimiento espiritual ha recibido?</label>
                <select id="" name="Id_Clase" class="form-control" required>
                    <option value="0">Seleccione una opción</option>
                    <?php foreach ($datos2 as $dato) : ?>

                    <option value="<?= $dato['Id_Clase'] ?>"><?= $dato['Nombre'] ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form group">
                <label for="campana">¿Cu&aacute;l campa&ntilde;a de crecimiento espiritual le ha gustado
                    m&aacute;s</label>
                <label> <input name="campana" value="40 d&iacute;as en la Palabra" type="radio" class="input-radio"
                        checked />40 d&iacute;as en la Palabra</label>
                <label> <input name="campana" value="&iquest;Para qu&eacute; estoy aqu&iacute; en la tierra?"
                        type="radio" class="input-radio" checked />¿Para qué estoy aquí en la tierra?</label>
                <label> <input name="campana" value="Creer Parte 1" type="radio" class="input-radio" checked />Creer
                    Parte 1</label>
                <label> <input name="campana" value="40 d&iacute;as de oraci&oacute;n" type="radio" class="input-radio"
                        checked />40 d&iacute;as de oración</label>
            </div>

            <div class="form group">
                <label for="Id_Tema">¿Qu&eacute; tema le gustar&iacute;a que se tratara en la pr&oacute;xima
                    campa&ntilde;a?</label>
                <select id="" name="Id_Tema" class="form-control" required>
                    <option value="0">Seleccione un tema</option>
                    <?php foreach ($datos3 as $dato) : ?>

                    <option value="<?= $dato['Id_Tema'] ?>"><?= $dato['Nombre'] ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form group">
                <label id="clase-label" for="Nombre">¿En c&uacute;al ministerio le gustaría servir en la
                    Iglesia?</label>
                <span class="clue">(Puede seleccionar varias opciones)</span>
                <input type="hidden" name="Ensenanza" value="">
                <label> <input name="Ensenanza" value="Si" type="checkbox" class="input-check-box" />Enseñanza</label>
                <input name="Oracion" value="" type="hidden">
                <label> <input name="Oracion" value="Si" type="checkbox" class="input-check-box" />Oración</label>
                <input name="Evangelismo" value="" type="hidden">
                <label> <input name="Evangelismo" value="Si" type="checkbox"
                        class="input-check-box" />Evangelismo</label>
                <input name="Visitacion" value="" type="hidden">
                <label> <input name="Visitacion" value="Si" type="checkbox" class="input-check-box" />Visitación</label>
                <input name="Hospitalario" value="" type="hidden">
                <label> <input name="Hospitalario" value="Si" type="checkbox"
                        class="input-check-box" />Hospitalario</label>
                <input name="Cocina" value="" type="hidden">
                <label> <input name="Cocina" value="Si" type="checkbox" class="input-check-box" />Cocina</label>
                <input name="Escuela_Dominical" value="" type="hidden">
                <label> <input name="Escuela_Dominical" value="Si" type="checkbox" class="input-check-box" />Escuela
                    Dominical</label>
                <input name="Carcelario" value="" type="hidden">
                <label> <input name="Carcelario" value="Si" type="checkbox" class="input-check-box" />Carcelario</label>
                <input name="Ujieres" value="" type="hidden">
                <label> <input name="Ujieres" value="Si" type="checkbox" class="input-check-box" />Ujieres</label>
            </div>

            <div class="form-group">
                <label id="clase-label" for="comentarios">Env&iacute;e sus comentarios y/o sugerencias.</label>
                <textarea id="comments" class="input-textarea" name="comentarios"
                    placeholder="Escriba su comentario aquí"></textarea>
            </div>

            <button type="submit" name="boton" id="submit" class="submit-button">Enviar</button>
        </form>
    </div> -->
    <!--Fin formulario-->

    <br>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="logo-MMM.png" alt="logo de MMM">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2><i class="fas fa-map-marker-alt"></i> Dirección</h2>
                <p>Carrera 48 # 51 -58 (201)</p>
                <br>
                <h2><i class="fas fa-phone"></i> Teléfono</h2>
                <p>301 588 8934</p>
                <br>
                <h2><i class="fas fa-envelope-open-text"></i> Email</h2>
                <p>creercopa@gmail.com</p>
            </div>
            <div class="box">
                <h2>Redes Sociales</h2>
                <br>
                <div class="red-social">
                    <a href="https://www.facebook.com/MMMColombiaOficial" target="_blank">Facebook</a>
                    <a href="https://www.youtube.com/c/MMMColombiaOficial" target="_blank">YouTube</a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>
                &copy; 2022 <b>Movimiento Misionero Mundial</b> - Todos los Derechos Reservados.
            </small>
        </div>

    </footer>
    <!-- <div class="contact-info">
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> <strong>Direccion de la Iglesia MMM Copacabana</strong></li>
            <li><i class="fas fa-map-marker-alt"></i> Carrera 48 # 51 -58 (201)</li>
            <li><i class="fas fa-phone"></i> 301 588 8934</li>
            <li><i class="fas fa-envelope-open-text"></i> creercopa@gmail.com</li>
        </ul>
    </div> -->


    <!-- <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">¿Alguna Pregunta?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Cll 52 # 47-42 Edi.
                                        Coltejer Medellín, Antioquia</span></li>
                                <li><a href="tel:+57 323 302 2522"><span class="icon icon-phone"></span><span
                                            class="icon-whatsapp"></span><span class="text">+57 323 302 2522</span></a>
                                </li>
                                <li><a href="mailto:ventanitasabiertaskids@gmail.com"><span
                                            class="icon icon-envelope"></span><span
                                            class="text">ventanitasabiertaskids@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Movimiento Misionero Mundial</h2>
                        <div class="block-21 mb-4 d-flex">
                            <img class="img-fluid" alt="Responsive image" width="25%" src="kids/images/mmm.png">
                            <div class="text">
                                <h3 class="heading"><a href="https://www.facebook.com/MMMColombiaOficial/"> Página
                                        Oficial</a></h3>
                                <div class="meta">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Redes Sociales</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate fadeInUp ftco-animated"><a
                                    href="https://www.facebook.com/Ventanitas-abiertas-kids-100420114840646/"
                                    target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a
                                    href="https://www.youtube.com/channel/UC5gEHufGR5Muh7Aa9ZdDA-w"
                                    target="_blank"><span class="icon-youtube"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="tel:+57 323 302 2522"><span
                                        class="icon-whatsapp"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->






    <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function() {
        //toggle sub-menus
        $(".sub-btn").click(function() {
            $(this).next(".sub-menu").slideToggle();
        });

        //toggle more-menus
        $(".more-btn").click(function() {
            $(this).next(".more-menu").slideToggle();
        });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
</body>

</html>