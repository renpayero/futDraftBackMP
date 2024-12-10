
# FutDraftApp MarketPlace

## Estructura del proyecto
futDraftBackMP/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── routes/
│   ├── api.php
│   └── web.php
├── resources/
├── vendor/
├── composer.json
└── .env.example

### Instalacion

1. Clonar repositorio


```bash
git clone https://github.com/usuario/futDraftFrontMP.git
```

2. Navegar al directorio del proyecto:
```bash
cd futDraftFrontMP
```

3. Instalar las dependencias:
```bash
composer install
```

4. Configurar variables de entorno:
Copie el archivo .env.example y renombrelo a .env configurando las variables necesarias.

5. Ejecucion:
```bash
php artisan serve
```


## Componentes Principales

Controladores
Ubicados en app/Http/Controllers:

- AuthController: Maneja la autenticación de usuarios (inicio de sesión y registro).
- CategoriaController: Gestiona las operaciones CRUD de categorías.
- ProductoController: Gestiona las operaciones CRUD de productos.
- PedidoController: Maneja la creación y gestión de pedidos.


## Modelos

Ubicados en app/Models:

- User: Modelo de usuarios.
- Categoria: Modelo de categorías.
- Producto: Modelo de productos.
- Pedido: Modelo de pedidos.
- PedidoProducto: Modelo intermedio entre pedidos y productos.

## Rutas y Endpoints

- Autenticación:
 POST /api/login: Inicio de sesión.
 
  POST /api/logout: Cierre de sesión.
  
  POST /api/registro: Registro de nuevos usuarios.
- Categorías:
GET /api/categorias: Listar categorías.

POST /api/categorias: Crear una categoría (requiere autenticación).

- Productos:
GET /api/productos: Listar productos.

POST /api/productos: Crear un producto (requiere autenticación).

- Pedidos:

POST /api/pedidos: Crear un pedido (requiere autenticación).

## Middleware

Ubicado en app/Http/Middleware:

AdminMiddleware: Verifica si el usuario autenticado es administrador para acceder a ciertas rutas.

## Base de Datos y Migraciones
Las migraciones están en database/migrations:

- Definen las tablas users, categorias, productos, pedidos, y pedido_productos.
- Permiten versionar y gestionar cambios en la estructura de la base de datos.

## Funcionamiento del Sistema
- Autenticación: Implementada con Laravel Sanctum para proteger las rutas y gestionar sesiones.
- Validaciones: Uso de form requests en app/Http/Requests para validar datos de entrada.
- Roles: Middleware para restringir acceso a rutas de administración.
- Relaciones: Modelos relacionados mediante Eloquent ORM para manejar las relaciones entre tablas.

## Recomendaciones
Se recomienda utilizar XAMPP para levantar la base de datos y el servidor backend necesario para el funcionamiento completo de la aplicación.
Asegúrese de configurar correctamente las variables de entorno y tener el backend en ejecución.