<?php

namespace App\ViewModels;

use App\Post;

class PostViewModel
{
    public function __construct(Post $post) {
        $this->id = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;
        $this->category = $post->category->description;
        $this->user = $post->user->name;
        $this->created = $post->created_at;
    }
}
