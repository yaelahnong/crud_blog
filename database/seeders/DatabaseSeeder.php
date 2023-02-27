<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $faker = \Faker\Factory::create('en_US');
    
    $currentTime = now();
    
    $blogs = [
      [
        'title' => 'How to learn Laravel',
        'content' => 'Laravel is a PHP web framework. To learn Laravel, you should start with the official documentation and follow some online tutorials.',
        'created_at' => $currentTime,
      ],
      [
        'title' => '5 tips for improving your coding skills',
        'content' => 'To improve your coding skills, you should practice coding regularly, learn from your mistakes, and collaborate with other developers.',
        'created_at' => $currentTime,
      ],
      [
        'title' => 'Why Vue.js is a great frontend framework',
        'content' => 'Vue.js is a popular frontend framework that is easy to learn and highly customizable. It also has a large and active community of developers.',
        'created_at' => $currentTime,
      ],
    ];

    for ($i = 0; $i < 100; $i++) {
      array_push($blogs, [
        'title' => $faker->text(32),
        'content' => $faker->text(64),
        'created_at' => $currentTime,
      ]);
    }

    Blog::insert($blogs);
  }
}
