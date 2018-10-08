@extends('layout.table-style')

@section('content')


  @php
    $i = 1;
  @endphp

  <div class="container">

    <div class="row" style="margin-top:40px">
      <button type="button" data-toggle="modal" data-target="#tambah-emiten" class="btn btn-warning" style="margin-bottom:10px">
        Tambah Data
      </button>
      <table class="table hover">
        <thead>
          <th>No</th>
          <th>Emitens</th>
        </thead>
        <tbody>
          @foreach ($emitens as $emiten)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$emiten->kode}}</td>
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
                <label for="">Emiten</label>
                <input name="kode" type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Year</label>
                <input name="company_name" type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Period</label>
                <select name="period" class="form-control">
                  <option value="audit">Tahunan</option>
                  <option value="tw1">Semt 1</option>
                  <option value="tw2">Semt 2</option>
                  <option value="tw3">Semt 3</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Net Income</label>
                <input type="number" name="net_income" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Last Price</label>
                <input type="number" name="last_price" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Equity</label>
                <input type="number" name="equity" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Shares</label>
                <input type="number" name="shares" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">EPS</label>
                <input type="number" name="eps" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Market Cap</label>
                <input type="number" name="market_cap" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">PER</label>
                <input type="number" name="per" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">PBV</label>
                <input type="number" name="pbv" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">low</label>
                <input type="number" name="low" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">per_low</label>
                <input type="number" name="per_low" class="form-control" id="" placeholder="">
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
