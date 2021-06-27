@extends('template.konten')

@section('konteen')

<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $buku->count() }}</h3>

                <p>Data Buku</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="{{ route('buku.index') }}" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $kat->count() }}</h3>

                <p>Data Kategori Buku</p>
            </div>
            <div class="icon">
                <i class="fa fa-list-alt"></i>
            </div>
            <a href="{{ route('kategori-buku.index') }}" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>

                <p>Data Users</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>

@endsection
