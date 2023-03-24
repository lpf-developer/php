### Comandos Git 
***
```bash

git config --global user.name "Luis Paulo"
git config --global user.email "franca.luiz.paulo.777@gmail.com"
git branch -m master main

```
### Comandos Docker
***
Para criar os contêiners a partir do arquivo docker compose

> docker compose up -d

Para eliminar os contêineres

> docker compose down

Para parar os contêineres

> docker compose stop

Para iniciar os contêineres

> docker compose start

Para alterar o conteúdo do contêiner

> docker compose exec php docker-php-ext-install pdo pdo_mysql mysqli

* onde php é o nome do contêiner
* este comando instala as dependências do php, a saber: pdo, pdo_mysql, mysqli
* após instalar as dependências reinicie os contêineres: docker compose stop; 
  docker compose start

### Comandos SQL
***
Criação do banco de dados MySQL

> CREATE DATABASE store CHARACTER SET utf8 COLLATE utf8_general_ci;

Criação da tabela e registros

```sql 

CREATE TABLE products (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  category ENUM('presentes', 'papelaria', 'livros') NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  amount INT(11) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO products (name, category, price, amount) VALUES
('Caneta esferográfica', 'papelaria', 1.50, 50),
('Caderno espiral', 'papelaria', 5.99, 25),
('Agenda 2023', 'papelaria', 15.90, 10),
('Mochila escolar', 'presentes', 50.00, 20),
('Kit de chá', 'presentes', 40.00, 15),
('Porta-retrato', 'presentes', 10.00, 30),
('Livro - Dom Casmurro', 'livros', 20.00, 5),
('Livro - A insustentável leveza do ser', 'livros', 30.00, 8),
('Livro - O pequeno príncipe', 'livros', 15.00, 12),
('Lápis de cor', 'papelaria', 2.99, 40),
('Grampeador', 'papelaria', 9.99, 20),
('Pasta de arquivo', 'papelaria', 4.50, 30),
('Porta-canetas', 'papelaria', 7.00, 25),
('Bloco de notas', 'papelaria', 3.50, 50),
('Quadro de avisos', 'papelaria', 12.00, 10),
('Caneca personalizada', 'presentes', 15.00, 20),
('Almofada de pescoço', 'presentes', 25.00, 10),
('Kit de sabonetes', 'presentes', 18.00, 15),
('Copo com canudo', 'presentes', 12.00, 30),
('Livro - O grande Gatsby', 'livros', 25.00, 6),
('Livro - A cabana', 'livros', 28.00, 7),
('Livro - O código da Vinci', 'livros', 30.00, 4),
('Caneta hidrográfica', 'papelaria', 2.00, 50),
('Estojo escolar', 'papelaria', 8.99, 15),
('Marcador de texto', 'papelaria', 1.50, 30),
('Borracha', 'papelaria', 0.50, 50),
('Calculadora', 'papelaria', 20.00, 10),
('Capa para celular', 'presentes', 18.00, 25),
('Porta-lápis', 'papelaria', 5.00, 20),
('Caneca térmica', 'presentes', 22.00, 15),
('Livro - A menina que roubava livros', 'livros', 17.00, 20)

```
