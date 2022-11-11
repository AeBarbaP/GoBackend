<html>
    <header>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../QR/ajax_generate_code.js"></script>
        <script src="print.js" type="text/javascript"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');
    include('../QR/phpqrcode/qrlib.php'); 

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');

    $fecha_qr = strftime("%Y-%m-%d,%H:%M:%S");

    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $evento = $_POST['evento'];
    $mesa = $_POST['mesa'];
    $etiqueta = $_POST['etiqueta'];
    $tipo_invitado = 1;
    $VarEvent = "SELECT * FROM eventos WHERE id='$evento'";
    $resultEvent = $conn->query($VarEvent);
    $rowEvent = $resultEvent->fetch_assoc();

    function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
        }
        //genera un código de 9 caracteres de longitud.
        $codigo = generarCodigo(9);
        $contatena = $evento.'_'.$codigo.'_'.$mesa.'_'.$fecha_qr;

        $codesDir = "QR/codes";   
        $codesDir2 = "../QR/codes/";   
        // $codeFile = date('d-m-Y-h-i-s').'.png';
        $codeFile = $evento.'_'.$codigo.'_'.$mesa.'.png';
        $qrDirectorio = $codesDir.'/'.$codeFile;
        // QRcode::png($_POST['formData'], $codesDir.$codeFile, 'H', 10); 
        QRcode::png($contatena, $codesDir2.$codeFile, 'H', 10); 
        echo '
        <div id="div_print">
            <p><strong>Código Eventos<br>2022</strong></p>
            <p class="text-center"><img class="img-thumbnail" src="../'.$codesDir.$codeFile.'" /></p>
        </div>'
        ;

    $sqlInsert ="INSERT INTO invitados (apellido_p,apellido_m,nombre,celular,email,tipo_invitado,id_evento,mesa,etiqueta,qr) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email','$tipo_invitado','$evento','$mesa','$etiqueta','$qrDirectorio')";
    $resultadosqlInsert = $conn->query($sqlInsert);

    if($resultadosqlInsert){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado agregado',
            imageUrl: '../".$codesDir.$codeFile."',
            imageHeight: 200,
            imageAlt: '',
            text: 'Se agregó un invitado eje al evento',
            confirmButtonColor: '#3085d6',
            footer: '".$rowEvent['nombre_e']."'
        }).then(function(){window.location='../home_events.php?id=".$evento."';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>


</html>