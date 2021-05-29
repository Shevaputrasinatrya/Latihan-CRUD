@extends('layouts.master')

@section('content')
<div class="card">
<a href="{{route('kelas.tambah')}}" class="btn btn-primary w-25 m-3">add kelas</a>

    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($kelas as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->nama}}</td>
                            <td>
                            <a href="{{route('kelas.edit',['id'=>$item->id])}}" class="btn btn-warning">edit</a>
                            <form action="{{route('kelas.hapus', ['id' => $item->id])}}" method="POST">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger">hapus</button>
                            </form>
                              
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

@endsection