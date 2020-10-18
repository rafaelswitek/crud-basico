# crud-basico
 CRUD basico usando PHP puro com padrão MVC, Banco de dados MySql
 Usando Doctrine ORM para conexão com banco de dados.

Apos baixar o projeto, executar: 
>Composer install

Execute o comando abaixo para gerar a tabela no banco de dados
>vendor\bin\doctrine.bat orm:schema-tool:create

Entre na pasta e execute:
>php -S localhost:8080 -t public