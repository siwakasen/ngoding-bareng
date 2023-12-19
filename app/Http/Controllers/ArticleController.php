<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private function handleImageUpload(Request $request, $article = null)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('public/thumbnail');
            $article->thumbnail = basename($thumbnailPath);
        }
    }


    public function index()
    {
        $user = auth()->user();
        $articles = Article::where('status', 0)->get();
        // dd($articles);
        return view('userPage.articles.articlePage', compact('user', 'articles'));
    }
    

    
    public function create()
    {

        $articles = new Article();
    return view('adminPage.courses.createArticle', compact('articles'));
    }


    public function store(Request $request)
{
    $this->validate($request, [
        'title' => 'required',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'main_sentence' => 'required',
        'content' => 'required',
    ]);

    $data = $request->all();

    if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
        $destinationPath = public_path('/storage/thumbnail');
        $thumbnail->move($destinationPath, $filename);
        $data['thumbnail'] = $filename;
    }

    // Tambahkan field 'date' dengan nilai waktu sekarang
    $data['date'] = now();
    $data['status'] = 0;

    $article = new Article();
    $article->fill($data);
    $article->save();

    return redirect()->route('adminManageArticle')->with('success', 'Data Berhasil Disimpan!');
}

    


    public function edit($id)
    {
        $articles = Article::find($id);
        $mode = 'edit'; 
        return view('adminPage.courses.createArticle', compact('articles', 'mode'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'main_sentence' => 'required|string',
        'content' => 'required|string',
    ]);

    $article = Article::findOrFail($id);

    $data = $request->all();

    if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
        $destinationPath = public_path('/storage/thumbnail');
        $thumbnail->move($destinationPath, $filename);
        $data['thumbnail'] = $filename;

        // Remove the old thumbnail file if it exists
        if (!empty($article->thumbnail)) {
            $oldThumbnailPath = public_path('/storage/thumbnail/' . $article->thumbnail);
            if (file_exists($oldThumbnailPath)) {
                unlink($oldThumbnailPath);
            }
        }
    }

    $article->update($data);

    return redirect()->route('adminManageArticle')->with('success', 'Article updated successfully');
}

public function destroy($id)
{
    $articles = Article::find($id);

    if ($articles) {
        $articles->delete();
        return redirect()->route('adminManageArticle')->with(['success' => 'Data Berhasil Dihapus!']);
    } else {
        return redirect()->route('adminManageArticle')->with(['error' => 'Data Not Found!']);
    }
}


public function formArticle($mode, $id = null)
{
    // Mengecek apakah ada data artikel yang akan di-edit
    $article = null;
    if ($mode == 'edit') {
        $article = Article::find($id);
        if (!$article) {
            return redirect()->route('adminManageArticle')->with('error', 'Article not found');
        }
    }
    return view('adminPage.courses.createArticle', compact('mode', 'article'));
}

public function showDataById($id)
{
    $article = Article::find($id);
    $user = auth()->user(); 

    if ($article) {
        return view('userPage.articles.contentArticle', compact('article', 'user'));
    } else {
        return redirect()->route('userPage.articles.articlePage')->with('error', 'Article not found!');
    }
}


public static function isNotEmpty()
{
    return static::count() > 0;
}

}