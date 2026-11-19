<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;

class BookSeeder extends Seeder
{
    
    public function run(): void
    {
        // 登録者を取得
        $user = User::first();

        // 書籍データ
        $books = [
            [
                'title' => '吾輩は猫である',
                'author' => '夏目漱石',
                'isbn' => '9784101010014',
                'publication_date' => '1905-01-01',
                'description' => '猫の視点から人間社会をユーモラスに描いた夏目漱石の代表作。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=1',
                'genres' => ['小説'],
            ],
            [
                'title' => '人を動かす',
                'author' => 'D・カーネギー',
                'isbn' => '9784422100524',
                'publication_date' => '1936-10-01',
                'description' => '人間関係を円滑にするための原則を解説した自己啓発の名著。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=2',
                'genres' => ['ビジネス', '自己啓発'],
            ],
            [
                'title' => 'リーダブルコード',
                'author' => 'Dustin Boswell',
                'isbn' => '9784873115658',
                'publication_date' => '2012-06-23',
                'description' => '読みやすく保守しやすいコードを書くための実践的な技術書。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=3',
                'genres' => ['技術書'],
            ],
            [
                'title' => '7つの習慣',
                'author' => 'スティーブン・R・コヴィー',
                'isbn' => '9784863940246',
                'publication_date' => '2013-08-30',
                'description' => '人生や仕事で成果を上げるための原則をまとめた一冊。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=4',
                'genres' => ['ビジネス', '自己啓発'],
            ],
            [
                'title' => '坊っちゃん',
                'author' => '夏目漱石',
                'isbn' => '9784101010021',
                'publication_date' => '1906-04-01',
                'description' => '正義感の強い主人公が四国の中学校で巻き起こす騒動を描いた小説。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=5',
                'genres' => ['小説'],
            ],
            [
                'title' => 'サピエンス全史',
                'author' => 'ユヴァル・ノア・ハラリ',
                'isbn' => '9784309226712',
                'publication_date' => '2016-09-08',
                'description' => '人類の誕生から現代までの歴史を壮大な視点で考察する。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=6',
                'genres' => ['歴史', '科学'],
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'isbn' => '9784048930598',
                'publication_date' => '2017-12-18',
                'description' => '品質の高いソフトウェアを書くためのコーディング原則を解説。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=7',
                'genres' => ['技術書'],
            ],
            [
                'title' => '嫌われる勇気',
                'author' => '岸見一郎・古賀史健',
                'isbn' => '9784478025819',
                'publication_date' => '2013-12-13',
                'description' => 'アドラー心理学を対話形式でわかりやすく紹介する一冊。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=8',
                'genres' => ['自己啓発'],
            ],
            [
                'title' => '火花',
                'author' => '又吉直樹',
                'isbn' => '9784163902302',
                'publication_date' => '2015-03-11',
                'description' => '芸人として生きる二人の姿を描いた芥川賞受賞作品。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=9',
                'genres' => ['小説'],
            ],
            [
                'title' => 'FACTFULNESS',
                'author' => 'ハンス・ロスリング',
                'isbn' => '9784822289607',
                'publication_date' => '2019-01-11',
                'description' => 'データをもとに世界を正しく理解するための考え方を紹介。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=10',
                'genres' => ['ビジネス', '科学'],
            ],
            [
                'title' => 'コンテナ物語',
                'author' => 'マルク・レビンソン',
                'isbn' => '9784822251468',
                'publication_date' => '2007-01-18',
                'description' => 'コンテナが世界の貿易や物流をどのように変えたかを描く。',
                'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=11',
                'genres' => ['ビジネス', '歴史'],
            ],
        ];

        foreach ($books as $bookData) {
            $genres = $bookData['genres'];

            unset($bookData['genres']);

            $book = Book::firstOrCreate(
                ['isbn' => $bookData['isbn']],
                [
                    'user_id' => $user->id,
                    'title' => $bookData['title'],
                    'author' => $bookData['author'],
                    'publication_date' => $bookData['publication_date'],
                    'description' => $bookData['description'],
                    'image_url' => $bookData['image_url'],
                ]
            );

            $genreIds = Genre::whereIn('name', $genres)->pluck('id');

            $book->genres()->sync($genreIds);
        }
    }
}
