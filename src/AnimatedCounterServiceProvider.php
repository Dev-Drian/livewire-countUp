<?php

namespace AdrianDev\AnimatedCounter;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use DevDrian\AnimatedCounter\Http\Livewire\AnimatedCounter as LivewireAnimatedCounter;

class AnimatedCounterServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'animated-counter');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/animated-counter'),
        ], 'animated-counter-views');

        Livewire::component('animated-counter', LivewireAnimatedCounter::class);
    }
}