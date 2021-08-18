## Como rodar o projeto

composer install

php -S localhost:3000 -t public

vendor/bin/doctrine orm:generate-proxies

vendor/bin/doctrine dbal:run-sql 'SELECT * FROM usuarios;

vendor/bin/doctrine dbal:run-sql 'INSERT INTO usuarios (email, senha) VALUES ("andre@alura.com.br", "$argon2i$v=19$m=65536,t=4,p=1$aDBha1dvdi9Hb3ROL0pFNA$wfJk4+rdWLCkSbeG0JUzyTxPmfs53FvIhnr4QWY1YMo");' 

password_hash('123456', PASSWORD_ARGON2I);

vendor/bin/doctrine list

