<?php

use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = ["HOME - DESIGNER", "HOME - BRAND", "HOME - RECOMMEND PROJECT", "NEW", "SPECIAL", "COLLECTION", "EVENT"];
        for ($i = 0; $i < count($menu); $i++) {
            \App\Content::create([
                'menu'              => $menu[$i],
                'created_at'        => date('Y-m-d H:i:s', time()),
                'updated_at'        => date('Y-m-d H:i:s', time()),
            ]);
        }
    }
}
