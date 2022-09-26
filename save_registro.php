<?php

session_start();

include('includes/conexion.php');

$autor = $_SESSION['user'];

$escuela = $_POST['escuela'];

      if ($escuela=="Auto_Driving") {
          $dir="CRA 8C # 185 A - 18";
          $url="../css/img/logo_1.png";
      } else if ($escuela=="Agente_Guerrero") {
          $dir="CALLE 45 A sur # 54 A 55 piso 2";
          $url="../css/img/logo_2.png";
      } else if ($escuela=="Conducoches") {
          $dir="DIAGONAL 47 sur # 53-17 Piso 2";
          $url="../css/img/logo_3.png";
      } else if ($escuela=="Formacion_Vial") {
          $dir="TRANSVERSAL 126 B # 135-10";
          $url="../css/img/logo_4.png";
      } else if ($escuela=="Suzuka") {
          $dir="CRA 69 B # 25-41 SUR PISO 2";
          $url="../css/img/logo_5.png";
      } else if ($escuela=="Conduciendo_facil") {
            $dir="Carrera 69b 31-67 sur Barrio Carvajal";
            $url="../css/img/logo_6.png";
      } else {
          echo "Error escuela";
      }

    $fecha_agenda = $_POST['fecha_agenda'];
    $hora = $_POST['hora'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $t_doc = $_POST['t_doc'];
    $n_doc = $_POST['n_doc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $escuela = $_POST['escuela'];
    $examen = $_POST['examen'];
    $practica = $_POST['practica'];
    $horas = $_POST['horas'];
    $referido = $_POST['referido'];
    $tarea = $_POST['tarea'];
    $valor = $_POST['valor'];
    $abono = $_POST['abono'];
    $honorarios = $_POST['honorarios'];
    $comision = $_POST['comision'];
    $estado = $_POST['estado'];


    $comprobar = $n_doc;
    
    $query = "SELECT n_doc FROM registros WHERE n_doc = '$comprobar'";
    $result_tasks = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result_tasks);
    
    
if($comprobar == $row['n_doc']){
    echo "<script> alert('El documento ya existe'); window.location= 'redirected.php'</script>";
} else {
    


if (isset($_POST['save_task'])) {
    $fecha_crea = date('Y-m-d H:i:s'); 
  $query = "INSERT INTO registros (fecha_agenda, hora, autor, nombres, apellidos, t_doc, n_doc, email, celular, categoria, tipo, escuela, examen, practica, horas, referido, tarea, valor, abono, honorarios, comision, estado, dir, url, fecha_crea) VALUES ('$fecha_agenda', '$hora', '$autor', '$nombres', '$apellidos', '$t_doc', '$n_doc', '$email', '$celular', '$categoria', '$tipo', '$escuela', '$examen', '$practica', '$horas', '$referido', '$tarea', '$valor', '$abono', '$honorarios', '$comision', '$estado', '$dir', '$url','$fecha_crea')";
//   var_dump($url);
//   var_dump($query);exit();
  $result = mysqli_query($conn, $query);
    
  if(!$result) {
      
    die("<script> alert('Error al insertar datos'); window.location= 'redirected.php'</script>");
    
  }

  echo "<script> alert('Registro Exitoso'); window.location= 'redirected.php'</script>";

}
}

?>