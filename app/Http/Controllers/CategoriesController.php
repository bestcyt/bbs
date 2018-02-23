<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function show(Category $category , Topic $topic ,Request $request)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = $topic->withOrder($request->input('order'))->where('category_id', $category->id)->paginate(20);
//        $topics = Topic::where('category_id', $category->id)->paginate(20);
        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));
    }
}
