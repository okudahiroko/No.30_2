{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blede.phpの@yield('title')に'予約画面'を埋め込む --}}
@section('title','予約画面')

{{-- admin.blede.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>予約画面</h2>
                <form action="{{ action('Admin\bookingController@add') }}" method="post" enctype="multipart/form-date">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach    
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2">チェックイン日</label>
                        <div class="col-md-2">
                            <input type="date" name="check_in_date" value="{{ old('check_in_date') }}"></input>    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">チェックアウト日</label>
                        <div class="col-md-2">
                            <input type="date" name="check_out_date" value="{{ old('check_out_date') }}"></input>    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="members" value="{{ old('members') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">お名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">電話番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="予約へ進む">
                </form>
            </div>
        </div>
    </div>
@endsection    