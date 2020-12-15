<!DOCTYPE html>
<html>

<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/table-style.css">
</head>

<body>

    <div class="container">
       
        <?php 
        
        ?>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefóno</th>
                        <th>Email</th>
                        <th>Donaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            include("con_db.php");


            if ($conex->connect_error) {
                    die("Connection failed: " . $conex->connect_error);
                } 

                if(isset($_GET['valueToSearch'])) {
                        $valor=$_GET['valueToSearch'];
                        $consulta="SELECT name,apellido,email,telefono,donaciones FROM donacioness WHERE donaciones LIKE '%$valor%'";
                        $result=$conex-> query($consulta);
                 if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                     echo '
                         <tr>
                        <td> '.$row["name"].' </td>
                        <td> '.$row["apellido"].' </td>
                        <td> '.$row["email"].' </td>
                        <td> '.$row["telefono"].' </td>
                        <td> '.$row["donaciones"].' </td>
                         </tr>

                         ';

                 }
             }
              $result->free();

            }

             
        ?>

                <tbody>
            </table>
        </div>
    </div>
</body>

</html>

