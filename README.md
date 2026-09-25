# 🧾 PHP MVC PDF Generator (SaaS Billing System)

Un generador de facturas en PDF construido desde cero utilizando **PHP puro** (Vanilla PHP). Este proyecto demuestra la implementación de una arquitectura **MVC (Modelo-Vista-Controlador)** sin depender de frameworks pesados, enfocado en el rendimiento y las buenas prácticas de desarrollo.

## 🚀 Características

*   **Arquitectura MVC estricta:** Separación clara entre la lógica de negocio, el acceso a datos y las interfaces.
*   **Generación de PDFs:** Uso de `dompdf` para convertir plantillas HTML dinámicas en documentos PDF descargables o visualizables.
*   **Enrutamiento personalizado:** Front Controller integrado a través de `index.php` gestionando peticiones HTTP limpias.
*   **Autocarga PSR-4:** Gestión de dependencias y carga automática de clases mediante Composer.
*   **Seguridad:** Único punto de entrada público, ocultando el código fuente y las configuraciones del servidor.

## 🛠️ Stack Tecnológico

*   **Backend:** PHP 8+
*   **Base de Datos:** MySQL / MariaDB (vía PDO) *(En desarrollo)*
*   **Gestor de Dependencias:** Composer
*   **Librerías principales:** 
    *   `dompdf/dompdf` (Generación de PDF)

## 📁 Estructura del Proyecto

El proyecto sigue una estructura de directorios estándar de la industria para garantizar la escalabilidad y seguridad:

```text
/
├── app/                    # Lógica de la aplicación
│   ├── Controllers/        # Controladores que manejan las peticiones HTTP
│   ├── Models/             # Modelos para la interacción con la base de datos
│   └── Views/              # Plantillas HTML/PHP (Ej. factura.php)
├── config/                 # Configuraciones globales (DB, variables de entorno)
├── public/                 # Directorio expuesto al servidor web (Document Root)
│   ├── .htaccess           # Reglas de reescritura para el Front Controller
│   └── index.php           # Front Controller (Punto de entrada único)
└── composer.json           # Definición de dependencias y configuración PSR-4
