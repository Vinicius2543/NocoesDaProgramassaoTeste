<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">  
    </head>
    <body>
        <form action="" method="POST">

            <center>

            <h2>Formulário</h2>

            <label>Nome</label><br>
            <input type="text" name="nome" required><br>

            <label>sobrenome</label><br>
            <input type="text" name="sobrenome" required><br>

            <label>Idade</label><br>
            <input type="number" name="idade" required><br>

            <label>Data de Nascimeno</label><br>
            <input type="date" name="data" required><br>

            <label>Cidade</label><br>
            <input type="text" name="cidade" required><br>

            <label>Estado</label><br>
            <input type="text" name="estado" required><br>

            <button type="submit">Salvar</button>

            </center>

        </form>
        <center>

        <?php

        class pessoa_obj{};

        $pessoa = new pessoa_obj();
        $pessoa->nome = "Vinicius";
        $pessoa->sobrenome = "Alexandre";
        $pessoa->idade = 17;
        $pessoa->data = "11/11/2004";
        $pessoa->cidade = "Tarumã";
        $pessoa->estado = "SP";

        $pessoa2= new pessoa_obj();
        $pessoa2->nome = "Alexander";
        $pessoa2->sobrenome = "Castro";
        $pessoa2->idade = 45;
        $pessoa2->data = "13/12/1976";
        $pessoa2->cidade = "Tarumã";
        $pessoa2->estado = "SP";

        $pessoa3= new pessoa_obj();
        $pessoa3->nome = "Kauan";
        $pessoa3->sobrenome = "Borsoi";
        $pessoa3->idade = 19;
        $pessoa3->data = "04/06/2003";
        $pessoa3->cidade = "Tarumã";
        $pessoa3->estado = "SP";

        //print_r($pessoa);
        //echo"<br>";
        //print_r($pessoa2);
        //echo"<br>";
        //print_r($pessoa3);
        //echo"<br>";

        $arrayPessoas = array();
        function inserirPessoaNaLista($arrayPessoas, $item){
            $pessoa = new pessoa_obj();
            $pessoa->nome = $item['nome'];
            $pessoa->sobrenome = $item['sobrenome'];
            $pessoa->idade = $item['idade'];
            $pessoa->data = $item['data'];
            $pessoa->cidade = $item['cidade'];
            $pessoa->estado = $item['estado'];

            array_push($arrayPessoas, $pessoa);
            return $arrayPessoas;
        }
        //echo"<br>O meu array de pessoas: <br>";
        //print_r($arrayPessoas);
        array_push($arrayPessoas, $pessoa);
        array_push($arrayPessoas, $pessoa2);
        array_push($arrayPessoas, $pessoa3);

        //echo"<br><br><pre>";
        //print_r($arrayPessoas);
        //echo"</pre><br><br>";

        if(isset($_POST['cidade']) && isset($_POST['estado'])){
            if($_POST['cidade'] ==''){
                echo"<h2 style = 'color:red'>Campo 'Cidade' vazio,preencha o campo!</h2>";
            }else if($_POST['estado'] == ''){
                echo"<h2 style = 'color:red'>Campo 'Estado' vazio, preencha o campo!</h2>";
            }else{
                $arrayPessoas = inserirPessoaNaLista($arrayPessoas, $_POST);
                echo"<h2 style = 'color:green'>Seu cadrasto foi efetudado com sucesso!</h2>";
                echo"Seja bem vindo(a)!";
            }
        }

        echo"<table border='1'>";
        for ($posicao=0; $posicao < count($arrayPessoas); $posicao++) { 
            if($arrayPessoas[$posicao]->idade > 0 ){
                echo "<tr>";
                    echo "<td> ".$arrayPessoas[$posicao]->nome."</td>";
                    echo "<td> ".$arrayPessoas[$posicao]->sobrenome."</td>";
                echo "</tr>";
            } 
        }
        //for($i=0; $i < count($arrayPessoas); $i ++){
            //echo"Oi ".$arrayPessoas[$i] -> nome;
        //}

       
        ?>
        <table border = '1'><!-- iniciando a tabela -->
            <tr> <!-- iniciando a linha -->
                <td>Cidade:</td> <!--iniciando e fechando uma coluna -->
                <td>Estado:</td> <!-- iniciando e fechando uma coluna -->
            </tr>
            <tr>
                <td>Tarumã</td> <!-- iniciando e fechando uma coluna -->
                <td>São Paulo</td> <!-- iniciando e fechando uma coluna --> 
            </tr>

        </table>
        </center>
    </body>
</html>



