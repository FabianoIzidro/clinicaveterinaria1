<!DOCTYPE html>
<html lang="en">
<head>
    <title>cadastro animal</title>
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
        <h1 class = "cadastro" >CADASTRO DE ANIMAL</h1>
        @if($errors->any())
        <div class= "alert alert-danger">
            <strong>Erro!</strong>
            @foreach($errors->all() as $erro)
            <p> {{$erro}} </p>
            @endforeach
            @endif
    </div>
        <p id ="borda-inferior" class= "formulario"><b>Formulário</b></p> 
    <div id ="conteudo-principal" >
        <a href="menu"><input type = "submit" value="Voltar" class= "button2" /></a>
        <a href="login"><input type = "submit" value="Tela Login" class= "button2" /></a>
        <a href="animallistar"><input type = "submit" value="Listar" class= "button2" /></a>

    <tr width="100%">
    <td width="30%" align="center"><img src ="{{asset("imagem/vet(1).jpg")}}" class ="imagem"/></td>
    </tr>       
<form action= "{{url('animalcadastrar')}}" method="POST">
    @csrf
    </br clear = "both"> 
    <fieldset align ="center" >
    <legend>Dados Animal</legend>
    <label>Nome Animal:</label>
        <input type="text" nome="NomeAnimal" placeholder="Digite aqui" value ="{{old('NomeAnimal')}}" required/>
        </br>
    <label > Responsavel:</label>
        <input type="text" nome="Responsavel" placeholder="Digite aqui" value ="{{old('Responsavel')}}" required/>
        </br>
    <label> Data Nascimento:</label>
        <input type="date" nome="DataNascimento" value ="{{old('DataNascimento')}}" required/>
        </br>
    <label> Data da Ultima Vacina:</label>
        <input type="date" nome="DataVacina" value ="{{old('DataVacina')}}" required/>
        </br>
    <label> Cor:</label>
        <input type="text" nome="Cor" placeholder="Digite aqui" value ="{{old('Cor')}}" required/>
        </br>
    <label > Altura:</label>
        <input type="text" nome="Altura" placeholder="Digite aqui" value ="{{old('Altura')}}" required/>
        </br>
    <label > Peso:</label>
        <input type="text" nome="Peso" placeholder="Digite aqui" value ="{{old('Peso')}}" required/>
        </br>
    <label> Sexo: </label>
        <select name="Sexo" required >
            <option value="">--</option>
            <option value="1"@if(old('Sexo') == 1) selected @endif>fêmea</option>
            <option value="2"@if(old('Sexo') == 2) selected @endif>macho</option>
        </select>
        </br>
    <label> Especie: </label>
        <select name="Especie" required>
            <option value="">--</option>
            <option value="1"@if(old('Especie') == 1) selected @endif>gato</option>
            <option value="2"@if(old('Especie') == 2) selected @endif>cão</option>
        </select>
        </br>
    <label>Raça:</label>
        <select name="Raca" required>
            <option value="">--</option>
            <option value="1"@if(old('Raca') == 1) selected @endif>siamês</option>
            <option value="2"@if(old('Raca') == 2) selected @endif>maine</option>
            <option value="3"@if(old('Raca') == 3) selected @endif>pengala</option>
            <option value="4"@if(old('Raca') == 4) selected @endif>persa</option>
            <option value="5"@if(old('Raca') == 5) selected @endif>pitbull</option>
            <option value="6"@if(old('Raca') == 6) selected @endif>pitbull</option>
            <option value="7"@if(old('Raca') == 7) selected @endif>buldogue</option>
            <option value="8"@if(old('Raca') == 8) selected @endif>labrador</option>
            <option value="9"@if(old('Raca') == 9) selected @endif>pastor alemão</option>
        </select></br>
            <button type="submit" class= "button">Cadastrar</button> 
        </fieldset>
        </br>
</form>            
</div>
    
</body>
</html>