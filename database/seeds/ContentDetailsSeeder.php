<?php

use Illuminate\Database\Seeder;

class ContentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 홈 - 디자이너, 브랜드, 프로젝트
        // new, special, collection, event
        $length = 6;
        $status = 0;
        for ($k = 1; $k < 8; $k++) {
            if ($k > 2) {
                $length = 40;
                $status = 1;
            }
            for ($i = 1; $i < $length; $i++) {
                \App\ContentDetail::firstOrCreate([
                    'content_id'        => $k,
                    'model_id'          => $length == 6 ? $i : mt_rand(1,99),
                    'status'            => $status,
                    'created_at'        => \Carbon\Carbon::now(),
                    'updated_at'        => \Carbon\Carbon::now()
                ]);
            }
        }
    }
}
