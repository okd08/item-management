@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品登録</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- 戻るボタン --}}
            <div class="text-right">
                <a href="{{ route('items.index') }}">&laquo戻る</a>
            </div>

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        {{-- 商品名 --}}
                        <div class="form-group">
                            <label for="name">商品名 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="商品名を入力" value="{{ old('name') }}">
                        </div>
                        {{-- カテゴリ― --}}
                        <div class="form-group">
                            <label for="type">カテゴリー <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <div>
                                <select name="type">
                                    <option value="" selected disabled>選択してください</option>
                                    <option value="トップス">トップス</option>
                                    <option value="ボトムス">ボトムス</option>
                                    <option value="ワンピース">ワンピース</option>
                                    <option value="アウター">アウター</option>
                                    <option value="シューズ">シューズ</option>
                                    <option value="バッグ">バッグ</option>
                                    <option value="アクセサリー">アクセサリー</option>
                                </select>
                            </div>
                        </div>
                        {{-- カラー --}}
                        <div class="form-group">
                            <label for="color">カラー <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <div>
                                <input type="radio" id="red" name="color" value="レッド">
                                <label for="red" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>レッド</label>
                                <input type="radio" id="pink" name="color" value="ピンク">
                                <label for="pink" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ピンク</label>
                                <input type="radio" id="orange" name="color" value="オレンジ">
                                <label for="orange" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>オレンジ</label>
                                <input type="radio" id="yellow" name="color" value="イエロー">
                                <label for="yellow" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>イエロー</label>
                                <input type="radio" id="lightgreen" name="color" value="ライトグリーン">
                                <label for="lightgreen" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="lightgreen" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ライトグリーン</label>
                                <input type="radio" id="green" name="color" value="グリーン">
                                <label for="green" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>グリーン</label>
                                <input type="radio" id="lightblue" name="color" value="ライトブルー">
                                <label for="lightblue" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="lightblue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ライトブルー</label>
                                <input type="radio" id="blue" name="color" value="ブルー">
                                <label for="blue" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブルー</label>
                                <input type="radio" id="purple" name="color" value="パープル">
                                <label for="purple" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="purple" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>パープル</label>
                                <input type="radio" id="brown" name="color" value="ブラウン">
                                <label for="brown" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="brown" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブラウン</label>
                                <input type="radio" id="black" name="color" value="ブラック">
                                <label for="black" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブラック</label>
                                <input type="radio" id="grey" name="color" value="グレー">
                                <label for="grey" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>グレー</label>
                                <input type="radio" id="white" name="color" value="ホワイト">
                                <label for="white" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8" stroke="lightgray" stroke-width="1"/></svg>ホワイト</label>
                            </div>
                        </div>
                        {{-- 詳細 --}}
                        <div class="form-group">
                            <label for="detail">商品詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明を入力" value="{{ old('detail') }}">
                        </div>
                        {{-- 金額 --}}
                        <div class="form-group">
                            <label for="price">価格 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="number" class="form-control" id="detail" name="price" placeholder="価格を入力" value="{{ old('price') }}">
                        </div>
                </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-lg">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
