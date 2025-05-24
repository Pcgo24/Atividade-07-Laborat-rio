# 🧬 Cadastro de Exames Genéticos - Laravel

> Sistema simples desenvolvido em **Laravel** para cadastro e gerenciamento de exames genéticos em um laboratório.

---

## 📋 Funcionalidades

* Cadastro de exames com:

  * Paciente (nome)
  * Número do exame (exame\_id)
  * Tipo de exame (Sequenciamento, PCR, Microarray)
  * Data de coleta
  * Laudo (opcional)
* Validação dos dados com mensagens personalizadas
* Listagem dos exames cadastrados
* Redirecionamento automático após cadastro
* Interface estilizada com **Bootstrap**

---

## 🚀 Tecnologias utilizadas

* PHP
* Laravel
* Bootstrap (via CDN)
* MySQL ou outro banco compatível

---

## 🛠️ Como executar o projeto

### ✅ Clonar o repositório

```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio
```

### ✅ Instalar dependências

```bash
composer install
```

### ✅ Configurar o ambiente

* Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

* Gere a chave do Laravel:

```bash
php artisan key:generate
```

* Configure o banco de dados no arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### ✅ Executar migrations

```bash
php artisan migrate
```

### ✅ Rodar o servidor local

```bash
php artisan serve
```

* Acesse:

```
http://localhost:8000/exames
```

---

## 🔄 Estrutura do projeto

```
app/
├── Http/
│   └── Controllers/
│       └── ExameController.php
├── Models/
│   └── Exame.php

resources/
└── views/
    └── exames/
        ├── create.blade.php
        └── index.blade.php

routes/
└── web.php
```

---

## 👤 Autor

Desenvolvido por **Paulo Cesar Cardoso Domingues**

---

