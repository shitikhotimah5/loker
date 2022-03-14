@extends('layouts.app')

@section('title', 'Loker')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Loker</li>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <a href="{{route('loker.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Loker</th>
                <th>Pendidikan</th>
                <th>Deskripsi</th>
                <th>Syarat</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($loker as $key => $item)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item -> name}}</td>
                <td>{{$item -> pendidikan}}</td>
                <td>{{$item -> deskripsi}}</td>
                <td>{{$item -> syarat}}</td>
                <td>{{$item -> start_date}}</td>
                <td>{{$item -> end_date}}</td>

                <td>
                    <form action="{{ route('loker.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('loker.edit', $item->id) }}" class=" btn btn-link text-info"><i
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
