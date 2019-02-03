<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    public function run()
//    {
//        DB::table('lessons')->insert([
//            'name' => str_random(10),
//            'description' => str_random(100),
//            'duration' => rand(60, 90),
//        ]);
//    }

    public function run(){
//        factory(App\Lesson::class, 30)->create();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            App\Lesson::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'duration' => rand(60, 90)
            ]);
        }
    }
//    public function some(){
//        $row = 1;
//        if (($handle = fopen("test.csv", "r")) !== FALSE) {
//        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num полей в строке $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//        echo $data[$c] . "<br />\n";
//            }
//        }
//        fclose($handle);
//            }
//        }
    }
