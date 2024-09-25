<?php

namespace DevDrian\AnimatedCounter\Http\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class AnimatedCounter extends Component
{
    public $count = 0;
    public $targetCount;
    public $step;
    public $isComplete = false;
    public $animationDuration = 2000; // milliseconds

    public function mount($targetCount = 100)
    {
        $this->count = 0;
        
        $this->targetCount = $targetCount;
        $this->calculateStep();
    }

    protected function calculateStep()
    {
        $difference = $this->targetCount - $this->count;
        $steps = 20; // Aim for about 20 steps
        $this->step = max(1, ceil($difference / $steps));
    }

    #[On('increment')]
    public function increment()
    {
        if ($this->isComplete) {
            return;
        }

        $this->count = min($this->count + $this->step, $this->targetCount);
        $this->calculateStep();

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