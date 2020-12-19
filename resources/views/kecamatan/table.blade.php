<table class="table">
  <thead class="thead-dark">
    <tr>
       <th>No</th> 
       <th>Nama</th> 
       <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      @foreach($kecamatan as $item)
      <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $item->nama }}</td>
           <td>
                <a href="{{ route ('kecamatan.show',$item->id) }}" class="btn btn-success">Tampil</a>
           </td>
      </tr>

      @endforeach
    </tbody>
</table>