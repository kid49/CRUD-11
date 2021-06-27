@extends('template.konten')

@section('konteen')
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header bg-dark">
                <h3 class="card-title">Edit Kategori Buku</h3>
            </div>
            <form method="post" action="{{ route('kategori-buku.update', $kat->id) }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Buku</label>
                        <input type="text" class="form-control" name="nama" value="{{ $kat->nama }}"
                            placeholder="Masukkan Kategori">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark btn-sm">Edit Buku</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection