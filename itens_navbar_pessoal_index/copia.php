<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelaInicialPessoal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script_slide.js"></script>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="central">
                <div class="logo">
                    <img src="assets/img/logo.jpeg" alt="" width="200px">
                </div>
                    <div class="rede">
                        <h1>REDE SBQ</h1>
                        <div class="usual">
                            <img class="icon" src="assets/img/user.png" alt="">
                            <h3 class="usuario">Usuario:<br> Chitãozin</h3>
                        </div>
                    </div>
            </div>
            
                <div class="nav-options">
                    <!-- Itens do NavBar -->
                    <div class="nav-itens">
                        <ul>
                            <li class="nav-item"><a href="sobreSBQ.php" class="nav-link">Sobre a Plataforma</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Manual</a></li>
                            <li class="nav-item"><a href="exame.php" class="nav-link">Exame Unificado de Química</a></li>
                            <li class="nav-item" style="color: red"><a href="../index.php" class="nav-link">Sair da Conta</a></li>
                        </ul>
                    </div>
                    <style>
                        body{
    width: 100vw;
    height: 100vh;
    display: flex;
    background-color: #f7f7f7;
}
.nav-bar {
    width: 100vw;
    min-height: 10rem;
    display: flex;
}

.central{
    height: 100%;
    display: flex;
}

.logo {
    display: flex;
    align-items: center;
    margin-left: 1rem;
    margin-top: 0.5rem;
}
.rede{
    color: rgb(16, 74, 160);
    font-size: 2rem; 
    margin-left: 1rem;  
}

.rede h1 {
    font-size: 2.2rem;
}
.usual{
    display: flex;
    padding: 0.3rem 1rem;
    background-color: #e6e2e2;
    border-radius: 100px;
}
.icon{
    width: 2.6rem;
    display: flex;
    margin: 0.6rem;
}
.usuario{
    color: #000000;
    font-size: 1rem;
    border-radius: 10%;
}
.nav-options {
    display: flex;
    align-items: center;
    width: 100vw;
}

.nav-options ul {
    display: flex;
    justify-content: center;
    list-style: none;
}
.nav-link {
    text-decoration: none;
    font-size: 1rem;
    color: #000000;
    font-weight: 400;
}
.nav-itens{
    width: 100%;
    display: flex;
    justify-content: end;
    margin-right: 3rem;
}

.nav-item{
    padding: 1rem;
    min-width: 6rem;
    height: 6rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-item a{
    display: flex;
    align-items: center;
    justify-content: center;
    display: inline-block;
    transition: background 0.6s;
}
.nav-item:hover{
    background-color: #b8b4b4;
    transition: background 0.6s;
    height: 6rem;
    min-width: 6rem;
}

.barra{
    display: flex;
    padding-bottom: 2rem;
    padding-top: 2rem;
}
.quadrado{
    display: flex;
    align-items: center;
    width: 1000px;
    height: 40px;
    background-color: #237793;
}
.triangulo {
    width: 100px;
    height: 80px;
    background-color: #237793;
    clip-path: polygon(0% 0%, 80% 50%, 0% 50%);
}

.diretorio{
    color: white;
    margin-left: 2rem;
    font-size: x-large;
}
  

/* Imagem de fundo */
.pesquisa{
    background-image: url(../img/decoraçao.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    width: 100%;
    height: 35rem;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Caixa de Pesquisa */
.caixa{
    padding: 1.5rem 2rem;
    width: 100%;
    height: 2rem;
    border: 0;
    font-size: 1rem;
    
}
/* Estilização da Div "digitacao" */
.digitacao {
    display: flex;
    align-items: center;
    list-style: none;
}
.digitacao a {
    text-decoration: none;
    color: #ffffff;
    background-color: rgb(17, 149, 161);
    margin-left: 1rem;
    padding: 0.8rem 1rem;
    
}
/* Mensagem em cima da caixa de digitação */
.convite{
    color: #ffffff;
    align-items: center;
    justify-content: center;
    display: flex;
    margin-bottom: revert-layer;
}
/* Dados sobre a quantidades de Instituições,Laboratorios e Equipamento  */
.num{
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

.num li{
    background-color: rgba(17, 149, 161, 0.8);
    color: #ffffff;
    padding: 2rem 2rem;
    margin: 2rem 2rem;
    font-size: 1.3rem;
    border-radius: 10px;
}
.inform{
    display: flex;
    padding: 50px;

}
.casa{
    padding-right: 10px;
    width: 50px;
    height: 40px;
}
h2,h4{
    padding-bottom: 2rem;
}
.titulo h2 {
    display: flex;
    color: #006AB2;
}
.titulo1{
    flex-direction: column;
    margin-left: 50px;
}
.titulo1 h2{
    color: #006AB2;
}
.titulo2{
    margin-left: 50px;
}
.titulo2 h2{
    color: #006AB2;
}

/* Regulamento */
#b_regulamento{
    background-color: #c1d1dd;
    height: 50px;
    text-align: center;
    margin-bottom: 15px;
}

#regulamento{
    font-size: large;
    font-weight: 700;
    color: #7596ad;
    line-height: 50px;
    width: 100%;
    display: inline-block;
}

.descricao_regulamento{
    margin-top: 1rem;
    margin-bottom: 3rem;
}

.h5{
    color: #5f5f5f;
}

.container_regulamento{
    margin-left: 1rem;
}
                    </style>
            </div>
    </header>
    
