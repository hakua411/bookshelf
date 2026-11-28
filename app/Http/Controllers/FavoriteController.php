<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FavoriteController extends Controller
{
    /**
     * お気に入り一覧
     */
    public function index(): View
    {
        $books = auth()->user()
            ->favoriteBooks()
            ->latest('books.created_at')
            ->paginate(10);

        return view('favorites.index', compact('books'));
    }

    /**
     * お気に入り登録・解除
     */
    public function toggle(Book $book): RedirectResponse
    {
        $user = auth()->user();

        if ($user->favoriteBooks()->where('books.id', $book->id)->exists()) {
            $user->favoriteBooks()->detach($book->id);
        } else {
            $user->favoriteBooks()->attach($book->id);
        }

        return back();
    }
}
