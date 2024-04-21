<?php

include('../Conexion.php');


if (isset($_POST['eliminar'])) {

    $id = $_POST['eliminar'];
    //DELETE FROM `usuarios registrados` WHERE  id=$id;
    $sentenciaSql = "DELETE FROM `usuarios registrados` WHERE id=$id";
    $sentenciaSql = $conexion->prepare($sentenciaSql);
    $sentenciaSql->execute();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <table>
       <tr>
           <th> 
              Nombre
           </th>
           <th>
              Apellidos
           </th>
           <th>
              Correo
           </th>
           <th>
              Telefono
           </th>
           <th>
              Contraseña
           </th>
           <th>
             Acciones
           </th>
        </tr>
        <!--  SELECT * FROM `usuarios registrados` -->       

        <tbody>

            <?php

               $sql = "SELECT * FROM `usuarios registrados`";
               $sql = $conexion->prepare($sql);
               $sql->execute();
               $datos = $sql->fetchAll();
             // los arreglos son objetos
             // solo se pueden imprimir con print_r y no con echo
             //print_r($datos);

               foreach ($datos as $key => $value) {
                 echo "
                 <tr>
                   <td>".$value['Nombre']."</td>
                   <td>".$value['Apellidos']."</td>
                   <td>".$value['Correo']."</td>
                   <td>".$value['Telefono']."</td>
                   <td>".$value['Contraseña']."</td>
                   <td>
                   <form method='POST' class='action-buttons'>
                   <input type='hidden' name='editar' value=".$value['id'].">
                   <input type= 'submit' value='Editar'>
                   </form>
                   </td>
                   <td>
                   <form method='POST' class='action-buttons'>
                   <input type='hidden' name='eliminar' value=".$value['id'].">
                   <input type= 'submit' value='Eliminar'>
                   </form>
                   </td>

                  </tr> 
                   
                     ";

               }
                

            ?>


        </tbody>
     



    </table>
    
</body>
</html>