<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Siswa as siswaa;

class Siswa extends Component
{
    public $idSiswa;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;


    public function resetForm()
    {
        $this->idSiswa = '';
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function render()
    {
        $siswa = siswaa::paginate(15);
        return view('livewire.siswa', compact(["siswa"]));
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required|min:3',
            'lastname' => '',
            'email' => 'required|email',
            'phone' => 'required|min:12',
        ]);
    }

    public function create()
    {
        $validation = $this->validate([
            'firstname' => 'required|min:3',
            'lastname' => '',
            'email' => 'required|email',
            'phone' => 'required|min:12'
        ]);

        siswaa::create($validation);
        $this->resetForm();
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->emit('studentAdded');
        return redirect()->to('/siswa');
    }



    public function edit($id)
    {
        $siswa = siswaa::where('id', 'LIKE', $id)->first();
        $this->idSiswa = $siswa->id;
        $this->firstname = $siswa->firstname;
        $this->lastname = $siswa->lastname;
        $this->email = $siswa->email;
        $this->phone = $siswa->phone;
    }

    public function update()
    {
        $validation = $this->validate([
            'firstname' => 'required|min:3',
            'lastname' => '',
            'email' => 'required|email',
            'phone' => 'required|min:12'
        ]);

        if ($this->idSiswa) {
            $siswa = siswaa::where('id', 'LIKE', $this->idSiswa)->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone
            ]);
        }

        $this->resetForm();
        $this->emit('studentUpdate');
        session()->flash('sukses', 'Data Berhasil Diubah');
        // return redirect()->to('/siswa');
    }


    public function delete($id)
    {
        siswaa::where('id', 'LIKE', $id)->delete();
        session()->flash('sukses', 'Data Berhasil Dihapus');
        return redirect()->to('/siswa');

    }

}
