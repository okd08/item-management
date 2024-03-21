@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品詳細/編集</h1>
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
            {{-- 更新メッセージ --}}
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
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
                                <input type="radio" id="red" name="color" value="レッド" @if($item->color == 'レッド') checked @endif>
                                <label for="red" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>レッド</label>
                                <input type="radio" id="pink" name="color" value="ピンク" @if($item->color == 'ピンク') checked @endif>
                                <label for="pink" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ピンク</label>
                                <input type="radio" id="orange" name="color" value="オレンジ" @if($item->color == 'オレンジ') checked @endif>
                                <label for="orange" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>オレンジ</label>
                                <input type="radio" id="yellow" name="color" value="イエロー" @if($item->color == 'イエロー') checked @endif>
                                <label for="yellow" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>イエロー</label>
                                <input type="radio" id="lightgreen" name="color" value="ライトグリーン" @if($item->color == 'ライトグリーン') checked @endif>
                                <label for="lightgreen" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="lightgreen" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ライトグリーン</label>
                                <input type="radio" id="green" name="color" value="グリーン" @if($item->color == 'グリーン') checked @endif>
                                <label for="green" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>グリーン</label>
                                <input type="radio" id="lightblue" name="color" value="ライトブルー" @if($item->color == 'ライトブルー') checked @endif>
                                <label for="lightblue" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="lightblue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ライトブルー</label>
                                <input type="radio" id="blue" name="color" value="ブルー" @if($item->color == 'ブルー') checked @endif>
                                <label for="blue" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブルー</label>
                                <input type="radio" id="purple" name="color" value="パープル" @if($item->color == 'パープル') checked @endif>
                                <label for="purple" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="purple" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>パープル</label>
                                <input type="radio" id="brown" name="color" value="ブラウン" @if($item->color == 'ブラウン') checked @endif>
                                <label for="brown" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="brown" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブラウン</label>
                                <input type="radio" id="black" name="color" value="ブラック" @if($item->color == 'ブラック') checked @endif>
                                <label for="black" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>ブラック</label>
                                <input type="radio" id="grey" name="color" value="グレー" @if($item->color == 'グレー') checked @endif>
                                <label for="grey" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>グレー</label>
                                <input type="radio" id="white" name="color" value="ホワイト" @if($item->color == 'ホワイト') checked @endif>
                                <label for="white" class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8" stroke="lightgray" stroke-width="1"/></svg>ホワイト</label>
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

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-lg">更新</button>
                    </div>
                </form>

                <form method="POST" action="{{ route('items.destroy', $item) }}" onsubmit="return confirmDelete()">
                    @method('DELETE')
                    @csrf
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-danger">削除</button>
                    </div>
                </form>
                <script>
                    function confirmDelete() {
                        return confirm("本当に削除しますか？");
                    }
                </script>
                
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop