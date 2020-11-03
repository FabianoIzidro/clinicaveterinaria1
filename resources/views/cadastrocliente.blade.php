<!DOCTYPE html>
<html lang="en">
<head>
    <title>cadastro cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .cadastro{
        color: white;
        text-align: center;
} 
    #borda{
        border: 10px solid white;
        border-style:outset;
        border-radius: 10px;
        margin: 5px 2px 5px 5px;
}

    .formulario{
        color: white;
        font-size: 20px;
        text-align: center;
        
}
    #borda-inferior{
        background-color: red;
        border: 4px solid white;
        margin: 15px 250px 15px 250px;

    
}
    #conteudo-principal{
        background-color: #00BFFF;
        margin: 0px 250px 10px 250px;
        color: black;
        font-weight: bold;
        padding: 2%;

}
    .imagem{
        border-radius: 10px;
        float:inline-start;
        top: 180px;
        left: 540px;  
        margin: 5px 5px 0px 50px;
        width: 52%    
    
}   
    .fonte-padrao{
        color: white;
}
    #tela{
        background-color: #2f8dda;
    }
    .button{
        width:50%;
        color: #0077ff;
        border: 1px solid #00BFFF;
        border-radius: 10px;
        font-size: 20px;
        margin: 3px;

    }
    .button2{
        width:10%;
        color: #0077ff;
        border: 1px solid #00BFFF;
        border-radius: 10px;
        font-size: 14px;
        margin: 6px;
        text-align: center;

    }

</style>
</head>
<body id = "tela">
    <div id="borda">
        <h1 class = "cadastro" >CADASTRO CLIENTE</h1>
    @if($errors->any())
    <div class= "alert alert-danger">
        <strong>Erro!</strong>
        @foreach($errors->all() as $erro)
            <p> {{$erro}} </p>
        @endforeach
    </div>
    @endif
        <p id ="borda-inferior" class= "formulario"><b>Formulário</b></p> 
    <div id ="conteudo-principal" >
        <a href="menu"><input type = "submit" value="Voltar" class= "button2" /></a>
        <a href="login"><input type = "submit" value="Tela Inicial" class= "button2" /></a>
        <a href="clientelistar"><input type = "submit" value="Listar" class= "button2" /></a>

    <tr width="100%">
    <td width="30%" align="center"><img src ="{{asset("imagem/vet(1).jpg")}}" class ="imagem"/></td>
    </tr>       

<form action= "{{url('clientecadastrar')}}" method="POST">
    @csrf
    </br clear = "both"> 
    <fieldset align ="center" >
    <legend>Dados Cliente</legend>
    <label>Nome Cliente:</label>
        <input type="text" nome="NomeCliente" placeholder="Digite aqui" value ="{{old('NomeCliente')}}" required>
        </br>
    <label > Facebook:</label>
        <input type="email" nome="Facebook" placeholder="Digite aqui" value ="{{old('Facebook')}}"/>
        </br>
    <label> Data Nascimento:</label>
        <input type="date" nome="DataNascimento" value ="{{old('DataNascimento')}}" required />
        </br>
    <label> Telefone:</label>
        <input type="number" nome="Telefone" value ="{{old('Telefone')}}" required/>
        </br>
    <label> CPF:</label>
        <input type="number" nome="CPF" placeholder="Digite aqui" value ="{{old('CPF')}}" required/>
        </br>
    <label > RG:</label>
        <input type="number" nome="RG" placeholder="Digite aqui" value ="{{old('RG')}}" required/>
        </br>
    <label> Sexo: </label>
        <select nome="Sexo" required>
            <option value="">--</option>
            <option value="1"@if(old('Sexo') == 1) selected @endif>masculino</option>
            <option value="2"@if(old('Sexo') == 2) selected @endif>>feminino</option>
        </select>
        </br>
    </select>
    </br>
    <fieldset align ="center"> 
    <legend>Endereço</legend>
    <label>Rua:</label>
        <input type="text" nome="Rua" placeholder="Digite aqui" value ="{{old('Rua')}}" required/>
        </br>
        <label> Numero:</label>
        <input type="number" nome="Numero" placeholder="Digite aqui" value ="{{old('Numero')}}" required/>
        </br>
        <label> CEP:</label>
        <input type="number" nome="CEP" placeholder="Digite aqui" value ="{{old('CEP')}}" required/>
        </br>
    <label> Cidade:</label>
        <select name="cidade" required>
            <option value="">--</option>
            <option value="1"@if(old('cidade') == 1) selected @endif>Maceio</option>
            <option value="2"@if(old('cidade') == 2) selected @endif>Pilar</option>
            <option value="3"@if(old('cidade') == 3) selected @endif>Rio Largo</option>
            <option value="4"@if(old('cidade') == 4) selected @endif>Arapiraca</option>
        </select>
        </br>
    <label> Bairro: </label>
        <select name="bairro" required>
            <option value="">--</option>
            <option value="1"@if(old('bairro') == 1) selected @endif>Barro Duro</option>
            <option value="2"@if(old('bairro') == 2) selected @endif>Trapiche</option>
            <option value="3"@if(old('bairro') == 3) selected @endif>Centro</option>
            <option value="4"@if(old('bairro') == 4) selected @endif>Farol</option>
        </select>
        </br>
    <label>Estado:</label>
        <select name="estado" required>
            <option value="">--</option>
            <option value="1"@if(old('estado') == 1) selected @endif>Alagoas</option>
            <option value="2"@if(old('estado') == 2) selected @endif>Pernanbuco</option>
            <option value="3"@if(old('estado') == 3) selected @endif>Bahia</option>
            <option value="4"@if(old('estado') == 4) selected @endif>Piaui</option>
            <option value="5"@if(old('estado') == 5) selected @endif>Fortaleza</option>
        </select></br>
        <button type="submit" class= "button">Cadastrar</button>
        </fieldset>
        </br>
</form>            
</div>
    
</body>
</html>