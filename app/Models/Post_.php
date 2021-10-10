<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Post
{
  private static $blog_posts = [
    [
      'title' => 'Judul Pertama',
      'slug' => 'judul-pertama',
      'author' => 'Andi',
      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae exercitationem itaque minus aperiam ut voluptates et maxime quam voluptatem praesentium laboriosam veritatis nihil voluptate, eius cumque totam, optio sequi laudantium!'
    ],
    [
      'title' => 'Judul Kedua',
      'slug' => 'judul-kedua',
      'author' => 'Hartono',
      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut rerum eaque similique nisi commodi sit, ad aut cupiditate molestias illo harum doloremque modi consequatur, maxime aspernatur a molestiae! Aliquam, doloribus ut harum consequuntur, animi temporibus enim ipsum alias ab laudantium incidunt explicabo. Reprehenderit placeat cumque sequi laboriosam. Beatae saepe quod error voluptatibus obcaecati sequi tenetur eum repudiandae dolor aspernatur officia sed temporibus totam a doloribus commodi porro fuga, pariatur architecto, non minima, atque corrupti eos. Dolore unde rem corporis impedit quam. Reprehenderit, autem. Debitis architecto, magnam inventore sapiente hic cum fugit repudiandae voluptatibus atque ad ratione nobis. Cum, porro laborum.'
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
