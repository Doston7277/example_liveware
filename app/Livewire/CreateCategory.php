<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public function save() 
    {
        $category = Category::create([
            'name' => $this->name
        ]);
 
        return redirect()->to('/categories')
             ->with('status', 'Category created!');
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}
