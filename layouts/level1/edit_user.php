<?php
session_start();
error_reporting (0);
$varsesion = $_SESSION['user'];
if($varsesion == null || $varsesion = ''){
    echo " <script> alert('USTED NO TIENE PERMISOS'); window.location= '../../index.php'</script>";
    die();
}

$num = $_SESSION['id_level'];
 
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
} else if ($num == 1){
?>    
<?php include('../../includes/conexion.php'); ?>
<?php include('../../includes/header.php'); ?>

<!-- Aqui el contenido de las paginas independientes --->

<div class="cards-table">
<div class="card-table">
<?php include('../../edit_user.php'); ?>
</div>

<!-- fin contenido de las paginas independientes --->

<?php include('../../includes/footer.php'); ?>
    
<?php    
} else {
    header("Location: ../../redirected.php");
}
?>