# 🚀 API Laravel 12 — Docker + PostgreSQL + Nginx

Este projeto é uma API REST construída em **Laravel 12**, rodando em ambiente totalmente containerizado com **Docker**, utilizando:

- PHP 8.2 (FPM-Alpine)
- Laravel 12
- PostgreSQL 15
- Nginx (alpine)
- Docker Compose

A estrutura foi criada para fornecer um backend moderno, limpo, escalável e com tratamento de erros totalmente padronizado.

---

## 📁 Estrutura de Pastas

```
meu_backend/
├─ docker-compose.yml
├─ docker/
│  ├─ php/
│  │  └─ Dockerfile
│  └─ nginx/
│     └─ default.conf
└─ backend/
```

---

## 🐳 Subir o ambiente com Docker

Na raiz do projeto, execute:

```sh
docker compose up -d --build
```

Após subir, instale o Laravel dentro do container:

```sh
docker compose exec app composer create-project laravel/laravel .
```

Gere a key:

```sh
docker compose exec app php artisan key:generate
```

Rode as migrations:

```sh
docker compose exec app php artisan migrate
```

---

## 🛢️ Configuração do Banco (PostgreSQL)

O arquivo `.env` deve conter:

```
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=appdb
DB_USERNAME=appuser
DB_PASSWORD=secret
```

---

## 🌐 Acessar no navegador

Abra:

```
http://localhost:8080
```

---

## 🧩 Estrutura da API

O projeto utiliza:

- `ApiResponse` (respostas padronizadas)
- Requests personalizados (`Store` e `Update`)
- Controllers RESTful
- Exceptions globais em `bootstrap/app.php`

---

## 🔥 Tratamento de Erros — Padrão Profissional

O Laravel 12 foi configurado para interceptar:

### ✔️ 422 — Erros de validação  
### ✔️ 404 — Recurso não encontrado  
### ✔️ 500 — Erros SQL  
### ✔️ 500 — Erros genéricos  

Todas as respostas são retornadas em formato JSON via `ApiResponse`.

---

## 🏗️ Exemplo de Endpoints

### Listar empresas
```
GET /api/empresas
```

### Criar empresa
```
POST /api/empresas
```

### Ver empresa
```
GET /api/empresas/{id}
```

### Atualizar empresa
```
PUT /api/empresas/{id}
```

### Excluir empresa
```
DELETE /api/empresas/{id}
```

---

## 🛠️ Tecnologias Utilizadas

- Laravel 12
- PHP 8.2
- Docker / Docker Compose
- PostgreSQL 15
- Nginx

---

## 📜 Licença

Este projeto é livre para uso pessoal e estudos.
