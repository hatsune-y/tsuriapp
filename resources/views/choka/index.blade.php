@extends('layouts.app')

@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">釣果記録</div>
        <div class="card-body">
            <div class="form-group">
                <div>
                <a href="/choka/create">新しく釣果を記録する</a>
                </div>
                @foreach ($choka as $choka_row)
                <tr>
                    <div>
                        <tr>
                            <td> {{$choka_row->date }} </td>
                            <td> {{$choka_row->title }} </td>
                            <td> {{$choka_row->spot }} </td>
                            <td> {{$choka_row->fish }} </td>
                            <td> {{$choka_row->comment }} </td>
                            <a href="/choka/{{$choka_row->id}}">詳細を表示</a>
                        </tr>
                    </div>
                </tr>
                @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection