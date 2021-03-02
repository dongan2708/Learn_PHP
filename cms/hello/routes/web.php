
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');
Route::get('profile/{name}','ProfileController@showProfile');
Route::get('/', function () {
    return view('welcome');
});
//Route::get('about',function(){
//    return 'about content';
//});

Route::get('about/directions',function(){
    return 'Directions go here';
});
Route::any('submit-form',function(){
    return 'Process Form';
});
Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. ' content here';
});
Route::get('about/{a}/{b}',function($a,$b){
    return $a.'and'.$b;
});
Route::get('where',function(){
    return redirect('about/directions');
});
Route::get('about/{theSubject}','AboutController@showSubject');

Route::get('/insert',function(){
    DB::insert('insert into posts(title,body) values(?,?)',['PHP with laravel','Laravel is the best framework']);
    return 'DONE';
});
Route::get('/read',function(){
    $result=DB::select('select * from posts where id = ?',[1]);
//    return $result;
    foreach ($result as $post){
        return $post -> title;
    }
});
Route::get('/update',function(){
    $updated = DB::update('update posts set title = \'New title hihi\' where id >?',[1]);
    return $updated;
});
Route::Get('/delete',function(){
    $delete = DB::delete('delete from posts where id = ?',[3]);
    return $delete;
});
Route::get('readAll',function (){
    $posts = Post::all();
    foreach ($posts as $p){
        echo $p->title.'<br>';
    }
});
Route::get('findID',function(){
    $posts = Post::where('id','>=',1)
        ->where('title','New title hihi')
        ->where('body','like','%new%')
        ->orderBy('id','desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title;
    }
});

Route::get('insertORM',function (){
    $p=new Post;
    $p->title = 'insert ORM';
    $p->body = 'inserted done done ORM';
    $p -> save();
});

Route::get('updateORM',function(){
    $p = Post::where('id',2)->first();
    $p->title = 'updated ORM';
    $p->body = 'updated Ahii DONE DONE';
    $p->save();
});

Route::get('deleteORM',function(){
    Post::where('id','>=','8')
        ->delete();
});
Route::get('destroyORM',function(){
    Post::destroy([1,3]);
});
