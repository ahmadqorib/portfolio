<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\Profile;
use Livewire\Component;

class Contact extends Component
{
    public $name, $description, $photo;

    public function render()
    {
        return view('admin.components.profile.contact');
    }

    protected function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();
    }
}
