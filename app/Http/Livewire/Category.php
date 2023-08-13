<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Categories;

class Category extends Component
{
    public function render()
    {
        $category=Categories::orderByDesc('id')->get();
        return view('livewire.category',compact('category'));
    }
}
