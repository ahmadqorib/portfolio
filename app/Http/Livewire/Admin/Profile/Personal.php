<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Personal extends Component
{
    use WithFileUploads;

    public $id_profile, $name, $description, $photo;

    public function render()
    {
        $profile = Profile::first();
        if(!is_null($profile)){
            $this->id_profile = $profile->id;
            $this->name = $profile->name;
            $this->description = $profile->description;
        }

        return view('admin.components.profile.personal', [
            'profile' => $profile
        ] );
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

        $fileName = (string) Str::uuid().'.'.$this->photo->extension();

        $this->photo->storeAs('profile', $fileName, 'public');

        $save = Profile::updateOrCreate(
            ['id' => $this->id_profile],
            [
                'name' => $this->name,
                'description' => $this->description,
                'photo' => $fileName
            ]
        );
    }
}
