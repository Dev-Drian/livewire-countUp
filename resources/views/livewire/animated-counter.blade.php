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
            
            function animate(currentTime) {
                if (startTime === null) startTime = currentTime;
                let timeElapsed = currentTime - startTime;
                let progress = timeElapsed / duration;
                let currentValue = Math.round(start + (end - start) * progress);
                
                displayValue = currentValue.toLocaleString();
                
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