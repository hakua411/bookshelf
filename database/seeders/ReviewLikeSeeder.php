<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewLikeSeeder extends Seeder
{
    public function run(): void
    {
        // ユーザーをメールアドレスで取得
        $users = User::all()->keyBy('email');

        // レビューを取得
        $reviews = Review::with('user')->get();

        foreach ($reviews as $review) {
            // いいねするユーザーを取得
            $userIds = User::where('id', '!=', $review->user_id)
                ->inRandomOrder()
                ->limit(rand(0, 3))
                ->pluck('id')
                ->toArray();

            // いいねを登録
            $review->likedByUsers()->syncWithoutDetaching($userIds);
        }
    }
}
