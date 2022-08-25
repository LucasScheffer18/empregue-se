<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/masks.js"></script>
    <script src="js\jQuery-Mask-Plugin-master\src\jquery.mask.js"></script>

</head>
<body class="bg-dark text-light">
    <div class="container" style="max-width: 26.5rem;">
        <header class="py-5 text-center">
            <div>
                <a href="login.html">
                    <img class="d-block mx-auto mb-4" src="https://bulma.io/images/placeholders/128x128.png" alt="" width="110" height="110">
                </a> 
            </div>
            <h2>Empregue-se</h2>

        </header>
        <div class="row">
            <div class="text-center">
                <h4>Criar conta</h4>
            </div>
            <form method="POST" class="needs-validation">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" >
                    
                </div>
                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select class="form-select" id="sexo">
                        <option value="f">Feminino</option>
                        <option value="m">Masculino</option>
                    </select>        
                </div>
                <div class="mb-3">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" >
                </div>
                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX">
                </div>
                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
                </div>
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-light btn-lg btn-block" type="submit">Criar</button>
                </div>
            </form>
            <div class="text-danger"> <!-- Essa classe só ta para destacar o texto enquanto n arrumamos o botão-->
                <a href="login.php" class="text-danger text-decoration-none">Já tem uma conta?</a>
                <div id="contas"></div>
            </div>
        </div>
    </div>
</body>
</html>