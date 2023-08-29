<?php
    require '../../modelo/modelo_administrador.php';
  

    $MU = new Modelo_Administrador();

    $apellp2 = htmlspecialchars($_POST['apellp2'],ENT_QUOTES,'UTF-8');
    $nombre2 = htmlspecialchars($_POST['nomb2'],ENT_QUOTES,'UTF-8');
    $fechaN2 = htmlspecialchars($_POST['fechaN2'],ENT_QUOTES,'UTF-8');
    $dni2 = htmlspecialchars($_POST['dni2'],ENT_QUOTES,'UTF-8');
    $telf2 = htmlspecialchars($_POST['telf2'],ENT_QUOTES,'UTF-8');
     $pago2 = htmlspecialchars($_POST['pago2'],ENT_QUOTES,'UTF-8');
    $codi2 = htmlspecialchars($_POST['codi2'],ENT_QUOTES,'UTF-8');
    $grado2 = htmlspecialchars($_POST['grad2'],ENT_QUOTES,'UTF-8');
    $sexo2 = htmlspecialchars($_POST['sex2'],ENT_QUOTES,'UTF-8');
    $fechaR2 = htmlspecialchars($_POST['fechaR2'],ENT_QUOTES,'UTF-8');
    $contra2 = password_hash($_POST['contra2'],PASSWORD_DEFAULT,['cost'=>10]);
    $direccion2 = htmlspecialchars($_POST['direccion2'],ENT_QUOTES,'UTF-8');

     $fecha_actual2 = date('Y-m-d H:i:s');

    $fechmas2 = date('Y-m-d H:i:s',strtotime($fecha_actual."+ 1 month"));
     
      $consulta = $MU->Modificar_alumnos($apellp2,$nombre2,$fechaN2, $dni2,$telf2,$pago2, $codi2,$grado2,$sexo2,$fechaR2,$fechmas2,$direccion2,$contra2);
    echo  $consulta;


?>

