<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
// use DB;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
     public function run()
     {
        DB::table('products')->insert(
        
            [
                'name' => 'Front-End',
                'description2' => 'As a volunteer in our Front-End Foundations project, you will empower individuals with the essential web development skills—HTML, CSS, and JavaScript. Our mentorship program guides you in nurturing talent, from basics to responsive design. 
                ',
                'description3' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of HTML, CSS, and JavaScript, fostering an understanding of responsive web design
                ',
                'breif' => 'Volunteer to teach the art of crafting captivating and user-friendly web experiences with our Front-End Foundations project.
                ',
                'time' => '9am' , 
                'location' => 'Irbid',
                'period' => ' sun mon thu , for two weeks' ,
                'image' => 'https://i.pinimg.com/564x/e4/ae/91/e4ae913770319fc3230da7b28530d82c.jpg',
                'total' => ' 1000'
            ]);

        
     }
}
