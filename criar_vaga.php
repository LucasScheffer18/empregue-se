<?php require_once("validar.php");
require_once("menu_principal.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregue-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/criar_contas.js"></script>
    <script src="js/masks.js"></script>
    <script src="js\jQuery-Mask-Plugin-master\src\jquery.mask.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</head>
<?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "empregue_se");
    if($conn){
        $sql = "SELECT * FROM empresa WHERE id = $_SESSION[login]";
        $registro = mysqli_query($conn,$sql);
        if(mysqli_num_rows($registro) == 1){
            $registros = mysqli_fetch_array($registro);

            $empresa = $registros['nome'];
        }
    }

    if($conn){
        $sql = "SELECT * FROM cidade ORDER BY nome";
        $registro = mysqli_query($conn,$sql);
        if(mysqli_num_rows($registro) > 0){
            $registros = mysqli_fetch_array($registro);
            $id = $registros["id"];
            $cidade_nome = $registros['nome'];
        }
    }

?>

<body class="bg-dark text-light">
    <div class="container" style="max-width: 36.5rem;">
        <div class="text-center">
            <h4>Vaga de emprego</h4>
        </div>
        <form method="POST" class="needs-validation">
            <div class="mb-3">
                <label for="nome_vaga" class="form-label">Nome da vaga</label>
                <input class="form-control" id="nome_vaga" name="nome" type="text" placeholder="">
                <!-- não deixa alterar o q esta na caixa de texto readonly-->

            </div>
            <div class="mb-3">
                <label for="nome_empresa" class="form-label">Nome da empresa</label>
                <input class="form-control" id="nome_empresa" name="nome_empresa" type="text" placeholder="" value="<?php echo("$empresa"); ?>">

            </div>


            <div class="mb-3">
                <label for="descrição" class="form-label">Descrição</label>
                <textarea class="form-control" id="descrição" name="descricao" rows="4" placeholder=""></textarea>
            </div>
            <div class="mb-3">
                <label for="vagas_ofertadas" class="form-label">Vagas de vagas ofertadas</label>
                <input class="form-control" id="vagas_ofertadas" name="vagas" type="number" placeholder="">

            </div>

            <div class="mb-3">
                <label for="vagas_ofertadas" class="form-label">Cidade</label>
                <input class="form-control" id="id_cidade" name="cidade" type="text" placeholder="" value="<?php echo("<option value='$id'>$cidade_nome</option>");?>">

            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Area</label>
                <input class="form-control" id="endereco" type="text" name="area" placeholder="">

            </div>

            <div class="row">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-light btn-lg btn-block" type="submit" name="criar">Criar</button>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <a class="btn btn-light btn-lg btn-block" href="index.php" type="submit">Cancelar</a>
                </div>
            </div>
        </form>
        <?php
        if(isset($_POST["criar"])){
            $nome=$_POST["nome"];
            $nome_empresa=$_POST["nome_empresa"];
            $descricao=$_POST["descricao"];
            $quantidade=$_POST["vagas"];
            $area=$_POST["area"];
            $status = 0;

            $empresa = $_POST['nome_empresa'];
            $cidade = $_POST['cidade'];

            $conn = mysqli_connect("localhost", "root", "", "empregue_se");

            if ($conn){
                $sql = "INSERT INTO vaga(nome,descricao,quantidade,status, id_empresa,id_cidade) VALUES ('$nome','$descricao', '$quantidade','$status','$_SESSION[login]', '$cidade')";
                if(mysqli_query($conn, $sql)){
                    echo ("
                    <script>
                    alert('Conta criada com sucesso');
                    location.href = 'index.php';
                    </script>");
                }
            }    
        }

        ?>
    </div>
    </div>
</body>

</html>