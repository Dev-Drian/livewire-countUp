<?php

namespace AdrianDev\AnimatedCounter;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
// use adrian_dev\AnimatedCounter\Http\Livewire\AnimatedCounter;
use AdrianDev\AnimatedCounter\Http\Livewire\AnimatedCounter as LivewireAnimatedCounter;

class AnimatedCounterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'animated-counter');
        
        Livewire::component('animated-counter', LivewireAnimatedCounter::class);
    }
}