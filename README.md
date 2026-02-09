# PROYECTO-PRIMESYS
## 🚀 Instalación y Configuración

Sigue estos pasos para correr el proyecto localmente:

1. **Clonar el repositorio:**
   ```bash
   git clone [https://github.com/tu-usuario/primesys.git](https://github.com/tu-usuario/primesys.git)
   cd primesys
Instalar dependencias de PHP:

Bash

composer install
Configurar el entorno:

Bash

cp .env.example .env
php artisan key:generate
Configurar la base de datos:
Edita tu archivo .env con tus credenciales y corre las migraciones:

Bash

php artisan migrate --seed
Lanzar el servidor:

Bash

php artisan serve
