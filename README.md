# **AnimatedCounter**

**Descripción:**

El paquete **AnimatedCounter** es una solución para agregar un contador animado a tus aplicaciones web, desarrollado con **Livewire** y **Alpine.js**. Este paquete permite integrar un contador que incrementa su valor de manera animada, proporcionando una experiencia de usuario más dinámica y atractiva en tu aplicación Laravel.

**Características:**

- **Contador Dinámico:** Incrementa el valor de un contador de manera suave y progresiva.
- **Configuración Personalizable:** Permite establecer el valor objetivo, el paso de incremento y la duración de la animación.
- **Integración con Livewire:** Utiliza Livewire para gestionar el valor del contador y actualizarlo en tiempo real.
- **Animación Suave:** Emplea Alpine.js para realizar una animación fluida del valor del contador, mejorando la experiencia visual del usuario.
- **Responsivo y Estilizable:** Compatible con las prácticas de diseño moderno y fácil de integrar en aplicaciones Laravel con Tailwind CSS o cualquier otro framework de CSS.

**Requisitos:**

- Laravel 8 o superior
- Livewire
- Alpine.js

**Instalación:**

Para instalar el paquete, usa Composer:

```bash
composer require adriandev/animated-counter
Después de instalar el paquete, sigue estos pasos para completar la configuración:

Publicar los activos del paquete (si es necesario):

php artisan vendor:publish --provider="AdrianDev\AnimatedCounter\AnimatedCounterServiceProvider"

Agregar el componente Livewire a tu vista Blade:

<div>
//target count  numero el cual aumenta 
    <livewire:animated-counter :targetCount="100" />
</div>
