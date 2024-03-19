@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集</h1>
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
                <form method="POST" action="{{ route('items.update', $item) }}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        {{-- 名前 --}}
                        <div class="form-group">
                            <label for="name">名前 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ old('name', $item->name) }}">
                        </div>
                        {{-- カテゴリー --}}
                        <div class="form-group">
                            <label for="type">カテゴリー <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <div>
                                <select name="type">
                                    <option value="" disabled>選択してください</option>
                                    <option value="トップス" @if($item->type == 'トップス') selected @endif>トップス</option>
                                    <option value="ボトムス" @if($item->type == 'ボトムス') selected @endif>ボトムス</option>
                                    <option value="ワンピース" @if($item->type == 'ワンピース') selected @endif>ワンピース</option>
                                    <option value="アウター" @if($item->type == 'アウター') selected @endif>アウター</option>
                                    <option value="シューズ" @if($item->type == 'シューズ') selected @endif>シューズ</option>
                                    <option value="バッグ" @if($item->type == 'バッグ') selected @endif>バッグ</option>
                                    <option value="アクセサリー" @if($item->type == 'アクセサリー') selected @endif>アクセサリー</option>
                                </select>
                            </div>
                        </div>
                        {{-- カラー --}}
                        <div class="form-group">
                            <label for="color">カラー <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <div>
                                <select name="color">
                                    <option value="" disabled>選択してください</option>
                                    <option value="レッド" @if($item->color == 'レッド') selected @endif>レッド</option>
                                    <option value="ピンク" @if($item->color == 'ピンク') selected @endif>ピンク</option>
                                    <option value="オレンジ" @if($item->color == 'オレンジ') selected @endif>オレンジ</option>
                                    <option value="イエロー" @if($item->color == 'イエロー') selected @endif>イエロー</option>
                                    <option value="ライトグリーン" @if($item->color == 'ライトグリーン') selected @endif>ライトグリーン</option>
                                    <option value="グリーン" @if($item->color == 'グリーン') selected @endif>グリーン</option>
                                    <option value="ライトブルー" @if($item->color == 'ライトブルー') selected @endif>ライトブルー</option>
                                    <option value="ブルー" @if($item->color == 'ブルー') selected @endif>ブルー</option>
                                    <option value="パープル" @if($item->color == 'パープル') selected @endif>パープル</option>
                                    <option value="ブラウン" @if($item->color == 'ブラウン') selected @endif>ブラウン</option>
                                    <option value="ブラック" @if($item->color == 'ブラック') selected @endif>ブラック</option>
                                    <option value="グレー" @if($item->color == 'グレー') selected @endif>グレー</option>
                                    <option value="ホワイト" @if($item->color == 'ホワイト') selected @endif>ホワイト</option>
                                </select>
                                
                            </div>
                        </div>
                        {{-- 詳細 --}}
                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明" value="{{ old('detail', $item->detail) }}">
                        </div>
                        {{-- 価格 --}}
                        <div class="form-group">
                            <label for="price">価格 <span style="color: red; font-size: 12px;">※必須※</span></label>
                            <input type="number" class="form-control" id="detail" name="price" placeholder="金額" value="{{ old('type', $item->price) }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('items.destroy', $item) }}">
                    @method('DELETE')
                    @csrf
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">削除</button>
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
