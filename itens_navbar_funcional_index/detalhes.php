<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script_slide.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Detalhes</title>
    <style>
        .container-detalhes{
            margin: 3.5rem;
        }

        .container-detalhes h2,h4,h6{
            padding: 0;
        }

        .container-detalhes h2{
            margin-top: 3rem;
        }

        .container-detalhes b{
            color: rgb(16, 129, 140);
        }

        .container-detalhes .tr{
            width: 100%;
            height: 2px;
            background-color: black;
        }
        
        .container-detalhes button{
            text-decoration: none;
            color: #ffffff;
            background-color: rgb(17, 149, 161);
            padding: 0.8rem 1rem;
            border-radius: 30px;
            border: solid white 2px;
        }
        
        .container-detalhes .logo{
            justify-content: space-between;
        }

        @media screen and (min-width: 1000px){
            .container-detalhes{
                margin-left: 10rem;
                margin-right: 10rem;
            }
        }
    </style>
</head>
<body style="width: 100%; height: 100vh; justify-content: center">
    <div class="container-detalhes">
        <div class="logo">
            <img src="assets/img/logo.jpeg" alt="" width="200px">
            <a href="#" onclick="location.replace(document.referrer)"><button>Voltar</button></a>
        </div>
        <?php
        require_once "../dependencies/config.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Consultar o banco de dados para recuperar os dados do equipamento
            $sql = "SELECT * FROM equipamentos_catalogo WHERE id = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();

            // Exibir os detalhes do equipamento
            if ($result) {
                ?>
                <h2><b>Nome do Equipamento:</b> <?php echo $result['nome_equipamento']; ?></h2>
                <div class="tr"></div>
                <h4>Responsável: <?php echo $result['responsavel']; ?></h4>
                <h2><b>Informações:</b></h2>
                <div class="tr"></div>
                <h4><b>Modelo:</b> <?php echo $result['modelo']; ?></h4>
                <h4><b>Marca:</b> <?php echo $result['marca']; ?></h4>
                <h4><b>Tipo:</b> <?php echo $result['tipo_equipamento']; ?></h4>
                <h4><b>Descrição:</b> <?php echo $result['descricao']; ?></h4>
                <h2><b>Laboratório do Equipamento:</b></h2>
                <div class="tr"></div>
                <h4><?php echo $result['nome_labarotorio']; ?></h4>
                <h2><b>Formas de Contato:</b></h2>
                <div class="tr"></div>
                <h4><b>Telefone:</b> <?php echo $result['telefone']; ?></h4>
                <h4><b>Email:</b> <?php echo $result['email']; ?></h4>
                <h4><b>Web Site:</b> <?php echo $result['website']; ?></h4>
                <h4><b>CEP:</b> <?php echo $result['cep'];?></h4>
                <h4><b>Cidade:</b> <?php echo $result['cidade'];?></h4>
                <h4><b>Rua:</b> <?php echo $result['rua'];?></h4>
                <h4><b>Bairro:</b> <?php echo $result['bairro'];?></h4>
                <?php
            } else {
                echo "Equipamento não encontrado.";
            }
        } else {
            echo "ID do equipamento não informado.";
        }
       ?>
    </div>
    <!-- Footer -->
    <?php include "../includes_padroes/footer.php"?>
</body>
</html>