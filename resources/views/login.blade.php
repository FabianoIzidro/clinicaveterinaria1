<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tela de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   

    <style>
    .tela{
       background-color:#2f8dda; 
    }    

    .imagem{
        margin: 2px 10px 1px 10px;
        width: 30%;
}
    </style>
</head >
<body class= "tela">
    <center>
    <img src= "{{asset("imagem/banner.jpg")}}" align="center" class= "imagem"/> 
    
    <table bgcolor= "#00BFFF" align="center" width ="30%" height ="100%">

        <tr height ="100%" > 
            <td colspan = 3 valign="top" align="center"> <h3> Login </h3> 
                @if(session('erro'))
                <div class="alert alert-danger">
                    <strong>erro!</strong> {{session('erro')}}
                </div>
                @endif
            <form action = "{{url("acessar")}}" method ="post">
                @csrf
            <input align="center" type="text" name ="nome" placeholder="Digite seu nome" required/><br/>
            <br/> 
            <input align="center" type="password" name ="senha" placeholder="Digite sua senha" required/><br/>
            <br/>
            <input type= "submit" value= "Acessar"> <a href="">Esqueci senha</a>
            </td>
        </tr>  
    </form> 
</table>
    
</body>
</html>