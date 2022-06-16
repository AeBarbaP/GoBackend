<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <header>
<body>
    
<?php    

    session_start();
    include('qconn/qc.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
$id = $_POST['id'];

//                   if (isset($_POST['submit']))
// {
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['csv']['name']) && in_array($_FILES['csv']['type'], $fileMimes))
    {
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['csv']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $nombre = $getData[0];
                $apellido_p = $getData[1];
                $apellido_m = $getData[2];
                $celular = $getData[3];
                $tipo_invitado = $getData[4];
                $id_evento = $getData[5];
 
                // If user already exists in the database with the same email
                // $query = "SELECT id FROM invitados WHERE id_evento = '" . $getData[5] . "'";
 
                // $check = mysqli_query($conn, $query);
 
                     mysqli_query($conn, "INSERT INTO invitados (nombre, apellido_p, apellido_m, celular, tipo_invitado, id_evento) VALUES ('" . $nombre . "', '" . $apellido_p . "', '" . $apellido_m . "', '" . $celular . "', '" . $tipo_invitado . "', '" . $id_evento . "')");
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            // header("Location: ../home_events.php?id=$id");
            
                echo "<script type=\"text/javascript\">
                Swal.fire({
                    icon: 'success',
                    title: 'Lista agregada',
                    text: 'Tu listado en el formato csv ha sido cargado correctamente',
                    footer: 'Gold Axs</a>'
                }).then(function(){window.location='../home_events.php?id=".$id."';});</script>";

                

            
         
    }
    else
    {
        echo "Selecciona un archivo válido";
    }
// }
?>
</body>

</html>