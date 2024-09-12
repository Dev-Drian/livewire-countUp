AnimatedCounter

Descripción:

El paquete AnimatedCounter es una solución para agregar un contador animado a tus aplicaciones web, desarrollado con Livewire y Alpine.js. 
Este paquete permite integrar un contador que incrementa su valor de manera animada, proporcionando una experiencia de usuario más dinámica y atractiva en tu aplicación Laravel.

Características:

Contador Dinámico: Incrementa el valor de un contador de manera suave y progresiva.
Configuración Personalizable: Permite establecer el valor objetivo, el paso de incremento y la duración de la animación.
Integración con Livewire: Utiliza Livewire para gestionar el valor del contador y actualizarlo en tiempo real.
Animación Suave: Emplea Alpine.js para realizar una animación fluida del valor del contador, mejorando la experiencia visual del usuario.
Responsivo y Estilizable: Compatible con las prácticas de diseño moderno y fácil de integrar en aplicaciones Laravel con Tailwind CSS o cualquier otro framework de CSS.
Requisitos:

Laravel 8 o superior
Livewire
Alpine.js
Instalación:

Para instalar el paquete, usa Composer:

bash
Copiar código
composer require adriandev/animated-counter
Configuración:

Publicar los activos del paquete (si es necesario):

bash
Copiar código
php artisan vendor:publish --provider="AdrianDev\AnimatedCounter\AnimatedCounterServiceProvider"
Incorporar el componente en tu vista Blade:

html
Copiar código
<livewire:animated-counter :targetCount="100" />
Personaliza el estilo y la animación según tus necesidades.

Uso:

En el Componente Livewire:

Configura el componente para que se encargue de la lógica del contador y actualiza el valor en tiempo real.

En la Vista Blade:

Utiliza el componente livewire:animated-counter en la vista Blade donde desees mostrar el contador animado.

Ejemplo de Implementación:

html
Copiar código
<div>
    <livewire:animated-counter :targetCount="200" />
</div>
Contribuciones:

Las contribuciones al paquete son bienvenidas. Por favor, sigue las pautas de contribución en el repositorio del proyecto para enviar mejoras o reportar problemas.

Licencia:

Este proyecto está licenciado bajo la MIT License.
