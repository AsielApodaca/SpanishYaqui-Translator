<?php
    include 'conexion/conexion.php';
    /*Traductor*/
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $splitSearch = explode(" ",$search);
        foreach($splitSearch as $word){
            $word = "%$word%";
            if(strlen($word)>2){
                $sql = "SELECT * FROM palabras WHERE esp LIKE :s LIMIT 1";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam('s',$word);
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    $yaq = $row['yaq'];
                    echo$yaq." ";
                }
            }
        }
    }
    /*Reporte de traducción y comentarios del sitio a base de datos*/
    if(isset($_POST['textOrig']) || isset($_POST['siteCom'])){
        //Registro de reportes
        $textOrig=filter_var(ucfirst($_POST['textOrig']),FILTER_SANITIZE_STRING);
        $textTrad=$_POST['textTrad'];
        $tradCom=filter_var(ucfirst($_POST['tradCom']),FILTER_SANITIZE_STRING);
        //Registro de comentarios
        $siteCom=filter_var(ucfirst($_POST['siteCom']),FILTER_SANITIZE_STRING);
        /*Guardado de datos*/
        //Guardado de reporte
        $guardar=$conexion->prepare('INSERT INTO reportes(reporte,textoOrigen,textoTraduccion) VALUES(:TRADCOM,:TEXTORIG,:TEXTTRAD)');
        $guardar->execute(array(':TRADCOM'=>$tradCom,':TEXTORIG'=>$textOrig,':TEXTTRAD'=>$textTrad));
        //Guardado de comentario
        $guardar=$conexion->prepare('INSERT INTO comentarios(comentario) VALUES(:SITECOM)');
        $guardar->execute(array(':SITECOM'=>$siteCom));
    }    
?>