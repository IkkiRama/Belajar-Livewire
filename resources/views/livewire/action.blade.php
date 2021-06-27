<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <button wire:click="addTwoNumber(12,0)">Sum</button><br>

    <textarea cols="30" rows="10" wire:keydown.enter="displayMessage($event.target.value)"></textarea>


    <form wire:submit.prevent="tambah()">
        <input type="number" name="num1" wire:model="num1">
        <input type="number" name="num2" wire:model="num2">
        <button type="submit">Tambah</button>
    </form>


    <hr>
    Hasil : {{$sum}} <br>
    Message : {{$message}} <br>
    Hasil Kalkulator : {{$hasil}} <br>
</div>
