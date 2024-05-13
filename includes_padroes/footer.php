<footer>
    <div class="row">
        <!-- 1ª Coluna -->
        <div class="col-sm" >
            <div id="text"><h6>Sociedade Brasileira de Química</h6>
            <h6>CNPJ: 49.353.568/0001-85</h6>
            <h6>Av. Prof. Lineu Prestes, 748</h6>
            <h6>Bloco 3 Superior, Sala 371</h6>
            <h6>CEP: 05508-000</h6>
            <h6>Cidade Universitária</h6>
            <h6>São Paulo, Brasil</h6></div>
        </div>

        <!-- 2ª Coluna -->
        <div class="col-sm" id="texto">
            <div class="col-sm">
                
            </div>
            <div class="col-sm" id="text-duvida">
            <img src="../assents/imagens/interrogatorio.png" id="icone_interrogacao" alt="">
                <div class="perguntas">
                    <h5>Perguntas frequentes</h5>
                    <h6>Talvez sua dúvida esteja aqui</h6>
                </div>
                
            </div>
            
        </div>

        <!-- 3ª Coluna -->
        <div class="col-sm">
            <p><img src="../assents/imagens/facebook.png" id="icone" alt=""><label class="icone">Facebook</label></p>
            <p><img src="../assents/imagens/instagram.png" id="icone" alt=""><label class="icone">Instagram</label></p>
            <p><img src="../assents/imagens/youtube.png" id="icone" alt=""><label class="icone">Youtube</label></p>
            <p><img src="../assents/imagens/twitter-alt-circle.png" id="icone" alt=""><label class="icone"><Tr></Tr>witter</label></p>
        </div>
        <div class="row">
            
        </div>
    </div>
</footer>

<div class="copyright">
    <h6>© Copyright 2024 SBQ</h6>
</div>

<style>
    footer{
    width: 100vw;
    padding: 40px;
    justify-content: center;
    align-items: center;
    background: #666666;
    color: #ffffff;
    box-sizing: border-box;
    }

    .interrogacao{
        background: url('interrogatorio.png');
        width: 32px;
        height: 32px;
    }

    #icone{
        width: 32px;
        height: 32px;
        margin-left: 20%;
    }

    #icone_interrogacao{
        width: 32px;
        height: 32px;
    }

    .icone{
        margin-bottom: 3%;
        margin-left: 5%;
        
    }

    #text{
        margin-left: 20%;
    }

    #texto{
        margin-left: 10%;
    }

    .copyright {
    background: #484848;
    color: white;
    align-items: center;
    justify-content: center;
    display: flex;
    width: 100vw;
    padding-top: 0.3rem;
}
    #text-duvida{
        display: flex;
    }
    
    .perguntas{
        margin-left: 1rem;
    }

    @media (min-width=420px){
        #texto{
            margin-left: 20%;
            color: red;
        }
    }
</style>