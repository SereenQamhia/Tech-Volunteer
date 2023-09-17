<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
    //    DB::table('products')->truncate();

        DB::table('products')->insert([
            ['id'=>1,
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
                'image' => 'https://img.freepik.com/free-photo/programming-background-collage_23-2149901774.jpg?w=1060&t=st=1694428270~exp=1694428870~hmac=811d6a9e0c93d76683655d0bb5d4c9c363d40b79539d6f3d0ed0c7566da2ed6b',
                'total' => ' 1000'     
            ],
            [
                'id' => 2,
                'name' => 'Back-End',
                'description2' => 'As a volunteer in our Back-End Foundations project, you will empower individuals with the essential web development skills—PHP, Java, and Node.js. Our mentorship program guides you in nurturing talent, from basics to responsive design. 
                ',
                'description3' => 'As a volunteer  you play a pivotal role in empowering aspiring web developers. Your responsibilities include guiding learners through the essentials of PHP, Node.Js, and Laravel, fostering an understanding of responsive web design
                ',
                'breif' => 'Volunteer to teach the art of building powerful server-side components and creating dynamic web applications .
                ',
                'time' => '11am' , 
                'location' => 'Amman',
                'period' => 'Mon, Wed, Fri, for three weeks' ,
                'image' => 'https://blog.tubikstudio.com/wp-content/uploads/2016/10/code-1.png',
                'total' => ' 1500'     
            ],
            [
                'id' => 3,
                'name' => 'UX /UI',
                'description2' => 'As a volunteer in our UX/UI Design project, you will empower individuals with essential skills in user experience (UX) and user interface (UI) design. Our mentorship program guides you in nurturing talent. 
                ',
                'description3' => 'As a volunteer, you play a pivotal role in empowering aspiring UX/UI designers. Your responsibilities include guiding learners through the essentials of user-centered design, wireframing and prototyping.
                ',
                'breif' => 'Volunteer to teach the art of crafting user-centric and visually appealing digital experiences with our UX/UI Design project.
                ',
                'time' => '9am' , 
                'location' => 'Irbid',
                'period' => ' Mon, Wed, Fri, for one weeks' ,
                'image' => 'https://img.freepik.com/free-vector/flat-design-ui-ux-background_23-2149093996.jpg?w=1060&t=st=1694427690~exp=1694428290~hmac=5d2010d5d92c4a6ed0a5aab15ac619281ee03b033ec3919901f070a9919e3949 ',
                'total' => ' 1200'     
            ]
           
            
       ] );
    }
    
}
