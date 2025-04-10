<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Array of post_id and user_id pairs
        $postUserPairs = [
            [27324, 3],
            [80091, 4],
            [80363, 5],
            [50124, 6],
            [48932, 7],
            [92354, 8],
            [41484, 9],
            [77516, 10],
            [56466, 11],
            [28405, 12],
            [87099, 13],
            [40718, 14],
            [22623, 15],
            [21071, 16],
            [74595, 17],
            [81117, 18],
            [35972, 19],
            [45968, 20],
            [91570, 21],
            [15811, 22],
            [41563, 23],
            [46513, 24],
            [43184, 25],
            [54497, 26],
            [85204, 27],
            [85633, 28],
            [91035, 29],
            [91519, 30],
            [19984, 31],
            [40036, 32],
            [41044, 33],
            [77931, 34],
            [54758, 35],
            [19451, 36],
            [98054, 37],
            [54050, 38],
            [86065, 39],
            [61088, 40],
            [26126, 41],
            [81479, 42],
            [47209, 43],
            [77437, 44],
            [61372, 45],
            [82821, 46],
            [81932, 47],
            [69460, 48],
            [11139, 49],
            [95048, 50],
            [19940, 51],
            [72064, 52],
        ];

        foreach ($postUserPairs as $key => $pair) {
            DB::table('comments')->insert([
                'comment_id' => $key + 1, // You can use this or a unique logic to create comment_id
                'content' => 'This is a comment on post ' . $pair[0] . ' by user ' . $pair[1],
                'post_id' => $pair[0],
                'user_id' => $pair[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
