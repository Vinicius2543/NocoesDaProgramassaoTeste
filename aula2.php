<?php
print_r($_POST);
echo"<center>";
echo"Formulario";
echo"</center>";
echo"<br><br>";
if(isset($_POST['nome'])){

}
?>
<center>
    <a>Oie</a><br>
    <h1>Oie2</h1><br>
    <h2>Oie3</h2><br>
    <button type="submit">
        <a href="aula3.php">Voltar</a>
    </button><br><br>
    <form action="" method="POST">
        <label>
            <b style="color:red;">Informe seu nome: </b>
        </label>
        <input type="text" name="nome"><br><br>

        <label>
            <b style="color:blue;">Informe o seu sobrenome: </b>
            </label>
        <input type="text" name="sobrenome"><br><br>

        <label>
            <b style="color:yellow;">Informe sua idade: </b>
            </label>
        <input type="number" name="idade"><br><br>

        <label>
            <b style="color:brown;">Data de nascimento: </b>
            </label>
        <input type="date" name="data"><br>

        <button type="submit">gravar</button>
    </form>

    <img src="GTR.png" width= "100%" height="500em"><br><br><br>
    <img src="GTR2.png" width= "800px" height="600px">
</center>