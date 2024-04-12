function verificacao_pessoal(){
    require_once ('config.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_inserido = $_POST['usuario_acesso'];
        $senha_inserida = $_POST['senha_acesso'];
        <!-- Query Verify Acesso Pesooal -->
        $sql = "SELECT email_cadastrado, senha FROM cad_pessoal; WHERE email_cadastrado = '$email_inserido' and senha = '$senha_inserida' nivel = '1'";
        if($sql == True){
            
        };
        else{
            <!-- Inserir Alerta de EMAIL ou SENHA invalidos -->
        };
    };
};









        <!-- Query Verify Acesso Funcional -->
        $sql = "SELECT email_cadastrado, senha FROM cad_funcional; WHERE email_cadastrado = '$email_inserido', senha = '$senha_inserida'";
