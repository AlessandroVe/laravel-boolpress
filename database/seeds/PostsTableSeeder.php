<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\PostDetail;


use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    /* $posts = [
            [
                "cover"=>"https://lh3.googleusercontent.com/proxy/4-6Ww9u1RHTTEzAZl_yUiD0snYftw41tCaNcmqSv4dbQX1ifhedITXRhGMaschKmbWtTR_yW2_iFVdZd-0Zu64mxI-LqS75QnaYb94s",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quos fugiat totam ipsam, dolorum nostrum incidunt in repellat non et quaerat facere fuga ratione error tenetur, tempore earum? Debitis, cum.",
                "likes"=>5,
            ],
            [ 
                "cover"=>"https://upload.wikimedia.org/wikipedia/commons/9/9a/PNG_transparency_demonstration_2.png",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quos fugiat totam ipsam, dolorum nostrum incidunt in repellat non et quaerat facere fuga ratione error tenetur, tempore earum? Debitis, cum.",
                "likes"=>8,
            ],
            [
                "cover"=>"https://cultura.biografieonline.it/wp-content/uploads/2014/05/differenze-png-e-jpg.png",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quos fugiat totam ipsam, dolorum nostrum incidunt in repellat non et quaerat facere fuga ratione error tenetur, tempore earum? Debitis, cum.",
                "likes"=>100,
            ]
        ];

        foreach($posts as $post){
            $postObject = new Post();
            $postObject->cover = $post['cover'];
            $postObject->description = $post['description'];
            $postObject->likes = $post['likes'];
            $postObject->save();
        } */

        for($i=0;$i<50;$i++){
            
            // popolare la tabella Post_details

            $postDetail = new PostDetail();
            $postDetail->form_factor = $faker->words(1,true);
            $postDetail->publisher = $faker->words(1,true);
            $postDetail->publication_year = $faker->date('Y');
            $postDetail->save();
            

            // popolare la tabella Posts
            $postObject = new Post();
            $postObject->cover = $faker->imageUrl(640, 480, 'animals', true);
            $postObject->description = $faker->paragraph(2);
            $postObject->likes = $faker->randomNumber(5, true);
            $postObject->post_detail_id = $postDetail->id;
            $postObject->save();










        }




    }
}