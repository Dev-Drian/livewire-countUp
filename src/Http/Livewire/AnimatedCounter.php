<?php 

namespace DevDrian\AnimatedCounter\Http\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class AnimatedCounter extends Component
{
    public $count = 0; // Valor actual del contador
    public $targetCount; // Valor objetivo al que se desea llegar con el contador
    public $step = 50; // Paso o incremento en cada iteración
    public $isComplete = false; // Indicador de si el contador ha alcanzado el valor objetivo

    /**
     * Método de inicialización del componente.
     * Se establece el valor inicial del contador a 0 y se asigna el valor objetivo.
     *
     * @param int $targetCount Valor objetivo del contador (por defecto es 100)
     */
    public function mount($targetCount = 100)
    {
        $this->count = 0; // Inicia el contador en 0
        $this->targetCount = $targetCount; // Asigna el valor objetivo
    }

    /**
     * Método para incrementar el contador.
     * Si el contador aún no ha alcanzado el valor objetivo, se sigue incrementando.
     * Al alcanzar el valor objetivo, se detiene.
     */
    #[On('increment')]
    public function increment()
    {
        // Si el contador ya alcanzó el valor objetivo, se detiene
        if ($this->isComplete) {
            return;
        }

        // Incrementa el contador en el valor del paso, sin sobrepasar el valor objetivo
        $this->count = min($this->count + $this->step, $this->targetCount);

        // Si aún no se ha alcanzado el valor objetivo, sigue incrementando
        if ($this->count < $this->targetCount) {
            $this->dispatch('increment');
        } else {
            // Si se alcanza el valor objetivo, se marca como completado
            $this->isComplete = true;
        }
    }

    /**
     * Renderiza la vista del componente.
     *
     * @return \Illuminate\View\View Vista del componente animado del contador
     */
    public function render()
    {
        return view('animated-counter::livewire.animated-counter');
    }
}
