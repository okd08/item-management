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
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    {{-- ID --}}
                                    <th>ID<button type="submit" name="sort" value="@if (!isset($sort) || $sort !== 'id_asc') id_asc @elseif ($sort === 'id_asc') id_desc @endif" class="btn btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-chevron-expand" viewBox="0 0 16 16" ><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>
                                    </button></th>
                                    {{-- 名前 --}}
                                    <th>名前<button type="submit" name="sort" value="@if (!isset($sort) || $sort !== 'name_asc') name_asc @elseif ($sort === 'name_asc') name_desc @endif" class="btn btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-chevron-expand" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>
                                    </button></th>
                                    <th>種別</th>
                                    <th>詳細</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->detail }}</td>
                                        <td><a href="{{ route('items.edit', $item) }}" class="btn btn-secondary">編集</a></td>
                                    </tr>
                                @endforeach
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
