# crud-basico
 CRUD basico usando PHP puro com padrão MVC, Banco de dados MySql e Doctrine ORM para conexão com banco de dados.

Apos baixar o projeto entre na pasta e execute: 
>composer install

Edite o arquivo \src\Infra\EntityManagerFactory.php e insira os dados para conexão com o banco de dados.

Execute o comando abaixo para gerar a tabela no banco de dados
>vendor\bin\doctrine.bat orm:schema-tool:create

Execute o comando abaixo para subir o servidor:
>php -S localhost:8080 -t public

Agora so acessar http://localhost:8080/ no navegador
