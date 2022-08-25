<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criação de currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

</head>
<body class="bg-dark text-light">
    <div class="container" style="max-width: 26.5rem;">
        <header class="py-5 text-center">
            <div>
                <a href="https://github.com/MarlonVNCS/empregue-se">
                    <img class="d-block mx-auto mb-4" src="https://bulma.io/images/placeholders/128x128.png" alt="" width="110" height="110">
                </a> 
            </div>
            <h2>Empregue-se</h2>

        </header>
        <div class="row">
            <div class="text-center">
                <h4>Currículo</h4>
            </div>
            <form method="POST" class="needs-validation">
               
                <div class="mb-3">
                    <label for="area_atuacao" class="form-label">Área de atuação</label>
                    <textarea class="form-control" id="area_atuacao" rows="6" placeholder="Dados do currículo" id="area_atuacao"></textarea>
                </div>

                <div class="mb-3">
                    <label for="formacao_academica" class="form-label">Formação acadêmica</label>
                    <textarea class="form-control" id="formacao_academica" rows="6" placeholder="Dados do currículo" id="formacao_academica"></textarea>
                </div>

                <div class="mb-3">
                    <label for="experiencia" class="form-label">Experiência</label>
                    <textarea class="form-control" id="experiencia" rows="6" placeholder="Dados do currículo" itemid="experiencia"></textarea>
                </div>

                <div class="col">
                    <label form="endereco" class="form-label">Endereço</label>
                    <input class="form-control" type="text" value="Dados do currículo" id="endereco">
                </div>
                   <br>
                   
                <div class="row">   
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Criar</button>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button class="btn btn-light btn-lg btn-block" type="submit">Cancelar</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>