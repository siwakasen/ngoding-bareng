<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $articles = Article::where('status', 1)->get();
        $activePop = false;
        return view('userPage.articles.articlePage', compact('user', 'articles', 'activePop'));
    }

    public function indexPopular()
    {
        $user = auth()->user();
        $articles = Article::where('status', 1)->orderBy('content','ASC')->get();
        $activePop = true;
        return view('userPage.articles.articlePage', compact('user', 'articles', 'activePop'));
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

    public function create()
    {
        $articles = new Article();
        return view('adminPage.createArticle', compact('articles'));
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
            $data['thumbnail'] = '/storage/thumbnail/' . $filename;
        }

        // Tambahkan field 'date' dengan nilai waktu sekarang
        $data['date'] = date('Y-m-d H:i:s');
        $data['status'] = 1;

        $article = new Article();
        $article->fill($data);
        $article->save();
        return redirect()->route('manageArticle')->with('success', 'Article created successfully');
    }

    public function toggleStatus($id)
    {
        $articles = Article::find($id);

        if ($articles) {
            $newStatus = $articles->status == 1 ? 0 : 1;
            $articles->update(['status' => $newStatus]);
            return redirect()->route('manageArticle')->with('success', 'Article status updated!');
        } else {
            return redirect()->route('manageArticle')->with('error', 'Article not found!');
        }
    }


    public function edit($id)
    {
        $articles = Article::find($id);
        $mode = 'edit';
        return view('adminPage.createArticle', compact('articles', 'mode'));
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
            $data['thumbnail'] = '/storage/thumbnail/' . $filename;

            // Remove the old thumbnail file if it exists
            if (!empty($article->thumbnail)) {
                $oldThumbnailPath = public_path('/storage/thumbnail/' . $article->thumbnail);
                if (file_exists($oldThumbnailPath)) {
                    unlink($oldThumbnailPath);
                }
            }
        }

        $article->update($data);
        return redirect()->route('manageArticle')->with('success', 'Article updated successfully');
    }

    public function destroy($id)
    {
        $articles = Article::find($id);

        if ($articles) {
            $articles->delete();
            return redirect()->route('manageArticle')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('manageArticle')->with(['error' => 'Data Not Found!']);
        }
    }
}
