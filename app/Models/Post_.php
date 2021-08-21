<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'First Post',
            'slug' => 'first-post',
            'author' => 'Nanda Dwi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Maxime atque amet tempore dolor, sint laborum. Mollitia, asperiores maxime, quam enim odit, quos impedit, nesciunt magni rerum pariatur laudantium dolores tempora. Unde nisi iure, mollitia. Dolores omnis iusto nemo eligendi maiores cum impedit eveniet tenetur perferendis architecto magnam nesciunt excepturi quam ipsam odio earum, tempora. Vel animi, quo obcaecati eum! Iusto voluptates blanditiis, doloribus dolorum, eos beatae. Iusto repellendus iure dolor. Iure labore ullam quae, totam harum obcaecati sapiente molestiae provident laboriosam odio mollitia magnam impedit at error voluptatibus fugiat eos, esse, ratione et, voluptate corrupti natus repellat? Non itaque, eveniet.'
        ],
        [
            'title' => 'Second Post',
            'slug' => 'second-post',
            'author' => 'Cahyo Wibowo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Corporis eius omnis id odio, eveniet doloribus recusandae, ducimus rem sapiente inventore debitis non, minima itaque. Quae magni, qui, corrupti consequuntur explicabo, reprehenderit nemo quisquam exercitationem provident doloribus amet esse! Explicabo deserunt accusantium voluptatum ipsam obcaecati eligendi tempora pariatur, officia totam distinctio voluptatibus quo porro tenetur odit voluptas odio, architecto, dignissimos, ipsum necessitatibus quas? Ad commodi dolor adipisci, ullam. Numquam at molestiae perferendis tenetur mollitia, quo asperiores, sit omnis libero quas aspernatur pariatur expedita beatae in suscipit quis vel quidem itaque impedit alias cumque. Iure doloribus necessitatibus aperiam cum magni quod provident officiis exercitationem dicta cumque quasi nobis quos atque quidem hic veniam magnam, doloremque! Alias velit consectetur soluta nihil. Debitis praesentium dolorem obcaecati delectus magni animi cumque inventore, dolore. Saepe laboriosam dolorem, sapiente quas perferendis veniam, neque sed corporis et, ipsa, cum non quae inventore nesciunt voluptatum asperiores hic accusantium magnam.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
