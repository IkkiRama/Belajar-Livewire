<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateSiswaModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="">
                <input type="hidden" wire:model="idSiswa">
                <div class="form-group">
                    <label for="firstname">Nama Depan</label>

                    <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" wire:model="firstname">

                    @error('firstname') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="lastname">Nama Belakang</label>
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" wire:model="lastname">

                    @error('lastname') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">

                    @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" wire:model="phone">

                    @error('phone') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" name="tambah" wire:click.prevent="update()">Ubah Siswa</button>
            </form>
            </div>
        </div>
    </div>
</div>
