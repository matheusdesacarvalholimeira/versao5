<?php 
 include_once('confignotas.php');

if(isset($_POST['submit']))
{ //print_r($_POST['nome']);
$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
$questao4 = $_POST['questao4'];
$questao5 = $_POST['questao5'];
$questao6 = $_POST['questao6'];
$questao7 = $_POST['questao7'];
$questao8 = $_POST['questao8'];
$questao9 = $_POST['questao9'];
$questao10 = $_POST['questao10'];
$questao11 = $_POST['questao11'];
$questao12 = $_POST['questao12'];
$questao13 = $_POST['questao13'];
$questao14 = $_POST['questao14'];
$questao15 = $_POST['questao15'];
$questao16 = $_POST['questao16'];
$questao17 = $_POST['questao17'];
$questao18 = $_POST['questao18'];
$questao19 = $_POST['questao19'];
$questao20 = $_POST['questao20'];
$result = mysqli_query($conexao, "INSERT INTO questoes(questao1, questao2, questao3, questao4, questao5, questao6, questao7, questao8, questao9, questao10, questao11, questao12, questao13, questao14, questao15, questao16, questao17, questao18, questao19, questao20) VALUES ('$questao1','$questao2','$questao3','$questao4','$questao5','$questao6','$questao7','$questao8','$questao9','$questao10','$questao11','$questao12','$questao13','$questao14','$questao15','$questao16','$questao17','$questao18','$questao19','$questao20')");
        
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ 
            width: 360px; 
            padding: 20px;
            margin-left: 30%;
         }
    </style>
    <title>Prova Senac</title>
</head>
<body>
<nav class="navbar navbar-expand-sm " id="bgnav">
    <!-- logo -->
    <a class="navbar-brand" href="#">
      <img src="img/logo-senac.png" alt="logo" style="width:65px;" class="logoo">
    </a>
    <!-- Links -->
    
  </nav>
  
<div class="container">
    <div class="row">
        <form action="senac.php" method="post">
        <div class="col">
        <ul class="questoes">
        <li>
        <h1>1</h1>
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao1" id="">
        </div>
        </li>
        <li>
        <h1>2</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao2" id="">
        </div>
        </li>
        <li>
        <h1>3</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao3" id="">
        </div>
        </li>
        <li>
        <h1>4</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao4" id="">
        </div>
        </li>
        <li>
        <h1>5</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao5" id="">
        </div>
        </li>
        <li>
        <h1>6</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao6" id="">
        </div>
        </li>
        <li>
        <h1>7</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao7" id="">
        </div>
        </li>
        <li>
        <h1>8</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao8" id="">
        </div>
        </li>
        <li>
        <h1>9</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao9" id="">
        </div>
        </li>
        <li>
        <h1>10</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao10" id="">
        </div>
        </li>
        <li>
        <h1>11</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao11" id="">
        </div>
        </li>
        <li>
        <h1>12</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao12" id="">
        </div>
        </li>
        <li>
        <h1>13</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao13" id="">
        </div>
        </li>
        <li>
        <h1>14</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao14" id="">
        </div>
        </li>
        <li>
        <h1>15</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao15" id="">
        </div>
        </li>
        <li>
        <h1>16</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao16" id="">
        </div>
        </li>
        <li>
        <h1>17</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao17" id="">
        </div>
        </li>
        <li>
        <h1>18</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao18" id="">
        </div>
        </li>
        <li>
        <h1>19</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao19" id="">
        </div>
        </li>
        <li>
        <h1>20</h1>
        <div class="col">
        <img src="./img/questao1.png" class="img-thumbnail" alt="..."><br>
        <label for="" class="titulo_questao">Insira sua Resposta</label><br>
        <label for="" class="titulo_questao">Responda apenas colocando a letra da alternativa</label><br>
        <input type="text" name="questao20" id="">
        </div>
        </li>
        </ul>
        <input type="submit" name="submit">
    </div>
    </form>
</div>
</body>
</html>