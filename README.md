<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Creado por Santos

<h1 align="center">¡Hola chicos! Este en una guia de como funciona este sistema! 👁️</h1>
<div align="center">
  <a href="https:                 
    <img src="/web/static/img/screenshots/homepage.gif" height=360 />
  </a>
</div>

## Introducción
Sistema ventas es una herramienta poderosa que proporciona información completa, valiosa sobre la ventas de productos de una tienda
                                                                                                                                                                                                                                                               

| El login al iniciar | Una vez dentor del sistema |
| ----------- | ----------- |
|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20222723.png?raw=true" />|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20222753.png?raw=true" />|

| Una de las categorias | Descripcion de como se be las categorias |
| ----------- | ----------- |
|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20222808.png?raw=true" />|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20222840.png?raw=true" />|

| Como agregar una nueva categoria ,etc  | Despues de registrar como se agrega |
| ----------- | ----------- |
|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20222940.png?raw=true" />|<img src="https://github.com/scorpionGR-13/abc/blob/main/Captura%20de%20pantalla%202025-10-21%20223059.png?raw=true" />|

## ✅ Requisitos nesesarios


1. **XAMPP** – Servidor local con Apache y MySQL.
2. **Composer** – Gestor de dependencias de PHP (necesario para instalar Laravel).
3. **Laravel** – El framework que vamos a instalar.
4. **Editor de código** (opcional, pero recomendable: Visual Studio Code).
5. **Configuración del entorno** para que todo funcione bien.

---

## 🔧 PASO 1: Instalar XAMPP

### ¿Qué es XAMPP?

XAMPP es un paquete que incluye:

* Apache (servidor web)
* MySQL (base de datos)
* PHP (lenguaje que usa Laravel)
* phpMyAdmin (gestión visual de base de datos)

### ¿Cómo instalar XAMPP?

1. Ve a: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
2. Descarga la versión para tu sistema operativo (Windows/Linux/Mac).
3. Instálalo con los pasos por defecto.
4. Abre **XAMPP Control Panel** y enciende:

   * `Apache`
   * `MySQL`

> ⚠️ Asegúrate de que ningún otro programa esté usando el puerto 80 (como Skype).

---

## 🔧 PASO 2: Instalar Composer

### ¿Qué es Composer?

Es un gestor de dependencias de PHP. Laravel se instala con Composer.

### ¿Cómo instalar Composer?

1. Ve a: [https://getcomposer.org/](https://getcomposer.org/)
2. Descarga el instalador para Windows: `Composer-Setup.exe`.
3. Durante la instalación, asegúrate de que detecte la ruta correcta a PHP:

   ```
   C:\xampp\php\php.exe
   ```
4. Finaliza la instalación.

### Verifica que esté instalado:

Abre la terminal o consola (cmd) y escribe:

```bash
composer -v
```

Deberías ver la versión instalada.

---

## 🔧 PASO 3: Crear un nuevo proyecto Laravel

### Opciones:

#### Opción A: Instalar Laravel globalmente (opcional)

```bash
composer global require laravel/installer
```

Esto instala el comando `laravel`.

**Agrega Composer global a la PATH**:

* Agrega esta ruta a las variables de entorno del sistema:

```
C:\Users\TU_USUARIO\AppData\Roaming\Composer\vendor\bin
```

---

### Crear el proyecto Laravel

Navega a la carpeta donde quieres crear tu proyecto:

```bash
cd C:\xampp\htdocs
```

#### Opción A: Usando el instalador de Laravel

```bash
laravel new nombre-del-proyecto
```

#### Opción B: Usando Composer directamente (más común)

```bash
composer create-project laravel/laravel nombre-del-proyecto
```

Esto instalará Laravel en `C:\xampp\htdocs\nombre-del-proyecto`.

---

## 🔧 PASO 4: Configurar Laravel

### 1. Crea una base de datos en MySQL

1. Abre [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Crea una nueva base de datos, por ejemplo: `laravel_db`

### 2. Configura `.env` en tu proyecto Laravel

Ve al archivo `.env` en la raíz del proyecto y edita esto:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

(Usuario root y sin contraseña es el valor por defecto de XAMPP).

---

## 🔧 PASO 5: Levantar el servidor Laravel

Desde la carpeta del proyecto:

```bash
cd C:\xampp\htdocs\nombre-del-proyecto
php artisan serve
```

Esto mostrará algo como:

```
Starting Laravel development server: http://127.0.0.1:8000
```

Abre eso en el navegador.

---

## ✅ Resumen de comandos básicos

```bash
cd C:\xampp\htdocs
composer create-project laravel/laravel mi-proyecto
cd mi-proyecto
php artisan serve
```

---

## 🛠️ Recomendaciones adicionales

* Instala **Visual Studio Code (VS Code)** para trabajar cómodamente:
  [https://code.visualstudio.com/](https://code.visualstudio.com/)
* Instala extensiones útiles como:

  * Laravel Snippets
  * PHP Intelephense
  * Laravel Blade Snippets
* Puedes usar también **Postman** para probar APIs.
* Usa el comando `php artisan` para ver todas las herramientas de Laravel.

## ✅ PASOS PARA COPIARTE ESTE PROYECTO

### 1. **Copia la URL del repositorio**

* Ve al repositorio en GitHub
* Haz clic en el botón verde `<> Code`
* Copia la URL (por ejemplo):

  ```
  https://github.com/usuario/proyecto.git
  ```

---

### 2. **Abre una terminal (cmd, Git Bash o VS Code)**

Navega a la carpeta donde quieras guardar el proyecto:

```bash
cd C:\xampp\htdocs
```

---

### 3. **Clona el repositorio**

```bash
git clone https://github.com/usuario/proyecto.git
```

---

### 4. **Entra a la carpeta del proyecto**

```bash
cd proyecto
```

---

### 5. **Instala dependencias de Laravel**

```bash
composer install
```

---

### 6. **Copia el archivo `.env`**

```bash
cp .env.example .env
```

> En Windows, puedes usar:

```bash
copy .env.example .env
```

---

### 7. **Genera la clave de Laravel**

```bash
php artisan key:generate
```

---

### 8. **Configura la base de datos**

Edita el archivo `.env` y coloca los datos de tu base de datos local (phpMyAdmin):

```env
DB_DATABASE=nombre_base
DB_USERNAME=root
DB_PASSWORD=
```

Crea esa base de datos en [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

---

### 9. **Ejecuta migraciones (si el proyecto tiene)**

```bash
php artisan migrate
```

---

### 10. **Levanta el servidor local**

```bash
php artisan serve
```

---

### 11. **Abre el proyecto en el navegador**

```
http://127.0.0.1:8000
```
