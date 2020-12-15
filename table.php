<?php
             include("con_db.php");
             $consulta="SELECT name,apellido,email,telefono,donaciones FROM donacioness";
         
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

             

        ?>