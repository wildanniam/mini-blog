<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Blog Postingan Satu',
            'slug' => 'blog-postingan-satu',
            'author' => 'Wildan Syukri Niam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nulla qui debitis numquam id voluptate consequuntur perspiciatis unde dolorum quos error accusamus architecto quidem iusto fugit, minus voluptatibus earum sapiente eum 
            omnis laboriosam? Placeat eveniet quaerat quas quam hic molestiae non, blanditiis, fuga magnam vitae adipisci ipsam tempora quibusdam laudantium dolor nostrum quis, doloremque deleniti neque numquam eos quos! Sequi sapiente dicta nihil consectetur ipsam sint libero, cum adipisci quod fugit, quidem assumenda, delectus explicabo beatae architecto itaque amet est temporibus.',

        ],
        [
            'title' => 'Blog Postingan Dua',
            'slug' => 'blog-postingan-dua',
            'author' => 'Hanif Ulil Albab',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio culpa tenetur officiis provident odio aliquam, quia quod eos consequatur deserunt, at voluptates eius quam earum sint fuga dignissimos atque obcaecati doloremque enim? Odit officia laboriosam similique soluta eius? Quia fugiat consectetur magni cumque ea modi ex totam sed, quos ratione molestias ad iste veniam sunt magnam laboriosam praesentium eligendi amet in dolorum. Iusto dolor nemo aliquid fuga nostrum omnis perspiciatis neque earum reprehenderit similique excepturi placeat inventore eaque modi, possimus molestias in esse nulla
             et totam pariatur praesentium architecto? Nemo eligendi rem natus laborum eveniet sequi odit veritatis ea explicabo.',

        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        //     ;
        // }
        // ;


        return $posts->firstWhere('slug', $slug);
    }

}
