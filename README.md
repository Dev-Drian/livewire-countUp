# 🌟 **Livewire CountUp** 🌟

**Descripción:**

El paquete **Livewire CountUp** es una solución moderna y poderosa para integrar contadores animados en tus aplicaciones Laravel. Usando la magia de **Livewire** y **Alpine.js**, puedes crear contadores que incrementen de forma dinámica y visualmente atractiva. 🎉

---

### ✨ **Características:**

- 🎯 **Incremento Animado:** Visualiza valores que cambian progresivamente con fluidez.
- ⚡ **Interactividad en Tiempo Real:** Perfecto para aplicaciones dinámicas que necesitan actualizaciones instantáneas.
- 🛠️ **Personalización Extensa:** Configura el valor inicial, objetivo, velocidad de incremento y duración de la animación.
- 🌐 **Compatibilidad Estilística:** Fácil de integrar con Tailwind CSS u otros frameworks de diseño.
- 🧩 **Uso de Claves (`key`):** Ideal para escenarios interactivos, asegurando actualizaciones sin errores.

---

### 🛠️ **Requisitos:**

- Laravel 8 o superior.  
- Livewire (v3 o superior recomendado).  
- Alpine.js.

---

### 🚀 **Instalación:**

1. Instala el paquete utilizando Composer:

   ```bash
   composer require devdrian/livewire-countup
   ```

2. ¡Eso es todo! No se requiere configuración adicional. Comienza a usarlo directamente en tus vistas Blade. 🎉

---

### 🧑‍💻 **Uso del Paquete**

#### 🔹 **Ejemplo Básico**

Añade un contador que alcance un valor objetivo de forma animada:

```blade
<div>
    <livewire:countup :targetCount="500" />
</div>
```

#### 🔹 **Ejemplo con Clave (`key`)**

Para garantizar que el contador se actualice correctamente cuando cambien los datos dinámicos, usa una clave única (`key`):

```blade
<div>
    <livewire:countup 
        :targetCount="$totalCursos->count()" 
        :key="'countup-counter-' . $totalCursos->count()" 
    />
</div>
```

🔑 **Ventaja:** Evita errores y asegura que el componente se actualice de forma reactiva.

### 🎨 **Estilos con Tailwind CSS**

Integra fácilmente el contador en tus diseños estilizados:

```blade
<div class="p-4 bg-gray-50 rounded-md shadow-md">
    <h3 class="text-lg font-bold text-blue-500">Total Cursos:</h3>
    <livewire:countup 
        :targetCount="$totalCursos->count()" 
        :key="'styled-counter-' . $totalCursos->count()" 
        class="text-3xl font-semibold text-green-600"
    />
</div>
```

---

### ❓ **Preguntas Frecuentes**

1. **¿Por qué usar una `key`?**  
   🔑 Usar claves asegura que los componentes dinámicos se reinicien correctamente cuando cambien las propiedades, evitando comportamientos inesperados.

2. **¿Es compatible con Laravel 9 y 10?**  
   ✅ Sí, funciona perfectamente con Laravel 8 y versiones superiores.

3. **¿Necesito Tailwind CSS?**  
   🌀 No es obligatorio. Puedes personalizar los estilos con cualquier framework CSS o usar CSS puro.

---

### 📜 **Licencia**

Este paquete está licenciado bajo la [MIT License](LICENSE).
