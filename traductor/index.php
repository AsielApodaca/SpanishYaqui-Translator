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
    <title>Traductor Yaqui</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/pag-logo.png">
    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div id="container">
        <header>
            <a href="/traductor" class="logo bounce">
                <img src="img/pag-logo.png">
                <p>Traductor Español Yaqui</p>
            </a>
            <button type="button" onclick="showMenu()"><img src="img/menu-icon.png"></button>
        </header>
        <main>
            <!--Caja de traducción-->
            <div class="container">
                <div class="lang">
                    <h3>Español</h3>
                    <div class="search">
                        <textarea class="textarea" id="search" oninput="countChar(this)" maxlength="2000"></textarea>
                        <img src="img/erase-icon.png" onclick="erase()">
                    </div>
                    
                    <div>
                        <div>Max.</div>
                        <div id="charNum">2000</div>
                    </div>
                </div>

                <!--traduccón-->
                <div class="lang">
                    <h3>Yaqui</h3>
                    <span class="textarea" id="result"></span>
                    <div>
                        <!--Comentarios de traducción-->
                        <div onclick="showComTrac()" class="langComent">
                            ¿Te parece que la traducción es incorrecta? ¡Escribenos los detalles!...
                        </div>
                        <!--Herramientas-->
                        <div class="tools">
                            <p>Escuchar texto</p>
                            <img class="copy" onclick="sound()" src="img/sound-icon.png">
                        </div>
                        <div class="tools">
                            <p>Copiar traducción</p>
                            <img class="copy" onclick="copyText()" src="img/copy-icon.png">
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </main>

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

    </div>
    
    <!--Slide Menu-->
    <?php
        include 'componentes/slideMenu.html';
    ?>
    <!--Comentario de traducción-->
    <div id="comentLang">
        <div class="comentForm">
            <div class="comentForm-barra">
                <p class="comentForm-sign">Reportar traducción</p>
            </div>
            <div class="comentForm-text">
                <p>
                    ¿Crees que la traducción es erronea? Escribenos los detalles
                    como el contexto de la frase, equivocación del traductor,
                    verdadero significado o traducción correcta. ¡Nos encantara
                    escuchar tu problema!
                </p>
                
            </div>
            <div class="comentForm-box">
                <label for="tracReport">Describe el error</label>
                <div class="inputCom">
                    <textarea id="tracReport" oninput="countCharCom(this)" maxlength="300"></textarea>
                    <div class="tracReport-count">
                        Max. <span id="charNumCom">300</span>
                    </div>
                </div>
                <p class="tracReport-aviso">Se enviará un registro del texto de origen y la traducción.</p>
            </div>
            <div class="comentForm-text">
                <button type="button" class="btn-coment" onclick="hideComTrac()" id="comTracCancel">CANCELAR</button>
                <button type="button" class="btn-coment btn-comentSubmit" id="comTracSubmit"></button>
            </div>
        </div>
    </div>
</body>

</html>