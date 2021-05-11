@extends('layouts.app')

@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">釣果記録</div>
        <div class="card-body">
            <div class="form-group">
                @foreach ($choka as $choka_row)
                <tr>
                    <label for="name">
                        タイトル
                    </label>
                    <div>
                        <td>{{ $choka_row->title }}</td>
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