<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3>
                        </div>

                        <div class="card-body">
                            <form wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="name">Name</label>

                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" wire:model="name">


                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">

                                     @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>

                                    <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" wire:model="phone">

                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pesan">Message</label>

                                    <textarea name="pesan" id="pesan" cols="10" rows="6" class="form-control @error('pesan') is-invalid @enderror" wire:model="pesan"></textarea>

                                    @error('pesan')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
