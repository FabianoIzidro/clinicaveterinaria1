<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listar Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #tela{
    background-color: #2f8dda;
    border-style:outset;
        border-radius: 10px;
        margin: 5px 2px 5px 5px;
        color: white;
}
    .cadastro{
        color: white;
        margin: 5px 15px 20px 20px;
        font-weight: bold;
}
    .titulo{
        color: white;
        text-align: center;
}
    .opcao{
        color: white;
        text-align:left;
        text-decoration: none;
}
    .button{
        width:25%;
        color: #0077ff;
        border: 1px solid #00BFFF;
        border-radius: 10px;
        font-size: 20px;
        margin: 25px 60px 5px 25px;
        text-align: center;
        
    }

</style>  
</head>

<body  id="tela">
    <div class ="titulo">

		<p>
        <h1> DADOS </h1></p>
        @if(session('sucesso'))
        <div class="alert alert-sucess">
            <p>{{session('sucesso')}}</p>
        </div>
        @endif
        <div class ="opcao">
        <a href=""></a><input type = "submit" value="Editar" class= "button"/>
		<a href=""></a><input type = "submit" value="Voltar" class= "button"/>
        <a href=""></a><input type = "submit" value="Excluir" class= "button"/>
        </div>
    </div>
	<br/><br/>
	<div>

	<div class ="cadastro">
        <fieldset align ="center" >
		<h1>Cliente</h1>
        <div>Nome:</div>
        <div>Facebook:</div>
        <div>Data Nascimento:</div>
        <div>CPF:</div>
        <div>RG:</div>
        <div>Sexo:</div>
        <div>Numero:</div>
        <div>CEP:</div>
        <div>Cidade:</div>
        <div>Bairro:</div>
        <div>Estado:</div>
    </fieldset>

    </div>
</form>
</body>
</html>