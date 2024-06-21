@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Proyek</h3>
           <form action="{{ route('proyek.store') }}" method="post">
        @csrf
            <div class="mb-3">
                <input type="text" name="nama_proyek" placeholder=" Nama Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="lokasi_proyek" placeholder=" Lokasi Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="date" name="tahun_proyek" placeholder=" Tahun Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="size_proyek" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="budget_proyek" placeholder=" Budget Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="deskripsi_proyek" placeholder=" Deskripsi Proyek" class="form-control" required>
            </div>
            <a href="/proyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection