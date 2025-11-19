<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projeto Laravel – Site Tema Livre (Middleware + CRUD)

Este repositório contém um projeto desenvolvido em **Laravel**, com tema livre, atendendo aos seguintes requisitos da avaliação:

- ✅ Implementação de **Middleware personalizado**
- ✅ Implementação de **CRUD completo**
- ✅ Uso de **Eloquent ORM** e integração com **MySQL**
- ✅ Publicação no **GitHub**
- ✅ README com prints obrigatórios do **Banco de Dados**, **Middleware** e **CRUD**
- ⚠️ **Views e Controllers possuem comentários**, conforme solicitado

---

## 🎯 Tema do Projeto

Sistema simples de gestão de fornecedores, incluindo cadastro, listagem, edição e exclusão de registros.  
A área interna é protegida com middleware de autenticação personalizado.

---

## 🛠 Tecnologias Utilizadas

- PHP 8+
- Laravel 10+
- Bootstrap 5 (para layout das telas)
- MySQL / MariaDB
- Blade Templates
- Composer

---

## 📂 Estrutura Principal do Projeto

<img width="297" height="583" alt="image" src="https://github.com/user-attachments/assets/5ed604f8-9aa4-4792-bae9-1b5f6e6b5717" />

<img width="292" height="561" alt="image" src="https://github.com/user-attachments/assets/74b25caf-5deb-4d2d-9d21-8b41a3a3abb8" />



---

## ⚙️ Como Executar o Projeto Localmente

### 1. Clonar o repositório

```bash
git clone https://github.com/PtiagoM/CRUD-Laravel.git
cd CRUD-Laravel
```

### 2. Instalar dependências

```bash
composer install
```

### 3. Configurar o arquivo `.env`

```env
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gerar chave

```bash
php artisan key:generate
```

### 5. Rodar migrações

```bash
php artisan migrate
```

### 6. Iniciar servidor

```bash
php artisan serve
```

---

### 1️⃣ Banco de Dados

<img width="1197" height="393" alt="image" src="https://github.com/user-attachments/assets/a7d0175c-3c37-4608-a506-be4f76bf0319" />


### 2️⃣ Middleware

<img width="983" height="545" alt="image" src="https://github.com/user-attachments/assets/a02a3ed0-8fd0-4607-88f2-5cee687a44c2" />


### 3️⃣ Login

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/1d8365ff-ffe0-4450-81c9-74d5dfda3f71" />


### 4️⃣ Home

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/ca0b960c-8507-48fb-bf17-9864220ffbf9" />


### 5️⃣ Consultar

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/86fb5624-728d-4e78-9466-a8a680edf49f" />

### 6️⃣ Adicionar

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/8c6d4f32-aa56-404a-84a1-c2609f359852" />

### 7️⃣ Listar

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/57e0217d-bb7b-45a6-91f4-8110d93935d9" />

---

## 👨‍🏫 Autor

- **Nome:** Tiago Pimentel Muniz  
