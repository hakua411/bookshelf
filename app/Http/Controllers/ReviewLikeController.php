<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;

class ReviewLikeController extends Controller
{
    /**
     * いいね登録・解除
     */
    public function toggle(Review $review): RedirectResponse
    {
        $user = auth()->user();

        if ($user->likedReviews()->where('reviews.id', $review->id)->exists()) {
            $user->likedReviews()->detach($review->id);
        } else {
            $user->likedReviews()->attach($review->id);
        }

        return back();
    }
}
