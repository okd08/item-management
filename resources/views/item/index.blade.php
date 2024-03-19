@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- 戻るボタン --}}
            <div class="text-right">
                <a href="{{ route('home') }}">&laquo戻る</a>
            </div>
            {{-- フォームタグ --}}
            <form action="{{ route('items.index') }}" method="GET">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            {{-- 商品登録ボタン --}}
                            <div class="text-right mb-4">
                                <a href="{{ url('items/add') }}" class="btn btn-primary">商品登録</a>
                            </div>
                            {{-- 検索フォーム --}}
                            <div>
                                {{-- カテゴリ―選択 --}}
                                {{-- <div class="mb-4">
                                    <p class="fw-bold lh-1">カテゴリー選択</p>
                                    @foreach ($categories as $category)
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" id="category{{ $category->id }}" class="form-check-input" {{ in_array($category->id, $originalRequest['categories'] ?? []) ? 'checked' : '' }}>
                                        <label for="category{{ $category->id }}" class="form-check-label">{{ $category->name }}</label>
                                    </div>
                                    @endforeach
                                </div> --}}
                                {{-- キーワード入力 --}}
                                <input type="text" name="keyword" value="{{ $keyword }}" placeholder="キーワードを入力">
                                {{-- 検索ボタン --}}
                                <button type="submit" class="btn btn-primary">検索</button>
                            </div>
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
