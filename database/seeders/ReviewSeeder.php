<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // ユーザーをメールアドレスで取得
        $users = User::all()->keyBy('email');

        // 書籍をISBNで取得
        $books = Book::all()->keyBy('isbn');

        // レビューデータ
        $reviews = [
            // 吾輩は猫である
            [
                'isbn' => '9784101010014',
                'email' => 'suzuki@example.com',
                'rating' => 5,
                'comment' => '猫の視点から描かれる人間社会が面白く、何度読んでも楽しめます。',
            ],
            [
                'isbn' => '9784101010014',
                'email' => 'tanaka@example.com',
                'rating' => 4,
                'comment' => '独特な表現が魅力的です。少し難しい部分もありましたが楽しめました。',
            ],
            [
                'isbn' => '9784101010014',
                'email' => 'sato@example.com',
                'rating' => 5,
                'comment' => 'ユーモアがあり、登場人物の描写も印象に残りました。',
            ],

            // 人を動かす
            [
                'isbn' => '9784422100524',
                'email' => 'yamada@example.com',
                'rating' => 5,
                'comment' => '人間関係を考えるうえで、とても参考になる内容でした。',
            ],
            [
                'isbn' => '9784422100524',
                'email' => 'tanaka@example.com',
                'rating' => 4,
                'comment' => '仕事でも日常生活でも活用できる考え方が多くありました。',
            ],
            [
                'isbn' => '9784422100524',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => '相手の立場で考えることの大切さを学べました。',
            ],

            // リーダブルコード
            [
                'isbn' => '9784873115658',
                'email' => 'yamada@example.com',
                'rating' => 5,
                'comment' => '読みやすいコードを書くための考え方が具体的に学べます。',
            ],
            [
                'isbn' => '9784873115658',
                'email' => 'suzuki@example.com',
                'rating' => 4,
                'comment' => '実例が多く、プログラミングの学習に役立ちました。',
            ],
            [
                'isbn' => '9784873115658',
                'email' => 'sato@example.com',
                'rating' => 5,
                'comment' => 'コードを書くときに意識したいことがたくさんありました。',
            ],

            // 7つの習慣
            [
                'isbn' => '9784863940246',
                'email' => 'suzuki@example.com',
                'rating' => 5,
                'comment' => '仕事や生活に対する考え方を見直すきっかけになりました。',
            ],
            [
                'isbn' => '9784863940246',
                'email' => 'sato@example.com',
                'rating' => 4,
                'comment' => '長い本ですが、実践してみたい内容が多かったです。',
            ],
            [
                'isbn' => '9784863940246',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => '自分の行動を振り返るうえで、とても参考になりました。',
            ],

            // 坊っちゃん
            [
                'isbn' => '9784101010021',
                'email' => 'yamada@example.com',
                'rating' => 4,
                'comment' => '主人公の真っすぐな性格が面白く、楽しく読めました。',
            ],
            [
                'isbn' => '9784101010021',
                'email' => 'tanaka@example.com',
                'rating' => 5,
                'comment' => 'テンポがよく、最後まで飽きずに読める作品でした。',
            ],
            [
                'isbn' => '9784101010021',
                'email' => 'takahashi@example.com',
                'rating' => 4,
                'comment' => '登場人物の個性が豊かで、印象に残る作品です。',
            ],

            // サピエンス全史
            [
                'isbn' => '9784309226712',
                'email' => 'suzuki@example.com',
                'rating' => 5,
                'comment' => '人類の歴史を新しい視点から考えることができました。',
            ],
            [
                'isbn' => '9784309226712',
                'email' => 'tanaka@example.com',
                'rating' => 4,
                'comment' => '幅広いテーマが扱われていて、知的好奇心を刺激されました。',
            ],
            [
                'isbn' => '9784309226712',
                'email' => 'sato@example.com',
                'rating' => 5,
                'comment' => '世界の見方が変わるような内容で、とても読み応えがありました。',
            ],

            // Clean Code
            [
                'isbn' => '9784048930598',
                'email' => 'yamada@example.com',
                'rating' => 5,
                'comment' => '保守しやすいコードを書くための原則が勉強になりました。',
            ],
            [
                'isbn' => '9784048930598',
                'email' => 'sato@example.com',
                'rating' => 4,
                'comment' => '少し難しい部分もありますが、実践的な内容でした。',
            ],
            [
                'isbn' => '9784048930598',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => 'コードの品質について深く考えるきっかけになりました。',
            ],

            // 嫌われる勇気
            [
                'isbn' => '9784478025819',
                'email' => 'suzuki@example.com',
                'rating' => 5,
                'comment' => '対話形式で読みやすく、考え方を整理できました。',
            ],
            [
                'isbn' => '9784478025819',
                'email' => 'tanaka@example.com',
                'rating' => 4,
                'comment' => '自分の価値観を見直すきっかけになる一冊でした。',
            ],
            [
                'isbn' => '9784478025819',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => '人間関係について新しい視点を得られました。',
            ],

            // 火花
            [
                'isbn' => '9784163902302',
                'email' => 'yamada@example.com',
                'rating' => 5,
                'comment' => '登場人物の心情が丁寧に描かれていて引き込まれました。',
            ],
            [
                'isbn' => '9784163902302',
                'email' => 'sato@example.com',
                'rating' => 4,
                'comment' => '独特な雰囲気があり、読み終えた後も余韻が残りました。',
            ],
            [
                'isbn' => '9784163902302',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => '夢を追いかけることの難しさや葛藤が伝わってきました。',
            ],

            // FACTFULNESS
            [
                'isbn' => '9784822289607',
                'email' => 'suzuki@example.com',
                'rating' => 5,
                'comment' => '思い込みではなく、データで世界を見る大切さを学べました。',
            ],
            [
                'isbn' => '9784822289607',
                'email' => 'tanaka@example.com',
                'rating' => 4,
                'comment' => 'ニュースを見るときの視点が変わる内容でした。',
            ],
            [
                'isbn' => '9784822289607',
                'email' => 'sato@example.com',
                'rating' => 5,
                'comment' => '数字をもとに考えることの重要性がよくわかりました。',
            ],

            // コンテナ物語
            [
                'isbn' => '9784822251468',
                'email' => 'yamada@example.com',
                'rating' => 4,
                'comment' => '物流の歴史を知ることができ、とても興味深かったです。',
            ],
            [
                'isbn' => '9784822251468',
                'email' => 'takahashi@example.com',
                'rating' => 5,
                'comment' => 'コンテナが世界を変えたという視点が面白かったです。',
            ],
        ];

        foreach ($reviews as $reviewData) {
            Review::create([
                'user_id' => $users[$reviewData['email']]->id,
                'book_id' => $books[$reviewData['isbn']]->id,
                'rating' => $reviewData['rating'],
                'comment' => $reviewData['comment'],
            ]);
        }
    }
}
