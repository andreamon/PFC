<?php
namespace App\Services;

use App\Post;
use App\ViewModels\PostViewModel;

class PostService
{
    public function getAll(){
        $posts = Post::get();
        $postsViewModel = [];
        foreach($posts as $post){
            array_push($postsViewModel, new PostViewModel($post));
        }
        return $postsViewModel;
    }
}