<?php

use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $title = 'Without Category';
        $data[] = [
          'title' => $title,
          'slug' => Str::of($title)->slug(),
            'parent_id' => 1
        ];

        for($i=1; $i<=10; $i++)
        {
            $title = "Category #{$i}";
            $data[] = [
              'title' => $title,
                'slug' => Str::of($title)->slug(),
                'parent_id' => ($i > 4) ? rand(1,4) : 1
            ];
        }

        DB::table('blog_categories')->insert($data);

    }
}
