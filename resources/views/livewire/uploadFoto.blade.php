<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addUploadModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="">

                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" wire:model="title">


                        @error('title') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Filename">Filename</label>
                        <input type="file" id="Filename" class="form-control-file @error('filename') is-invalid @enderror" wire:model="filename">


                        @error('filename') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tambah" wire:click.prevent="create()">Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
</div>
