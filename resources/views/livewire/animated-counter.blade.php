<div
    wire:init="increment"
    x-data="{
        oldValue: 0,
        newValue: 0,
        displayValue: '0',
        animationDuration: @entangle('animationDuration'),
        formatNumber(num) {
            return new Intl.NumberFormat().format(Math.round(num));
        },
        animateValue(start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = start + (end - start) * this.easeOutCubic(progress);
                this.displayValue = this.formatNumber(current);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        },
        easeOutCubic(t) {
            return 1 - Math.pow(1 - t, 3);
        }
    }"
    x-effect="
        if (newValue !== $wire.count) {
            oldValue = newValue;
            newValue = $wire.count;
            animateValue(oldValue, newValue, animationDuration);
        }
    "
    @increment.window="$wire.increment()"
    class="text-4xl font-bold"
>
    <span x-text="displayValue"></span>
</div>