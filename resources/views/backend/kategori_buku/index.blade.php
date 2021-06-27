@extends('template.konten')

@section('konteen')
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark">
                <h3 class="card-title">Kategori Buku </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Nama
                                            Kategori
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">
                                            Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kat as $kat_buku)

                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $loop->iteration }}</td>
                                        <td>{{ $kat_buku->nama }}</td>
                                        <td>
                                            <form action="{{ route('kategori-buku.destroy', $kat_buku->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kategori-buku.edit', $kat_buku->id) }}"
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
                <h3 class="card-title">Tambah Kategori Buku</h3>
            </div>
            <form method="post" action="{{ route('kategori-buku.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Buku</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Kategori">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection