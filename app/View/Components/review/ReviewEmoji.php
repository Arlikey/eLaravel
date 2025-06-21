<?php

namespace App\View\Components\review;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewEmoji extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $satisfaction)
    {
        $this->satisfaction = $satisfaction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.review.review-emoji');
    }
}
