<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <label for="">Login</label>
    <form action="{{url('login')}}" method="POST">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email" placeholder="Digite seu email"> 
        <label for="">Senha:</label>
        <input type="password" name="password" placeholder="Digite sua senha">
        <button>Entrar</button>
    </form>
</body>
</html>