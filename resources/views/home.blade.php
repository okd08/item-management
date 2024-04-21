@extends('adminlte::page')

@section('title', 'ホーム')

@section('content_header')
    <h1>ホーム</h1>
    <div class="text-center mt-5">
        <div class="btn-group mt-5">
            <a class="btn btn-secondary" href="#" role="button">編集前のシステム</a>
        </div>
        <br>
        <div class="btn-group mt-3">
            <a class="btn btn-primary btn-lg" href="{{ route('items.index') }}" role="button">編集後のシステム</a>
        </div>
    </div>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
