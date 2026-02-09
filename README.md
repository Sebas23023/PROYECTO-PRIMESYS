# PROYECTO-PRIMESYS
# PRIMESYS - Catálogo de Soluciones de Software

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

**PRIMESYS** es una plataforma minimalista desarrollada en **Laravel** para la gestión y venta de productos de software.

---

## Guía de Instalación Rápida

Sigue estos pasos en tu terminal para poner el proyecto en marcha:

### 1. Instalar dependencias de PHP

```bash
composer install
```

### 2. Configurar variables de entorno

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Configurar la base de datos

Edita el archivo `.env` con tus credenciales:

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Luego ejecuta:

```bash
php artisan migrate --seed
```

### 4. Instalar dependencias de Node y compilar Tailwind

```bash
npm install
npm run dev
```

### 5. Levantar el servidor

```bash
php artisan serve
```

---

## Stack Tecnológico

- Laravel
- Tailwind CSS
- Blade Templates
- Eloquent ORM

---

## Estructura Principal

```
app/Http/Controllers/
resources/views/
routes/web.php
```
