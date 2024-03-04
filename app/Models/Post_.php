<?php

namespace App\Models;


class Post 
{
  private static $blog_posts = [ 
    [
       "title" => "Judul Tulisan Elsie",
       "slug" => "judul-tulisan-pertama",
       "author" => "Elsie Bazla",
       "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo dolores voluptas dolore cumque excepturi ad debitis repudiandae, atque ex corrupti dignissimos, laboriosam perspiciatis autem animi eius, sed asperiores blanditiis labore molestiae? Numquam molestias ipsum laboriosam dignissimos, tempora temporibus optio odit corporis aliquid odio fugiat, natus iure quasi nostrum quaerat rerum ipsa officia! Quisquam, error natus voluptatum eaque aliquid recusandae veritatis ullam alias harum excepturi eius earum dolorum qui illo quos hic sed! Ipsa, minima animi! Tempora voluptatum est voluptatem facilis."
     ],
   [
       "title" => "Judul Tulisan Amel",
       "slug" => "judul-tulisan-kedua",
       "author" => "Amelinda",
       "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestiae inventore doloremque! Inventore unde tempore necessitatibus voluptatum quos accusamus quaerat exercitationem iusto sunt, illum qui facere ducimus asperiores iste maxime laboriosam assumenda sapiente vel in, eligendi culpa, sint rem! Voluptates ex maxime modi voluptatum beatae voluptas officiis suscipit nobis corrupti saepe esse ea vitae hic labore eos tempora ullam, voluptatibus quidem? Labore facilis officia cum, inventore qui omnis aut quaerat veritatis laudantium molestias perferendis ea repellat eaque! Ipsum omnis sapiente tempore corrupti eum mollitia excepturi quos debitis assumenda iste laborum laudantium, expedita aspernatur provident labore maxime recusandae facere magnam qui!"
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
