# TCC - Sistema de Gestão de Livros, Almanaque
 TCC em grupo de um sistema de gestão de livros, TCCs, Revista e etc.

## Conceito/Sobre
 Um site em hospedagem local com um sistema de entrada e saída de livros, o qual o cliente/usuário do site se cadastrará e terá a oportunidade de pegar um livro emprestado com data de devolução estipulada. A retirada dos livros será feita de maneira fisica, o usuário visitará o "deposito" e retirará seu livro escolhido anteriormente. 

## Método de execução do Projeto
 Primeiramente transfira a pasta "Almanaque" para dentro da pasta do seu servidor host a sua escolha, Ex.: No Laragon transfira a pasta Almanaque para dentro da Pasta: c: laragon/www/
 
 Após a inserção dos arquivos e a ativação do servidor de sua escolha, (Apache do laragon, por exemplo) o proximo passo é a criação do banco de dados em Myslq, o qual vc deve upar o arquivo "biblioteca.sql" da pasta "almanaque/slq/" em um banco de dados chamado "biblioteca".

Obs: O servidor tem que ser local, não pode haver senha no seu banco de dados e o usuário tem que se chamar "root".
