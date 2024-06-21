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
          <h3>Gambar Proyek</h3>
   <a href="{{ route('gambarProyek.create') }}" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Number</th>
                    <th class="text-center">Nama Proyek</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Options</th>
                    
                  </tr>
            </thead>
            <tbody>
     @foreach ($gambarProyek as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->proyek->nama_proyek }}</td>
                 <td><img src="{{ asset('images') }}/{{ $item->gambar_proyek }}" alt="" width="100px" height="100px"></td>
                  <td>
                     <form action="{{ route('gambarProyek.destroy', $item->id_gambar_proyek) }}" method="post">
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