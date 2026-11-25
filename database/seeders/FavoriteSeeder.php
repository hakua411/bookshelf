<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        // ユーザーをメールアドレスで取得
        $users = User::all()->keyBy('email');

        // 書籍をISBNで取得
        $books = Book::all()->keyBy('isbn');

        // ユーザーごとのお気に入り書籍
        $favorites = [
            'yamada@example.com' => [
                '9784101010014',
                '9784873115658',
                '9784309226712',
                '9784163902302',
            ],
            'suzuki@example.com' => [
                '9784422100524',
                '9784863940246',
                '9784478025819',
                '9784822289607',
            ],
            'tanaka@example.com' => [
                '9784101010021',
                '9784873115658',
                '9784048930598',
                '9784822251468',
            ],
            'sato@example.com' => [
                '9784101010014',
                '9784863940246',
                '9784478025819',
                '9784822289607',
            ],
            'takahashi@example.com' => [
                '9784422100524',
                '9784309226712',
                '9784163902302',
                '9784822251468',
            ],
        ];

        foreach ($favorites as $email => $isbns) {
            $bookIds = [];

            foreach ($isbns as $isbn) {
                $bookIds[] = $books[$isbn]->id;
            }

            $users[$email]->favoriteBooks()->syncWithoutDetaching($bookIds);
        }
    }
}
