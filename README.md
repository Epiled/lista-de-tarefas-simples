# Lista De Tarefas Simples

O projeto foi realizado utilizando HTML, CSS, Javascript, PHP e MySQL

Não foram utilizados frameworks neste projeto.

Estrutura do Projeto:

O projeto segue uma estrutura básica com os seguintes diretórios:
  
  src: Contém os arquivos-fonte da aplicação.
  - assets: Contém as imagens e svgs
  - css: Contém todos os estilos divididos por seções da página e escritos no padrão BEM
  - includes: Contém códigos que são repetidos em diiversas pagínas
  - js: Contém todos os arquivos com extensão js
  - mysql: Todas as funções e interações com o banco de dados

Fora da src está o banco de dados nomeado de tarefas, nele está a estrutura do banco de dados, este banco de dados acompanha dois usuários de teste e duas tarefas de teste.

O projeto contém 4 telas no total login, cadastro, tarefas, adicionar tarefas.

# Instruções para Executar a Aplicação Localmente:

Pré-requisitos:
- Certifique-se de ter o PHP instalado em sua máquina.
- Verifique se o banco de dados (MySQL, PostgreSQL, etc.) está configurado corretamente.
- Importe o arquivo banco de dados 'tarefas.sql' para o seu phpmyadmin ou Workbench.
- Recomendo a utilização do XAMPP com o phpmyadmin
  
Passos para executar a aplicação:
- Clone o repositório do projeto: git clone https://github.com/Epiled/lista-de-tarefas-simples.git
- Acesse o diretório do projeto: cd lista-de-tarefas-simples
- Inicie o servidor web local: php -S localhost:8000 -t public
- Acesse a aplicação em seu navegador: http://localhost:8000

Como utilizar

Na tela de login você tem a opção de cadastrar um usuário novo ou de usar o acesso de um dos usuários do banco de dados

![image](https://github.com/Epiled/lista-de-tarefas-simples/assets/55258483/6edef6fa-83e5-47fe-a480-38d923df416f)
![image](https://github.com/Epiled/lista-de-tarefas-simples/assets/55258483/19196e91-d876-49ba-a3a6-4aa1239c1c38)

```
Usuário: Felipe_teste
Senha: senha123
```
```
Usuário: Ana_teste
Senha: senha456
```

Após conectar você será redirecionado para a tela de tarefas onde fica listado todas as tarefas do banco.
![image](https://github.com/Epiled/lista-de-tarefas-simples/assets/55258483/5d241b40-1abc-43f9-ae83-ce6bf60fdf36)

Toda tarefa tem titulo, descrição, nome do criador, e duas funções concluir e excluir.

Por último a tela de adicionar tarefa, ela exige titulo e descrição o nome do criador e coletado automaticamnte pela aplicação.
![image](https://github.com/Epiled/lista-de-tarefas-simples/assets/55258483/16087ec9-468e-475b-b7d5-f0a0c3f28fe0)

Espero que essas informações sejam úteis. Se você tiver alguma dúvida ou precisar de mais detalhes, não hesite em entrar em contato.

Atenciosamente,

Felipe De Andrade.
