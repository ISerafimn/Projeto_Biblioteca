# TCC - Sistema de Gestão de Livros, Almanaque (Concluído)
 TCC em grupo de um sistema de gestão de livros, TCCs, revista e etc.

 ## Nota de Cobnclusão
  O TCC do Curso de Desenvolvimento de Sistema (jul/2022 - dez/2023) foi concluído no dia 13/12/2023 com sua apresentação na instituição ETEC de Heliópolis e com isso encerro as atualizações desse repositório. Pretendo, com o decorrer do meu aprendizado atualizar ou mesmo refazer esse trabalho, já que mesmo dando o meu melhor, tenho conhecimento que nele existe muito o que melhorar mas decorrente ao meu conhecimento atual e o tempo de entrega, que me limitava no que eu poderia fazer, não pude deixar ele em seu total explendor.

## Conceito/Sobre
 Um site em hospedagem local com um sistema de entrada e saída de livros, o qual o cliente/usuário do site se cadastrará e terá a oportunidade de pegar um livro emprestado com data de devolução estipulada. A retirada dos livros será feita de maneira fisica, o usuário visitará o "deposito" e retirará seu livro escolhido anteriormente. 

## Método de execução do Projeto
 Primeiramente transfira a pasta "Almanaque" para dentro da pasta do seu servidor host a sua escolha, Ex.: No Laragon transfira a pasta Almanaque para dentro da Pasta: c: laragon/www/
 
 Após a inserção dos arquivos e a ativação do servidor de sua escolha, (Apache do laragon, por exemplo) o proximo passo é a criação do banco de dados em Myslq, o qual vc deve upar o arquivo "biblioteca.sql" da pasta "almanaque/slq/" em um banco de dados chamado "biblioteca".

Obs: O servidor tem que ser local, não pode haver senha no seu banco de dados e o usuário tem que se chamar "root".
