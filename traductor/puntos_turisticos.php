<!DOCTYPE html>
<html lang="es">
<!--
    Proyecto de prototipos \ Traductor Español - Yaqui
    Centro de Bachillerato Tecnológico, industrial y de servicios No. 37
    Este es un sitio diseñado con el objetivo
    de apoyar las comunicaciones lengua español-yaqui.
    Queda prohibido el uso no relacionado con los objetivos
    de este programa.
-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Sobre los Yaquis</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/pag-logo.png">
    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body onload="showMenu()">
        <header>
            <a href="/traductor" class="logo bounce">
                <img src="img/pag-logo.png">
                <p>Traductor Español Yaqui</p>
            </a>
            <button type="button" onclick="showMenu()"><img src="img/menu-icon.png"></button>
        </header>
        <div class="space">
            <main>
                <div class="titulo">Lugares turisticos Yaquis</div>
                <div id="centro" class="container-info">
                    <div class="content-info">
                        <h2>Centro Cultural Yo’o Joara</h2>
                        <p>
                            El Centro Cultural Yo’o Joara es una oportunidad para turistas y personas de la localidad para
                            disfrutar un ambiente familiar y seguro. Dentro de las actividades que realizan está el tianguis
                            de productos artesanales, diversos programas artísticos y culturales, actividades relacionadas
                            con la tradición vaquera y visitas guiadas al mariposario de la polilla cuatro espejos.
                        </p>
                    </div>
                    <img src="img/centro.jpeg">
                </div>
                <div id="museo" class="container-info">
                    <!--Contenido principal-->
                    <div class="content-info">
                        <h2>Museo de los Yaquis</h2>
                        <p>
                            El Museo de los Yaquis abrió sus puertas como un reconocimiento al pueblo originario yaqui,
                            cuya participación en las diversas etapas de la historia del Estado siempre ha sido relevante.
                            El museo aporta elementos para el estudio, reconocimiento y difusión de sus antecedentes
                            históricos, idioma, demografía, indumentaria, vivienda, artesanía, economía, festividades,
                            organización política, social y religiosa, música, danzas, gastronomía y costumbres en general.
                        </p>
                        
                    </div>
                    <img src="img/museo.jpeg">
                </div>
                <div id="danzante" class="container-info">
                    <div class="content-info">
                        <h2>Danzante Yaqui</h2>
                        <p>
                            En el sur del Estado de Sonora se encuentra una imponente estatua llamada Danzante Yaqui,
                            creada por el artista Marlon Arturo Balderrama Monge quien pertenece a la cuarta generación
                            de escultores sonorenses que han dedicado su vida a embellecer visualmente no solo el estado de Sonora.
                        </p>
                    </div>
                    <img src="img/danzante.jpeg">
                </div>
                
                <!--Curiosidades-->
                <div class="curiosidades">
                    <div class="divisor"></div>
                        <p id="curiosidad">
                        <?php
                            $randomThings = array(
                                'Como la gran mayoría de los pueblos precolombinos, los yaquis adoraban a los astros y la naturaleza. Su máximo dios era el sol quien era el gran creador del universo, con la llegada de los evangelizadores jesuitas en el siglo XVI esta cosmovisión cambió y adoptaron la religión católica.',
                                'Los yaquis tienen un ritual muy particular durante los cuarenta días previos a la semana santa y es que muchos vienen a Hermosillo – capital del estado de Sonora- , con una máscara y  una moneda en la boca, danzan limosneando al hombre blanco a pleno rayo del sol. No pueden hablar, comer ni beber hasta que cae el sol y regresan a su base.',
                                'Los yaquis tienen una manera muy singular de darle el último adiós a sus muertos, pues durante los funerales y rezos hay comida, bebida, danzantes y música. Algo que contrasta mucho con la sobriedad y solemnidad de otras culturas.',    
                                'Esta danza en sí es un ritual al cual se le venera y agradece al venado cola blanca en la cual se trata de emular la agilidad, belleza y bondad del animal, así como representar un ciclo.',    
                                'Debido a su carácter aguerrido y territorial, los yaquis durante décadas estuvieron en guerras con el gobierno del estado, hasta que el entonces presidente Porfirio Diaz se hartó capturó a todos los que pudo y los pusieron a trabajar en los ingenios de Yucatán y Quintana Roo. Cuando se levanta en armas Francisco I. Madero, ellos se libran de los caciques yucatecos y se regresaron caminando hacia sus tierras, donde se hacen parte de las tropas de Calles y Obregón.'   
                            );
                            echo "Sabias que... ".$randomThings[mt_rand(0,count($randomThings)-1)];
                        ?>
                        </p>
                    <div class="divisor"></div>
                </div>
                <p id="ver-mas" onclick="showInfo()">Mirar más</p>
                <!--Información-->
                <div id="info">
                    <div class="info">
                        <div class="curiosidadEnt">
                            <div class="divisor"></div>
                            <?php echo $randomThings[mt_rand(0,count($randomThings)-1)]; ?>
                            <div class="divisor"></div>
                        </div>
                        
                    </div>
                </div>
            </main>
            <div></div>
        </div> 

    <!--Slide Menu-->
    <?php
        include 'componentes/slideMenu.html';
    ?>
</body>


</html>