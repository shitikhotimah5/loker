@extends('layouts.app')

@section('title', 'Pelamar')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Pelamar</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <a href="{{route('pelamar.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>User ID</th>
                <th>Nama Pelamar</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pendidikan</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>File</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pelamar as $key => $item)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item -> user_id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> tempat_lahir}}</td>
                <td>{{$item -> tgl_lahir}}</td>
                <td>{{$item -> alamat}}</td>
                <td>{{$item -> pendidikan}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> no_hp}}</td>
                <td>{{$item -> file}}</td>

                <td>
                    <form action="{{ route('pelamar.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('pelamar.edit', $item->id) }}" class=" btn btn-link text-info"><i
                                class="fas fa-edit"></i></a>
                        <button class="btn btn-link text-danger"
                            onclick="return confirm('Yakin ingin menghapus data?')"><i
                                class="fas fa-trash"></i></button>
                    </form>
              </tr>

              @endforeach ()
            </tbody>
          </table>

    </div>
  </div>



  @endsection
