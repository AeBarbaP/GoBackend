<html>
<header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
session_start();
include('qconn/qc.php');

$usuario=$_POST['usr'];
$pwd=$_POST['pwd'];


$query="SELECT * FROM usr WHERE nombre='$usuario' AND pwd='$pwd'";

$proceso=$conn->query($query);

if ($resultado=mysqli_fetch_array($proceso)){
// if ($proceso){
//     $row_resultado = $proceso->fetch_assoc();

    $_SESSION['id']=$resultado['id'];
    $_SESSION['perfil']=$resultado['perfil'];
    $_SESSION['nombre']=$resultado['nombre'];
    $_SESSION['pwd']=$resultado['pwd'];

      if($resultado['perfil']==1){
        echo '
        <script>alert("Bienvenido '.$resultado['nombre'].'");</script>';
        echo "<script type=\"text/javascript\">location.href='../index.php';</script>";
        }
    
    elseif($resultado['perfil']==2){

        echo "<script type=\"text/javascript\">location.href='../index.php';</script>";
        
    
    //echo "Sesión no exitosa";
    //echo "<script type=\"text/javascript\">location.href='08_inicio.php';</script>";
    }

    elseif($resultado['perfil']==3){

        echo "<script type=\"text/javascript\">location.href='../dashboard.php';</script>";
    }
    

}
    


    else{

        session_destroy();
        $_SESSION = [];
        echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href='../index.html';</script>";

    
    }

         

?>

</html>