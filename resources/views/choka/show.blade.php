@extends('layouts.app')

@section('content')
<div class="container m-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">釣果詳細</div>
        <div class="card-body">
            <div class="form-group">
                <table class="table table-striped">
                    <tr>
                      <th>id</th>
                      <td>{{ $choka->id }}</td>
                    </tr>
                    <tr>
                      <th>日付</th>
                      <td>{{ $choka->date }}</td>
                    </tr>
                    <tr>
                      <th>タイトル</th>
                      <td>{{ $choka->title }}</td>
                    </tr>
                    <tr>
                      <th>場所</th>
                      <td>{{ $choka->spot }}</td>
                    </tr>
                    <tr>
                      <th>魚種</th>
                      <td>{{ $choka->fish }}</td>
                    </tr>
                    <tr>
                      <th>コメント</th>
                      <td>{{ $choka->comment }}</td>
                    </tr>
                    <a href="/choka">一覧に戻る</a>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection