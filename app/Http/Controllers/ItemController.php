<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index(Request $request)
    {
        // リクエストを取得
        $filters = $request->all();
        // 商品一覧を取得
        $items = Item::query();
        // カテゴリー選択を取得
        $types = $request->types;
        // カラー選択を取得
        $colors = $request->colors;
        // キーワードを取得
        $keyword = $request->keyword;
        // ソートの値を取得
        $sort = $request->sort;

        // 各リクエストがあった場合
        if (!empty($filters)) {

            // カテゴリー選択
            if (!empty($types)) {
                $items->whereIn('type', $types);
            }
            // カラー選択
            if (!empty($colors)) {
                $items->whereIn('color', $colors);
            }
            // キーワード検索
            if (!empty($keyword)) {
                $items->where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%$keyword%")
                        ->orWhere('detail', 'LIKE', "%$keyword%");
                });
            }
        }

        // ID、名前順でソート
        if (!empty($sort)) {
            if ($sort === 'id_asc') {
                $items->orderBy('id', 'asc');
            } elseif ($sort === 'id_desc') {
                $items->orderBy('id', 'desc');
            } elseif ($sort === 'name_asc') {
                $items->orderBy('name', 'asc');
            } elseif ($sort === 'name_desc') {
                $items->orderBy('name', 'desc');
            } elseif ($sort === 'price_asc') {
                $items->orderBy('price', 'asc');
            } elseif ($sort === 'price_desc') {
                $items->orderBy('price', 'desc');
            }
        }

        // ページネーションを適用
        $paginate = 15;
        $page = Paginator::resolveCurrentPage() ?: 1;
        $items = $items->paginate($paginate);

        // 検索クエリをリンクに追加
        $items->appends($filters);

        return view('item.index', compact('items', 'keyword', 'sort', 'types', 'colors'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
                'type' => 'required',
                'detail' => 'nullable|max:500',
                'price' => 'required|numeric|min:0',
                'color' => 'required',
            ]);

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->input('type'),
                'detail' => $request->detail,
                'price' => $request->price,
                'color' => $request->input('color'),
            ]);

            return redirect('/items');
        }

        return view('item.add');
    }

    /**
     * 商品編集画面
     */
    public function edit(Item $item) {

        return view('item.edit')
            ->with(['item' => $item]);
    }

    /**
     * 商品編集
     */
    public function update(Request $request, Item $item) {

        // バリデーション
        $this->validate($request, [
            'name' => 'required|max:100',
            'type' => 'required',
            'detail' => 'nullable|max:500',
            'price' => 'required|numeric|min:0',
            'color' => 'required',
        ]);

        $item->name = $request->name;
        $item->type = $request->input('type');
        $item->detail = $request->detail;
        $item->price = $request->price;
        $item->color = $request->input('color');
        $item->save();

        return redirect()->route('items.edit', $item);
    }

    /**
     * 商品削除
     */
    public function destroy(Item $item) {

        $item->delete();

        return redirect('/items');
    }
}
