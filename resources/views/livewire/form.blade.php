<div>
    {{-- Success is as dangerous as failure. --}}

    Name : <input type="text" name="name" wire:model.debounce.1000ms="name"> <br><br>

    Message : <br>
    <textarea name="message" id="message" cols="30" rows="10" wire:model.debounce.1000ms="message"></textarea> <br><br>

    Status : <br>
    Single <input type="radio" value="Single" wire:model.debounce.1000ms="status">
    Not Single <input type="radio" value="Not Single" wire:model.debounce.1000ms="status"> <br><br>

    Hobi : <br>
    Ngoding <input type="checkbox" value="Ngoding" wire:model.debounce.1000ms="hobi">
    Masak <input type="checkbox" value="Masak" wire:model.debounce.1000ms="hobi">
    Rebahan <input type="checkbox" value="Rebahan" wire:model.debounce.1000ms="hobi">
    Belajar <input type="checkbox" value="Belajar" wire:model.debounce.1000ms="hobi"><br><br>


    Jenis Kelamin : <br>
    <select wire:model.debounce.1000ms="kelamin">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>



    <hr>

    Name : {{$name}} <br>
    Message : {{$message}} <br>
    Status : {{$status}} <br>
    Hobi :
    <ul>
        @foreach($hobi as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>
    <br>

    Jenis Kelamin : {{$kelamin}} <br>
</div>
