<div
    wire:init="increment"
    x-data="{
        oldValue: 0,
        newValue: 0,
        displayValue: '0'
    }"
    x-effect="
        oldValue = newValue;
        newValue = $wire.count;
        $nextTick(() => {
            let start = oldValue;
            let end = newValue;
            let duration = 1000; // 1 segundo
            let startTime = null;
            let maxUpdates = 60; // Limitar a 60 actualizaciones durante la duración
            let frameInterval = duration / maxUpdates; // Intervalo de actualización basado en la duración
            let lastUpdate = 0;
            
            function animate(currentTime) {
                if (startTime === null) startTime = currentTime;
                let timeElapsed = currentTime - startTime;
                let progress = Math.min(timeElapsed / duration, 1); // Asegurar que el progreso no supere 1
                let currentValue = Math.round(start + (end - start) * progress);
                
                if (timeElapsed - lastUpdate >= frameInterval) {
                    displayValue = currentValue.toLocaleString();
                    lastUpdate = timeElapsed;
                }
                
                if (progress < 1) {
                    requestAnimationFrame(animate);
                }
            }
            
            requestAnimationFrame(animate);
        });
    "
    @increment.window="$wire.increment()"
    class="text-4xl font-bold"
>
    <span x-text="displayValue"></span>
</div>
