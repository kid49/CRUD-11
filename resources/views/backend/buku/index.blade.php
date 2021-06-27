@extends('template.konten')

@section('konteen')
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title">Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1"
                                class="table table-bordered table-responsive nowrap table-striped dataTable dtr-inline"
                                role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Isbn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Judul
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Kategori Buku
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Penerbit
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Pengarang
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Tahun Terbit
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">
                                            Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $bk)

                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                                        <td>{{ $bk->isbn }}</td>
                                        <td>{{ $bk->judul }}</td>
                                        <td>{{ $bk->kategori->nama }}</td>
                                        <td>{{ $bk->penerbit }}</td>
                                        <td>{{ $bk->pengarang }}</td>
                                        <td>{{ $bk->tahun_terbit }}</td>
                                        <td>
                                            <form action="{{ route('buku.destroy', $bk->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('buku.edit', $bk->id) }}"
                                                    class="btn btn-outline-info btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                    Edit</a>
                                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus?');>
                                                    <i class=" fa fa-trash"></i> Hapus</button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-4">
        <div class="card ">
            <div class="card-header bg-dark">
                <h3 class="card-title">Tambah Buku</h3>
            </div>
            <form method="post" action="{{ route('buku.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isbn</label>
                        <input type="number" class=" form-control" name="isbn" "
                            placeholder=" 999-9999-99-9">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Terbit</label>
                        <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Buku</label>
                        <select class="js-example-basic-single form-control" name="kategori_id">
                            @foreach ($kat as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
                    </div>
            </form>
        </div>
    </div>
</div>


@endsection
