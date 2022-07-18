<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark">
      <div class="container-fluid">
          <a href="bootstrap.php" class="navbar-brand" style = "color:white">Página Principal</a>
          <a href="funcionarios.php" class="navbar-brand" style = "color:white">Funcionarios</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </nav>
    <?php
    function conexao(){
      $nomeServidor = "localhost";
      $database = "database";
      $usuario = "root";
      $senha = "";

      //criar a conexão
      $conexao = mysqli_connect($nomeServidor, $usuario, $senha, $database);
      //checagem de conexão
      if(!$conexao){
        die("ConeXão falhou: ".mysqli_connect_error());
      }else{
        echo "Conexao com sucesso!";
      }
      return $conexao;
    }
    function selectFuncionarios($id){
      $conexao = conexao();
      //executar o comando desejado (ou query)
      $comando = "SELECT * FROM FUNCIONARIOS WHERE ID = $id";
      $resultado_comando = mysqli_query($conexao, $comando) or die('Erro do envio no envio do comando: '.$conexao)." ".mysqli_error($conexao);
      //exibir dados da tabela
      return $resultado_comando;
    }

    //o get serve para pegar informações na barra de pesquisa
    $funcionario = selectFuncionarios($_GET['id']);
    print_r($funcionario)
    ?>
    <form class="form-control" action="" method="POST">;
        <?php while($indice = mysqli_fetch_array($funcionario)){?>
          <center>

              <h2>Inscrição de Funcionarios</h2><br>

              <label>Nome</label><br>
              <input class="form-control" type="text" name="nome" required value="<?php echo $indice['nome'] ?>"><br>

              <label>Cargo</label><br>
              <input class="form-control" type="text" name="cargo" required value="<?php echo $indice['cargo'] ?>"><br>

              <label>Salário</label><br>
              <input class="form-control" type="number" name="salario" required value="<?php echo $indice['salario']?>"><br>

              <label>Descrição</label><br>
              <input class="form-control" type="text" name="descricao" required value="<?php echo $indice['descricao'] ?>"><br><br>

              <button class="btn btn-success" type="submit">Salvar</button>
            
          </center>
        <?php } ?>
      </form>
  </body>
</htm>