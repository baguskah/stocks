@extends('layout.table-style')

@section('content')


  @php
    $i = 1;
  @endphp

  <div class="container">

    <div class="row" style="margin-top:40px">
      <button type="button" data-toggle="modal" data-target="#tambah-emiten" class="btn btn-warning" style="margin-bottom:10px">
        Tambah Emiten
      </button>
      <table class="table hover">
        <thead>
          <th>No</th>
          <th>Emitens</th>
          <th>Visi</th>
          <th>Misi</th>
          <th>Deskripsi</th>
          <th>Syariah</th>
        </thead>
        <tbody>
          @foreach ($emitens as $emiten)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$emiten->kode}}</td>
              <td>{{$emiten->visi}}</td>
              <td>{{$emiten->misi}}</td>
              <td>{{$emiten->deskripsi}}</td>
              <td>{{$emiten->syariah}}</td>
            </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>


<form class="" action="{{route('emiten.create')}}" method="post">
  {{ csrf_field() }}
  <div class="modal fade" id="tambah-emiten" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="">Input Data Emiten</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Kode Emiten</label>
                <input name="kode" type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Nama Perusahaan</label>
                <input name="company_name" type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Visi</label>
                <textarea name="visi" class="form-control" ></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Misi</label>
                <textarea name="misi" class="form-control" ></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" ></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Syariah</label>
                <input type="checkbox" name="syariah" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>



@endsection
