<?php

include_once('confignotas.php');

echo "listei todas as questoes";

if(isset($_POST['lista_questoes'])){
    header('location: professores.php');
  }

$sql = "SELECT * FROM add_questoes";
$result = $conexao->query($sql);

//print_r($result);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="submit" class="apare btn btn-primary" value="Liste de questôes" name="lista_questoes">
    </form>
    
     <table>
        <thead>
            <tr>
                <th scope="col">id_questoes </th>
                <th scope="col">numerecao </th>
                <th scope="col">questa </th>
                <th scope="col">nivel </th>
                <th scope="col">gabarito </th>
                
            </tr>
        </thead>
        <thead>
            <?php
            while($user_data=mysqli_fetch_assoc($result)){
                echo "<tr>";  
                echo "<td>".$user_data['id_questoes']."</td>";
                echo "<td>".$user_data['numerecao']."</td>";
                echo "<td>".$user_data['questao']."</td>";
                echo "<td>".$user_data['nivel']."</td>";
                echo "<td>".$user_data['gabarito']."</td>";
                echo "</tr>";  
                $cont = 0;
                $cont ++;
            }

           
            ?>
            
        </thead>
     </table>
     
           
        <?php
       
       $cont2 = 0;
       while($cont2 < $cont)
        echo "lalalalal";
        echo "<select name='id_questoes' id='id_questoes'>";
        echo '<option value="' . $user_data["id_questoes"] . '">';
        echo $user_data["id_questoes"];
        echo "</option>";
        echo "</select>";
    
        ?>

     
</body>
</html>