# Instruções para o funcionamento do CRUD

## Instalações
- XAMPP
- MySQL
- PHP

## Etapas
- Abra o XAMPP e de Start no Apache e no MySQL.
- Abra o phpMyAdmin no navegador web, http://localhost/phpmyadmin, e crie o banco para o CRUD.
 O utilizado neste repositório foi, nome do banco : "crudteste", e a query para criação da tabela:
```
CREATE TABLE produtos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  descricao TEXT
);
```
- Coloque os arquivos que estão dentro da pasta "crud-estudo" na pasta "htdocs" do seu XAMPP (não criar subpastas): 
- Abra http://localhost/index.php, para ver o site localmente no navegador web.

