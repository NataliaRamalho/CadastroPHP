# CadastroPhP
Aplicação que o realiza o cadastro de um usuário, utilizando PHP e MySQL

Sumário
=================
<!--ts-->
   * [Funcionalidades principais](#Funcionalidades-principais )
   * [Tecnologias utilizadas](#tecnologias-utilizadas)
   * [Como executar o código](#como-executar-o-código)
<!--te-->

 # Funcionalidades principais 
<li> Cadastro com nome, e-mail e CPF</li>
<li> Validações no CPF e máscara</li>
<li> Apresentação dos dados cadastrados </li>

# Tecnologias utilizadas 
<li> PHP </li>
<li> MySQL </li>

# Como executar o código 
<strong>  Pré-requisitos 📌 </strong>
<li> <a href="https://www.php.net/downloads.php#gpg-7.4" > PHP na versão 7.4 </a>  </li>
<li> Editor de código. Recomenda-se o <a href="https://code.visualstudio.com/" >VSCode </a> </li>
<li> <a href="https://www.mysql.com/downloads/" >MySQL e MySQL Workbench</a>  </li>

</br>
<strong>⚙️  Executando o código </strong>
</br>

</br>
<li> Baixe este repositório </li>
Caso tenho o <a href="https://git-scm.com/downloads" >git </a> instalado, digite o comando abaixo no seu terminal. </br>
Se não, faça o download do repositório e descompacte o arquivo.

</br>
</br>

`````
git clone https://github.com/NataliaRamalho/CadastroPHP.git
`````

<li> Abra a pasta onde baixou o repositório em seu editor de código </li>

<li> Edite o arquivo connection.php </li>
Dentro da pasta services, há um arquivo com o nome connection.php.</br> 
Abra-o e coloque o nome do usuário do seu banco de dados MySQL, 
entre as aspas simples no local que está escrito:

```
define('USER', ''); 
````

Ainda nesse arquivo, na linha de baixo onde está escrito:

```
define('PASSWORD', '');  
```
Coloque dentro das aspas simples a senha do seu banco de dados MySQL.

<li>Crie o esquema no banco de dados MySQL </li>
Abra o MySQL Workebench e digite os seguintes comando:

Primeiro para criação do esquema:
</br>

`````
  CREATE SCHEMA `cadastro_php` ;
`````
Em seguida, para passar a utilizar o cadastro_php:
</br>

`````
  USE `cadastro_php` ;
`````
Por fim para criar a tabela dos usuários digite: 
</br>

`````
  -- CREATE TABLE `cadastro_php`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
`````

<li> Rode o servidor PHP </li>
Volte ao seu editor de código e digite o comando o baixo: 
</br>
</br>

```
php -S localhost:8080
```
</br>
<strong>obs:</strong> Lembre-se de digitar o código a cima estando dentro da pasta onde salvou os arquivos desse repositório.
</br>
</br>
Parabéns o código já esta rodando  😃.</br>
Para conferir basta abrir o navegador e digitar na url: http://localhost:8080/   



⏰ Projeto desenvolvido em jul/2021
