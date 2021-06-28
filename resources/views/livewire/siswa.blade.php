<div>
    @include('livewire.createSiswa')
    @include('livewire.updateSiswa')
    <section>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-md-12">
                    @if(Session::has('sukses'))
                        <div class="alert alert-success">
                            {{Session::get('sukses')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">

                            <h3>Daftar Users</h3>

                            <button type="button" class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#addSiswaModal">Tambah Siswa</button>

                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa as $key => $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->firstname}} {{$value->lastname}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>

                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateSiswaModal" wire:click.prevent="edit({{$value->id}})">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button type="button" class="btn btn-danger btn-sm hapusSiswa" wire:click.prevent="delete({{$value->id}})">
                                                <i class="fa fa-trash"></i>
                                            </button>


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$siswa->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        @if(Session::has('sukses'))
            swal("Sukses!", "{{Session::get('sukses')}}", "success");
        @endif
    </script>



</div>
