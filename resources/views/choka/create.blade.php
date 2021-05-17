@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('choka.create') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12">
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-4 col-sm-4 d-flex align-items-center" style="padding-right: 0;">
                                       <label for="date" class="col-md-12 col-sm-12 scol-form-label text-md-right text-sm-right" style="padding: 0;margin-bottom: 0;">{{ __('日付') }}</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-4 col-sm-4 d-flex align-items-center" style="padding-right: 0;">
                                       <label for="title" class="col-md-12 col-sm-12 scol-form-label text-md-right text-sm-right" style="padding: 0;margin-bottom: 0;">{{ __('タイトル') }}</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>                                        
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-4 col-sm-4 d-flex align-items-center" style="padding-right: 0;">
                                       <label for="spot" class="col-md-12 col-sm-12 scol-form-label text-md-right text-sm-right" style="padding: 0;margin-bottom: 0;">{{ __('釣り場') }}</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <input id="spot" type="text" class="form-control @error('spot') is-invalid @enderror" name="spot" value="{{ old('spot') }}" required autocomplete="spot" autofocus>
                                        @error('spot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>     
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-4 col-sm-4 d-flex align-items-center" style="padding-right: 0;">
                                       <label for="fish" class="col-md-12 col-sm-12 scol-form-label text-md-right text-sm-right" style="padding: 0;margin-bottom: 0;">{{ __('魚種') }}</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <input id="fish" type="text" class="form-control @error('fish') is-invalid @enderror" name="fish" value="{{ old('fish') }}" required autocomplete="fish" autofocus>
                                        @error('fish')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>     
                                <div class="row" style="margin-bottom: 5px;">
                                    <div class="col-md-4 col-sm-4 d-flex align-items-center" style="padding-right: 0;">
                                       <label for="comment" class="col-md-12 col-sm-12 scol-form-label text-md-right text-sm-right" style="padding: 0;margin-bottom: 0;">{{ __('コメント') }}</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" required autocomplete="comment" autofocus>
                                        @error('comment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>     
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('釣果を記録する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
