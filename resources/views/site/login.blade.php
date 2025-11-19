<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 22px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #34495e;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2ecc71;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #27ae60;
        }

        .conteudo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        #nav{
            justify-content: end;
            padding-right: 32px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="conteudo">

        <form method="post" action="{{ route('site.login') }}">
            @csrf
            <h1>Login</h1>
            
            <label>Usuario:</label>
            <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário">
            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}

            <label>Senha:</label>
            <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha">
            {{ $errors->has('senha') ? $errors->first('senha') : '' }}

            <button type="submit">Acessar</button>
            {{ isset($erro) && $erro != '' ? $erro : '' }}

        </form>

    </div>
    
</body>

</html>