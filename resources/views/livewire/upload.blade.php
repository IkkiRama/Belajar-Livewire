<div>

    @include('livewire.uploadFoto')
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
                            Upload File
                            <br>

                            <button type="button" class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#addUploadModal">Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($upload as $key => $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->title}}</td>
                                        <td><img src="{{asset("../storage/app/public/files/$value->filename")}}" alt=""></td>
                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm hapusSiswa" wire:click.prevent="delete({{$value->id}})">
                                                <i class="fa fa-trash"></i>
                                            </button>


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

