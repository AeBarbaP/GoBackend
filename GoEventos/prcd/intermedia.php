<?php    
    session_start();
    include('conn2.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    
    $id=$_POST['id'];
    $tipo_doc = 1;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    $link= 'archivo1';
    $validacion = 1;

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}


$archivo_ext=$_FILES['file1']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../archivos/". $link .'_'. $id .'.'.$extension)){
    echo "$fileName carga completa";
    
    $ruta = "archivos/". $link .'_'. $id .'.'.$extension;
    // $sqlinsert= "UPDATE documentos SET link4='$ruta_pptx' WHERE id_usr='$curp'";
    $sqlinsert= "INSERT INTO docs (id_ext,ruta,tipo_doc,fecha_agregado,validacion) 
    VALUES('$id','$ruta','$tipo_doc','$fecha_sistema','$validacion')";
    $resultado2= $conn->query($sqlinsert);
    
    
} else {
    echo "move_uploaded_file function failed";
}
    
?>

if (isset($_POST['submit'])) {
            $i=0;
            require "connection.php";
            if (is_uploaded_file($_FILES['csv']['tmp_name'])) {
                echo "<h3>" . "File ". $_FILES['csv']['name'] ." uploaded successfully." . "</h3>";
            }
            //Import uploaded file to Database
            $handle = fopen($_FILES['csv']['tmp_name'], "r");
            try {
      $import= $db->prepare("INSERT INTO adherence(
                              dateandtime,
                              lastname,
                              paidtime,
                              approvedtime,
                              notadhering) VALUES(
                              ?,?,?,?,?)");

    $i = 0;        
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        if($i > 0) {
            $data = str_replace('"', '', $data); 

            $import->bindParam(1, $data[0], PDO::PARAM_STR);                
            $import->bindParam(2, $data[1], PDO::PARAM_STR);                
            $import->bindParam(3, $data[2], PDO::PARAM_STR);                
            $import->bindParam(4, $data[3], PDO::PARAM_STR);                
            $import->bindParam(5, $data[4], PDO::PARAM_STR);                
            $import->execute();
        }
        $i++;

    }
}

catch(PDOException $e) {  
    echo $e->getMessage()."\n";
}}