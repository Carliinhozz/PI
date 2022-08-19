<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <label for="">Registrar-se</label>
    <form action="{{url('register')}}" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name" placeholder="Digite seu nome">
        <label for="">Email:</label>
        <input type="email" name="email" placeholder="Digite seu email">
        <label for="">Senha:</label>
        <input type="password" name="password" placeholder="Digite sua senha">
        <button>Registrar-se</button>
    </form>
</body>
</html>