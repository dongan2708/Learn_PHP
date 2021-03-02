<?php


namespace App\Http\Controllers;


use App\Models\Post;

class Post_Controller extends Controller
{
    public function DisplayPost(){
        $posts = Post::all();
        foreach ($posts as $post){
            echo "ID : $post->id,   title : $post->title,   author : $post->author <BR>";
        }
    }
    public function FindId($id){
        $posts = Post::where('id','>=',$id)
            ->orderBy('id')
            ->take(10)
            ->get();

        if (!count($posts)){
            echo "There is no record with id = $id";
        }
        else{
            foreach ($posts as $post){
                echo "ID : $post->id,   title : $post->title,   author : $post->author <BR>";
            }
        }

    }

    public function insert($title,$author){

        $posts = new Post();
        $posts->title = $title;
        $posts->author = $author;
        $posts->save();
        echo "Record inserted";
    }

    public function Update_Post($id,$title,$author){
        $posts = Post::where('id',$id) -> first();
        $posts->title = $title;
        $posts->author = $author;
        $posts->save();
    }

}
