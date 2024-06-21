    @if (session('hapus'))
        <div class="alert alert-danger">
            {{ session('hapus') }}
        </div>
        @elseif (session('create'))
        <div class="alert alert-primary">
            {{ session('create') }}
        </div>
        @elseif (session('update'))
               <div class="alert alert-secondary">
            {{ session('update') }}
        </div>
    @endif
 @extends('layouts.main')
    @section('content')
  <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          <h3>Proyek</h3>
   <a href="{{ route('proyek.create') }}" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Number</th>
                    <th class="text-center">Nama Proyek</th>
                    <th class="text-center">Lokasi Proyek</th>
                    <th class="text-center">Tahun Proyek</th>
                    <th class="text-center">Ukuran Proyek</th>
                    <th class="text-center">Budget Proyek</th>
                    <th class="text-center">Deskripsi Proyek</th>
                    <th class="text-center">Options</th>
                    
                  </tr>
            </thead>
            <tbody>
     @foreach ($proyek as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_proyek }}</td>
                  <td>{{ $item->lokasi_proyek }}</td>
                  <td>{{ $item->tahun_proyek }}</td>
                  <td>{{ $item->size_proyek }}</td>
                  <td>{{ $item->budget_proyek }}</td>
                  <td>{{ $item->deskripsi_proyek }}</td>
                  <td>
                    <a  href="{{ route('proyek.edit', $item->id_proyek) }}" class="btn btn-warning btn-sm ">Edit</a>
                     <form class="d-inline" action="{{ route('proyek.destroy', $item->id_proyek) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm " onclick="return confirm('yakin?');" type="submit">Hapus</button>
                </form>
                                   
                  </td>
                  </tr>
      @endforeach
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>
@endsection