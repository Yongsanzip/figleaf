<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = 2;
        $faker = \Faker\Factory::create();
        $gender = $faker->randomElement(['male', 'female']);
        for($i = 1; $i < 100; $i++) {
            $category_rand = rand(4,5);
            $project = \App\Project::create([
                'user_id'               => rand(2,6),
                'category_id'           => $category_rand,
                'category2_id'          => $category_rand == 4 ? rand(1,10) : rand(11,18),
                'size_category_id'      => 2,
                'total_cost'            => 0,
                'supporter'             => 0,
                'count'                 => 0,
                'condition'             => rand(1,5),
                'title'                 => $faker->text(20),
                'summary'               => $faker->text(200),
                'success_count'         => 20,
                'comment'               => 'TEST',
                'deadline'              => $faker->dateTimeBetween('-1 months','+2 months'),
                'account_date'          => '2020-03-30',
                'delivery_date'         => '2020-03-01',
                'agree'                 => 'Y',
                'delay_date'            => 7,
                'storytelling'          => $faker->text(500),
                'progress'              => 100,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);
            if(\Carbon\Carbon::today() > $project->deadline){
                $project->condition = 4;
                $project->save();
            } else {
                $project->condition = 2;
                $project->save();
            }


             for ($j = 0; $j < 2; $j++){
                 \Illuminate\Support\Facades\DB::table('options')->insert([
                     'project_id'            => $project->id,
                     'option_name'           => $faker->text(10),
                     'price'                 => 200+200*($j % 2),
                     'created_at' => date('Y-m-d H:i:s', time()),
                     'updated_at' => date('Y-m-d H:i:s', time()),
                 ]);
             }


            \Illuminate\Support\Facades\DB::table('sizes')->insert([
                'project_id'            => $project->id,
                'size'                  => 'F',
                'total_length'          => 5*$i,
                'shoulder'              => 5*$i,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);

            \Illuminate\Support\Facades\DB::table('introductions')->insert([
                'project_id'            => $project->id,
                'brand_name'            => $faker->company,
                'designer_name'         => $faker->name($gender),
                'email'                 => 'test@test.com',
                'phone'                 => '01012341234',
                'facebook'              => 'test@test.com',
                'instagram'             => 'test@test.com',
                'twitter'               => 'test@test.com',
                'homepage'              => 'test@test.com',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]);

            for ($j = 1; $j < 6; $j++){
                \Illuminate\Support\Facades\DB::table('informations')->insert([
                    'project_id'            => $project->id,
                    'tab_id'                => $j,
                    'detail_id'             => $j*5+1,
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ]);
            }

            $rand = rand(1,26);
            for ($j = 1; $j < 4; $j++) {
                \Illuminate\Support\Facades\DB::table('project_images')->insert([
                    'project_id'            => $project->id,
                    'image_division'        => $j,
                    'image_type'            => 'image/png',
                    'image_path'            => 'images/project_dummy/p'.$rand.'.jpg',
                    'origin_name'           => 'test.png',
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ]);
            }

            for ($j = 0; $j < 2; $j++){
                \Illuminate\Support\Facades\DB::table('fabrics')->insert([
                    'project_id'            => $project->id,
                    'material_id'           => mt_rand(1,308),
                    'rate'                  => 50,
                    'created_at'            => date('Y-m-d H:i:s', time()),
                    'updated_at'            => date('Y-m-d H:i:s', time()),
                ]);
            }


            $account = \App\Account::create([
                'project_id'            => $project->id,
                'condition'             => mt_rand(0,1),
                'email'                 => 'test@test.com',
                'phone'                 => '01012341234',
                'created_at'            => date('Y-m-d H:i:s', time()),
                'updated_at'            => date('Y-m-d H:i:s', time()),
            ]);

            if ($account->condition == 1) { // 사업자
                $account->company_number = '1234123412';
                $account->save();
            }

        }
    }
}
