<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Triangle Challenge</title>
  <link rel="stylesheet" href="style/main.css">
</head>

<body>
  <h1>Fundunesp - Triangle Challenge</h1>  
  <h2>Candidato: Lucas Matos Foltran</h2>

  <div class="container form-container">
    <form method="post" action="" id="input_form">
      <label for="fnumber">Insira o número de linhas que deseja para o triângulo:</label>
      <div class="container input-container">
        <input type="number" min="1" name="fnumber" id="fnumber">
        <button type="submit" form="input_form" value="generate_triangle" name="generate_triangle" id="generate_triangle">Criar Triângulo</button>
      </div>
    </form>
  </div>
  
  <div class="container triangle-container">
    <?php require_once "src/triangle_generator.php" ?>
  </div>
</body>

</html>