<?php

namespace adrian_dev\AnimatedCounter;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use adrian_dev\AnimatedCounter\Http\Livewire\AnimatedCounter;

class AnimatedCounterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'animated-counter');
        
        Livewire::component('animated-counter', AnimatedCounter::class);
    }
}