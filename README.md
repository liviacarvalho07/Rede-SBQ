<div align="center">
  <img height="200" src=Imagens/logo.png />
</div>

###
<h1 align="center">Sistema Rede SBQ</h1>

</br>

<p> Este é o Sistema do laboratório da Sociedade Brasileira de Química. Seu desenvolvimento consiste na elaboração de uma interface de cadastro para equipamentos de laboratório de universidades e centros de pesquisa ao redor do país, onde os pesquisadores poderão ter acesso de maneira prática e encontrar a localização de determinados equipamentos, além ter conhecimento de quem é responsável por ele. Visto isso, o seguinte documento servirá para descrever o funcionamento deste sistema que foi desenvolvido visando facilitar o acesso a esse tipo de informação quando for necessária, usando de uma interface agradável e plenamente intuitiva. A seguir, detalham-se as etapas de sua criação. </p>
</br>

<h3 align="left">👩‍💻  Desenvolvedores </h3>

[![GitHub](https://img.shields.io/badge/GitHub-Livia-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/liviacarvalho07) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Alanna-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/AlanaLopes) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Luiza-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Nalu2) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Matheus-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Matheus) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Henry-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/HenryV042) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Emerson-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/emerson096) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Kalel-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/KalelOliveira) <br>

<h3 align="left">🛠️ Linguagens e ferramentas utilizadas </h3>

<div align="left">
  <img src= "https://img.shields.io/badge/HTML-239120?style=for-the-badge&logo=html5&logoColor=white" />
  <img width="12" />
  <img src= "https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white" />
  <img width="12" />
  <img src= "https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img width="12" />
  <img src= "https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" />
  <img width="12" />
  <img src= "https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" />
  <img width="12" />
</div>

<h3 align="left">💡 Referência </h3>

<p> Ao criar este sistema, tivemos por inspiração tanto o conteúdo quanto a aparência do site da Sociedade Brasileira de Química, visto que o Sistema SBQ foi desenvolvido para oferecer uma extensão que mantém sua qualidade e adiciona novas funcionalidades. Acesse o link abaixo para visitar o site da Sociedade Brasileira de Química e conhecer mais sobre suas iniciativas e recursos. </p>

🌐(https://www.sbq.org.br/)  

<h3 align="left">🖇️ Acesso ao site</h3>
<p>Para acessar nosso site, basta copiar e colar o seguinte URL na barra de endereços do seu navegador: 🌐(https://www.sbq.eeepmanoelmano.com.br/). Pressione Enter e você será direcionado à tela inicial.</p>

<h3 align="left">📋 Manual do Usuário</h3>
<p>Apresentamos, primeiramente, o manual do usuário, criado para fornecer instruções detalhadas sobre como utilizar todas as funcionalidades disponíveis em nosso site. Este é o primeiro manual de utilização desde a criação do site, e estamos empolgados em compartilhar todas as informações necessárias para que o usuário aproveite ao máximo a sua experiência no site.

Para acessar o manual completo, clique aqui.

Certifique-se de consultar regularmente para obter as informações mais recentes e relevantes sobre como utilizar nosso site de forma eficaz.</p>

<h3 align="left">🎲 Criação do Banco de Dados</h3>
<p>Ao iniciar o processo de desenvolvimento do banco de dados para nosso site, foi necessária a criação do modelo lógico de relacional. Esses modelos servem como esquemas conceituais que representam a estrutura e as relações entre os diferentes dados que serão armazenados.</p>

<h4 align="left">Modelo Relacional</h4>
O modelo relacional representa o modelo lógico em tabelas, colunas e chaves estrangeiras. Foi utilizado para definir como os dados serão organizados e inter-relacionados dentro do banco de dados. Esta etapa é essencial para garantir a integridade e consistência dos dados ao longo do tempo.
<br>
<div align="center">
  <img height="350" width="700" src="https://github.com/liviacarvalho07/Rede-SBQ/assets/111568402/c770c1ba-7a30-4bab-ab82-85c01663ba0d"/>
</div>
<br>

<h4 align="left">Modelo Lógico</h4>
 Este descreve a estrutura dos dados de forma independente no sistema de gerenciamento de banco de dados. Ele apresenta entidades, atributos e relacionamentos entre os dados de uma forma compreensível para os desenvolvedores do projeto. 
<br>
<div align="center">
  <img height= "350" width="700" src="https://github.com/liviacarvalho07/Rede-SBQ/assets/111568402/759dbba3-eb1e-4c4a-bb34-b44101ce80d9"/>
</div>
</br>

<p>Após a definição dos modelos lógico e relacional para o banco de dados, iniciou-se o desenvolvimento no SQL(Structured Query Language), uma linguagem padrão usada para gerenciar bancos de dados relacionais. 
  Utilizamos o SQL para criar as tabelas, definir os relacionamentos entre elas e realizar consultas para acessar e manipular os dados armazenados. Abaixo, encontra-se um trecho de código SQL que representa parte do nosso esquema de banco de dados, mais especificamente sobre cadastro de laboratórios.</p>
  
```
--Criação da tabela "laboratórios"
create table laboratorios(
id integer primary key auto_increment,
nome_labarotorio varchar(255) not null,
departamento varchar(255) not null,
nome_coordenador varchar(255) not null,
universidade varchar(300) not null
);
```
<h3 align="left">✨ Criação do design</h3>
<p>Cada elemento visual deste site, desde a escolha de cores até os layouts, foi cuidadosamente selecionado e adaptado para manter a identidade da referência. Utilizamos a plataforma de design colaborativo Figma para esboçar e salvar as ideias, que tornou possível maior agilidade neste processo, já que a plataforma permite criar, colaborar e compartilhar designs de interfaces de usuário com muita fluidez. O design criado no Figma serviu como base para o trabalho da equipe de desenvolvimento front-end e back-end. Cada tela e componente foi implementado do zero, garantindo não apenas uma aparência visual atraente, mas também uma experiência de usuário fluida e intuitiva. A seguir, está um esboço do início destas atividades.
</p>
<br>
<div align="center">
  <img height= "350" width="700" src="https://github.com/liviacarvalho07/Rede-SBQ/assets/111568402/9c910eb4-3826-4152-af86-c56085faece8"/>
</div>
</br>

<h3 align="left">💻 Executando o Projeto em um Servidor Local </h3>
<p>Para executar este projeto em seu próprio ambiente de desenvolvimento, siga estas seguintes etapas:
  **1.Clonar o Repositório:** Primeiro, copie o projeto hospedado neste repositório. O comando "git clone" pode ser usado para fazer isso.
´´´
git clone https://github.com/seu-usuario/nome-do-repositorio.git
´´´ 
**2.Configuração do Ambiente:** Antes de iniciar o servidor, é importante verificar se todas as configurações foram feitas corretamente, o que pode incluir arquivos de configuração específicos do projeto, etc.

**Inicie o Servidor Local:** Após a conclusão das etapas anteriores, a instalação das dependências e configurações, se necessária, o servidor poderá ser iniciado.

**3.Acesso à Aplicação:** Após iniciar o servidor, a aplicação estará disponível em seu navegador padrão. Basta acessar o seguinte URL: ...
</p>

<h3 align="left">🤝 Suporte </h3>
<p> Está com dúvdas? Tem sugestões? Nossa equipe está disponível para colaborar através de um suporte dedicado via e-mail, respondendo prontamente às consultas e fornecendo assistência personalizada ao usuário.</p>

<img src="https://img.shields.io/badge/matheus.soares7648@gmail.com-D14836?style=for-the-badge&logo=gmail&logoColor=white" />

<h3 align="left"> </h3>



 




