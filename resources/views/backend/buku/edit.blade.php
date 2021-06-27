@extends('template.konten')

@section('konteen')
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header bg-dark">
                <h3 class="card-title">Edit Buku</h3>
            </div>
            <form method="post" action="{{ route('buku.update', $buku->id) }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Isbn</label>
                            <input type="number" class=" form-control" name="isbn" placeholder=" 999-9999-99-9"
                                value="{{ $buku->isbn }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Kategori"
                                value="{{ $buku->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Kategori"
                                value="{{ $buku->penerbit }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Pengarang"
                                value="{{ $buku->pengarang }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit"
                                placeholder="Masukkan Tahun Terbit" value="{{ $buku->tahun_terbit }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kategori Buku</label>
                            <select class="js-example-basic-single form-control" name="kategori_id">
                                @foreach ($kat as $k)
                                    <option value="{{ $k->id }}" @if($buku->kategori_id == $k->id) selected
                                        @endif>{{$k->nama}}</option>
                                @endforeach
                            </select>

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
