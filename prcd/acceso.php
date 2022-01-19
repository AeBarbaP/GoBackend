<html>
<header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php 
    session_start();
    include('conn.php');

    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM usr WHERE usr = '$usr' AND pwd = '$pwd'";
    $proceso_sql=$conn->query($sql);

    if ($resultado_sql=mysqli_fetch_array($proceso_sql)){

        $_SESSION['id']=$resultado['id'];
        $_SESSION['usr']=$usuario;
        $_SESSION['perfil']=$resultado['perfil'];
    
        if($resultado_sql['perfil']==1){
            
            // echo "<script type=\"text/javascript\">location.href='../dashboard.php';</script>";
            // session_destroy();
            // $_SESSION = [];
            echo "<script type=\"text/javascript\">location.href='../Perfiles/AdministradorZR';</script>";
        }
        
        elseif($resultado_sql['perfil']==2){
            echo "<script type=\"text/javascript\">location.href='../Perfiles/Habitantes';</script>";
        }
    
        elseif($resultado_sql['perfil']==3){
            echo "<script type=\"text/javascript\">location.href='../Perfiles/Propietarios';</script>";
        }
        
        elseif($resultado_sql['perfil']==4){
            echo "<script type=\"text/javascript\">location.href='../Perfiles/SuperAdmin';</script>";
        }
    
        elseif($resultado_sql['perfil']==5){
            echo "<script type=\"text/javascript\">location.href='../Perfiles/Ventas';</script>";
        }
        
        elseif($resultado_sql['perfil']==6){
            echo "<script type=\"text/javascript\">location.href='../Perfiles/Vigilantes';</script>";
        }
    
    }
    
    else{
        // echo "<script type=\"text/javascript\">location.href='http://juventud.zacatecas.gob.mx/premio_estatal_injuventud/';</script>";
        // echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href='../../index.php';</script>";
        echo "<script type=\"text/javascript\">Swal.fire(
            'Advertencia',
            'Contraseña no válida',
            'warning'
          ).then(function(){window.location='../index.html';}
        
          
        
        );</script>";
          
    
        
    }

?>

</html>