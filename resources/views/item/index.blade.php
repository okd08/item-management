@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- 削除メッセージ --}}
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {{-- 戻るボタン --}}
            <div class="text-right">
                <a href="{{ route('home') }}">&laquo戻る</a>
            </div>
            {{-- フォームタグ --}}
            <form action="{{ route('items.index') }}" method="GET" class="text-left">
                @csrf
                <div class="card">
                    <div class="card-header">
                        {{-- 商品登録ボタン --}}
                        <div class="text-right mb-4">
                            <a href="{{ url('items/add') }}" class="btn btn-primary btn-lg">商品登録</a>
                        </div>
                        {{-- 検索フォーム --}}
                        <div class="text-left">
                            {{-- カテゴリ―選択 --}}
                            <div>
                                <p class="mb-2">カテゴリー選択</p>
                                <label class="mr-2 ml-2"><input type="checkbox" name="types[]" value="トップス" {{ in_array('トップス', $types ?? []) ? 'checked' : '' }}>トップス </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="ボトムス" {{ in_array('ボトムス', $types ?? []) ? 'checked' : '' }}>ボトムス </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="ワンピース" {{ in_array('ワンピース', $types ?? []) ? 'checked' : '' }}>ワンピース </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="アウター" {{ in_array('アウター', $types ?? []) ? 'checked' : '' }}>アウター </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="シューズ" {{ in_array('シューズ', $types ?? []) ? 'checked' : '' }}>シューズ </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="バッグ" {{ in_array('バッグ', $types ?? []) ? 'checked' : '' }}>バッグ </label>
                                <label class="mr-2"><input type="checkbox" name="types[]" value="アクセサリー" {{ in_array('アクセサリー', $types ?? []) ? 'checked' : '' }}>アクセサリー </label>
                            </div>
                            {{-- カラー選択 --}}
                            <div>
                                <p class="mb-2">カラー選択</p>
                                <label class="mr-2 ml-2"><input type="checkbox" name="colors[]" value="レッド" {{ in_array('レッド', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="ピンク" {{ in_array('ピンク', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="オレンジ" {{ in_array('オレンジ', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="イエロー" {{ in_array('イエロー', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="ライトグリーン" {{ in_array('ライトグリーン', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="lightgreen" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="グリーン" {{ in_array('グリーン', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="ライトブルー" {{ in_array('ライトブルー', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="aqua" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="ブルー" {{ in_array('ブルー', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label><label class="mr-2"><input type="checkbox" name="colors[]" value="パープル" {{ in_array('パープル', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="purple" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label><label class="mr-2"><input type="checkbox" name="colors[]" value="ブラウン" {{ in_array('ブラウン', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="brown" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label><label class="mr-2"><input type="checkbox" name="colors[]" value="ブラック" {{ in_array('ブラック', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label><label class="mr-2"><input type="checkbox" name="colors[]" value="グレー" {{ in_array('グレー', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg></label>
                                <label class="mr-2"><input type="checkbox" name="colors[]" value="ホワイト" {{ in_array('ホワイト', $colors ?? []) ? 'checked' : '' }}> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8" stroke="lightgray" stroke-width="1"/></svg></label>
                            </div>
                            {{-- キーワード入力 --}}
                            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="キーワードを入力">
                            {{-- 検索ボタン --}}
                            <button type="submit" class="btn btn-secondary">検索</button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        {{-- テーブル --}}
                        <table class="table table-hover text-nowrap">
                            {{-- テーブルヘッダー --}}
                            <thead>
                                <tr>
                                    {{-- ID --}}
                                    <th>ID<button type="submit" name="sort" value="@if (!isset($sort) || $sort !== 'id_asc') id_asc @elseif ($sort === 'id_asc') id_desc @endif" class="btn btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-chevron-expand" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>
                                    </button></th>
                                    {{-- 名前 --}}
                                    <th>名前<button type="submit" name="sort" value="@if (!isset($sort) || $sort !== 'name_asc') name_asc @elseif ($sort === 'name_asc') name_desc @endif" class="btn btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-chevron-expand" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>
                                    </button></th>
                                    {{-- カテゴリー --}}
                                    <th style="transform: translate(0, -3px);">カテゴリ―</th>
                                    {{-- 価格 --}}
                                    <th>価格<button type="submit" name="sort" value="@if (!isset($sort) || $sort !== 'price_asc') price_asc @elseif ($sort === 'price_asc') price_desc @endif" class="btn btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-chevron-expand" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>
                                    </button></th>
                                    <th></th>
                                </tr>
                            </thead>
                            {{-- テーブルボディ --}}
                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        {{-- ID --}}
                                        <td>{{ $item->id }}</td>
                                        {{-- 色 --}}
                                        <td>
                                            @if ($item->color == 'レッド')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ピンク')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'オレンジ')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'イエロー')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ライトグリーン')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="chartreuse" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'グリーン')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ライトブルー')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="aqua" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ブルー')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'パープル')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="purple" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ブラウン')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="brown" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ブラック')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'グレー')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8"/></svg>
                                                {{ $item->name }}
                                            @elseif($item->color == 'ホワイト')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-circle-fill" viewBox="0 0 16 16" style="transform: translate(0, -3px);"><circle cx="8" cy="8" r="8" stroke="lightgray" stroke-width="1"/></svg>
                                                {{ $item->name }}
                                            @endif
                                        </td>
                                        {{-- カテゴリ― --}}
                                        <td>{{ $item->type }}</td>
                                        {{-- 価格 --}}
                                        <td>{{ $item->price }} 円</td>
                                        {{-- 編集ボタン --}}
                                        <td><a href="{{ route('items.edit', $item) }}" class="btn btn-secondary">詳細/編集</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" align="center">商品がありません。</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            {{-- ページネーション --}}
            <div class="row justify-content-center">
                {{ $items->links() }}
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
