<?php

namespace TuNombre\AnimatedCounter\Http\Livewire;

use Livewire\Component;

class AnimatedCounter extends Component
{
    public $count = 0;
    public $targetCount;
    public $step = 50;
    public $isComplete = false;

    public function mount($targetCount = 100)
    {
        $this->count = 0;
        $this->targetCount = $targetCount;
    }

    #[On('increment')]
    public function increment()
    {
        if ($this->isComplete) {
            return;
        }

        $this->count = min($this->count + $this->step, $this->targetCount);

        if ($this->count < $this->targetCount) {
            $this->dispatch('increment');
        } else {
            $this->isComplete = true;
        }
    }

    public function render()
    {
        return view('animated-counter::livewire.animated-counter');
    }
}