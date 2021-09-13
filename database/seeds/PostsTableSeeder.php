<?php

use Illuminate\Database\Seeder;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
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
        }



    }
}