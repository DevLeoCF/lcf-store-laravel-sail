# 🛒 LCF Store | Laravel + Docker + Tailwind

Este projeto é um CRUD simples de produtos desenvolvido com **Laravel** utilizando **Laravel Sail** (Docker) para ambiente de desenvolvimento e **Tailwind CSS.**

---

## ⚙️ Pré-requisitos

Antes de iniciar, você precisa ter instalado na sua máquina:

- [Docker Desktop](https://www.docker.com/products/docker-desktop)  
- [WSL 2](https://learn.microsoft.com/pt-br/windows/wsl/install) (necessário no Windows)
- [Git](https://git-scm.com/) *(opcional, mas recomendado)*

> ❗ Laravel Sail utiliza Docker, então **não é necessário instalar PHP, Composer ou MySQL** diretamente na máquina.

---

## 🚀 Instalação

```bash
# Clone o repositório
git clone https://github.com/DevLeoCF/lcf-store-laravel-sail.git
cd lcf-store-laravel-sail

# Copie o .env
cp .env.example .env

# Suba os containers
./vendor/bin/sail up -d

# Gere a chave da aplicação
./vendor/bin/sail artisan key:generate

# Rode as migrations
./vendor/bin/sail artisan migrate

# (Opcional) Crie o link simbólico para imagens
./vendor/bin/sail artisan storage:link
```

---

## 🌐 Acessar o projeto

Após rodar os comandos acima, acesse no navegador:

```
http://localhost/produtos
```

---

## 📄 Funcionalidades

- ✅ Listar produtos
- ✅ Cadastrar novo produto (com imagem)
- ✅ Editar produto existente
- ✅ Excluir produto
- ✅ Visualizar detalhes
- ✅ Upload e exibição de imagem (armazenadas em `storage/app/public`)
- ✅ Estilização com Tailwind

---

## 🧾 Estrutura

- `app/Http/Controllers/ProdutoController.php`: lógica do CRUD
- `resources/views/produtos`: views do CRUD
- `public/storage`: onde as imagens são acessadas (link simbólico do `storage/app/public`)
- `routes/web.php`: definição das rotas

---

## 📦 Tecnologias

- Laravel 12
- Laravel Sail (Docker)
- Tailwind CSS
- PHP 8.4
- MySQL 8

---

## 🐳 Comandos úteis

```bash
# Subir os containers
./vendor/bin/sail up -d

# Acessar o terminal do container
./vendor/bin/sail shell

# Rodar migrations
./vendor/bin/sail artisan migrate

# Rodar comandos Artisan
./vendor/bin/sail artisan <comando>

# Instalar dependências PHP
./vendor/bin/sail composer install
```

---

## ✍️ Autor

Leonardo Campos • [@DevLeoCF](https://github.com/DevLeoCF)
