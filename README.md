# Projeto de Agenda 📅

Este é um projeto de uma agenda simples, desenvolvido em PHP com HTML, CSS e Bootstrap para facilitar o front-end. A aplicação se conecta ao banco de dados PostgreSQL para armazenar e recuperar dados.

## Instruções para Conexão com o Banco de Dados 🔌

1. Abra o arquivo `config/connection.php`.
2. Altere as linhas 3, 4, 5 e 6 com as configurações de conexão do seu banco de dados (usuário, senha, host e nome do banco de dados).
3. Se estiver utilizando um banco de dados diferente do PostgreSQL, altere a linha 10 conforme necessário.

### Exemplo de configuração de conexão:

```php
// Linha 3: Host
$host = 'localhost'; 

// Linha 4: Usuário
$user = 'seu_usuario'; 

// Linha 5: Senha
$password = 'sua_senha'; 

// Linha 6: Nome do banco de dados
$dbname = 'seu_banco_de_dados';

// Linha 10: Tipo de banco de dados (PostgreSQL)
$db = 'pgsql';
## Funcionalidades ⚙️
```
---

## Banco de Dados 🗄️

A aplicação utiliza um banco de dados PostgreSQL para armazenar as informações dos contatos. Para garantir o funcionamento adequado, crie a tabela `contato` com a seguinte estrutura:

```sql
CREATE TABLE contato (
  id_contato SERIAL PRIMARY KEY,
  nome_contato VARCHAR(150),
  tel_contato VARCHAR(25),
  obs_contato TEXT
);
```
---

## A aplicação possui as seguintes funcionalidades principais:

1. **Cadastrar Contatos** ➕: Permite adicionar novos contatos à agenda, incluindo nome, telefone e observações.
2. **Editar Contatos** ✏️: Permite editar as informações de um contato já existente na agenda.
3. **Excluir Contatos** ❌: Permite excluir um contato da agenda.
4. **Visualizar Contatos** 👀: Exibe uma lista de todos os contatos cadastrados, permitindo visualizar as informações completas.
5. **Interface Responsiva** 📱: A interface foi construída com o uso do Bootstrap para garantir que a aplicação seja responsiva e se ajuste bem a diferentes dispositivos.

## Tecnologias Utilizadas 🛠️

- **PHP**: Linguagem de programação principal para o desenvolvimento back-end.
- **HTML & CSS**: Utilizados para a construção do front-end.
- **Bootstrap**: Framework CSS para facilitar a criação de uma interface responsiva e moderna.
- **PostgreSQL**: Banco de dados utilizado para armazenar as informações dos contatos.

## Como Rodar o Projeto 🚀

1. Configure o ambiente PHP em sua máquina (ou use um servidor local como o XAMPP).
2. Importe o banco de dados para o PostgreSQL utilizando a estrutura de tabela fornecida.
3. Altere as configurações de conexão no arquivo `connection.php`.
4. Acesse o projeto em seu navegador, abrindo o arquivo `index.php`.

---

## 📞 Contato
Para dúvidas ou sugestões, entre em contato:

- Email: shnakashimanakata@gmail.com
- LinkedIn: https://www.linkedin.com/in/sergio-hideki/
