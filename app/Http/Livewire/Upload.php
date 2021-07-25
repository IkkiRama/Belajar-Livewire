<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload as uploads;
use Livewire\WithFileUploads;

class Upload extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;

    public function resetForm()
    {
        $this->title = '';
        $this->filename = '';
    }



    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required|min:3',
            'filename' => 'required|image|max:10024',
        ]);
    }



    public function render()
    {
        $upload = uploads::all();
        return view('livewire.upload', compact(['upload']));
    }

    public function create()
    {

        $validation = $this->validate([
            'title' => 'required|min:3',
            'filename' => 'required|image|max:1024',
        ]);

        $filename = $this->filename->store('files', 'public');
        $validation['filename'] = $filename;
        uploads::create($validation);

        $this->resetForm();
        session()->flash('sukses', 'Data Berhasil Ditambahkan');

        $this->emit('uploadAdded');
        return redirect()->to('/upload');
    }
}
