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
                        {{-- 名前 --}}
                        <div class="form-group">
                            <label for="name">名前 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ old('name') }}">
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
                                <select name="color">
                                    <option value="" selected disabled>選択してください</option>
                                    <option value="レッド">レッド</option>
                                    <option value="ピンク">ピンク</option>
                                    <option value="オレンジ">オレンジ</option>
                                    <option value="イエロー">イエロー</option>
                                    <option value="ライトグリーン">ライトグリーン</option>
                                    <option value="グリーン">グリーン</option>
                                    <option value="ライトブルー">ライトブルー</option>
                                    <option value="ブルー">ブルー</option>
                                    <option value="パープル">パープル</option>
                                    <option value="ブラウン">ブラウン</option>
                                    <option value="ブラック">ブラック</option>
                                    <option value="グレー">グレー</option>
                                    <option value="ホワイト">ホワイト</option>
                                </select>
                            </div>
                        </div>
                        {{-- 詳細 --}}
                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明" value="{{ old('detail') }}">
                        </div>
                        {{-- 金額 --}}
                        <div class="form-group">
                            <label for="price">価格 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="number" class="form-control" id="detail" name="price" placeholder="金額" value="{{ old('price') }}">
                        </div>
                </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
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
