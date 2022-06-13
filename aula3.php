<?php
print_r($_POST);


?>

<html>
    <head>
        <title>Nosso primeiro sistema</title>
    </head>
    <body bgcolor="white">
        <form action="" method="POST")>
        <center>
        <h1>E.E Vila do Lago</h1>  
        <h2>Formulário de inscrição</h2> 
        <label>
            <b>Informe seu nome completo: </b>
        </label><br>

        <input type="text" name="nome"><br>

        <label>
            <b>Informe seu sua idade: </b>
        </label><br>

        <input type="number" name="idade"><br>

        <label>
            <b>Informe seu sua data de nascimento: </b>
        </label><br>

        <input type="date" name="data"><br>

        <?php
        //echo"Informe seu sua escolaridade: ";
        ?>
        
        <h3>Informe sua escolaridade: </h3>

        <label>
            <b>Médio ou fundamental: </b>
        </label><br>

        <input type="text" name="escolaridade"><br>

        <label>
            <b>Que ano/série: </b>
        </label><br>

        <input type="number" name="ano"><br>

        <button type="submit">Salvar</button>
        </center>
        </form>
        
    </body>
</html>

<?php
if(isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['data']) && isset($_POST['escolaridade']) && isset($_POST['ano'])){
    echo"<h2 style='color:green;'>Seu cadrastro foi efetuado com sucesso!</h2>";
}else if($_POST['nome'] == ""){
    echo"<h2 style='color:red;'>Preencha o campo nome!</h2>";
}else if($_POST['idade'] == ""){
    echo"<h2 style='color:red;'>Preencha o campo idade!</h2>";
}else if($_POST['data'] == ""){
    echo"<h2 style='color:red;'>Preencha o campo data!</h2>";
}else if($_POST['escolaridade'] == ""){
    echo"<h2 style='color:red;'>Preencha o campo escolaridade!</h2>";
}else if($_POST['escolaridade'] == ""){
    echo"<h2 style='color:red;'>Preencha o campo ano/série!</h2>";
}else{
    echo"<h2 style='color:red;'>Preencha os campos!</h2>";
}
?>