<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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

Route::get('/', function () {
    return view('welcome');
});

// // Route::get('users/{id}', function ($id) {
// //     return "This is post number ". $id;
// // });

// Route::get('/contact/name', array( 'as' => 'admin.home', function () {
//     $url = route('admin.home');

//     return "This is the contact Page". $url;
// }));


//  Route::get('/post', 'PostController@index');

// Route::resource('posts', 'PostController');

// Route::get('/contact', 'PostController@contact');

// Route::get('post/{id}/{name}/{password}', 'PostController@show_post');

// Route::get('insert', function(){
//     DB::insert('insert into posts(title, content) values("praised God", "Halleluayh")');
// });

// Route::get('read', function(){
//     $results = DB::select('select * from posts where id=?',[1]);

//     foreach($results as $results){
//         return $results ->title;
//     }

// });

// Route::get('update', function(){
//     $updated =DB::update('update posts set title = "update title" where id=1');

//     return $updated;
// });

// Route::get('delete', function(){
//     $deleted = DB::delete('delete from posts where id = 1');

//     return $deleted;
// });


//eloquents
// Route::get('find', function(){
//     $posts = Post::find(2);

//     return $posts->title;

//     // foreach($posts as $post) {
//     //     return $post->title;
//     // }

// });

// Route::get('findwhere', function(){
//     $posts=Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();

//     // return $posts;

//     foreach($posts as $posts){
//         return $posts->title;
//     }
// } );

// Route::get('findmore', function(){
//     $posts=Post::where('users_count', '<', 50)->firstOrFail();

//     return $posts;
// });

// Route::get('basicinsert', function(){
//     $post = new Post;

//     $post->title = 'God is great';
//     $post->content = 'Jesus is amazing';

//     $post->save();

// });

// Route::get('basicinsertu', function(){
//     $post = Post::find(2);

//     $post->title = 'God is great';
//     $post->content = 'Jesus is amazing';

//     $post->save();

// });

// Route::get('create', function(){

//     Post::create(['title'=>'the create methos', 'content'=>'wow i\'am learning', 'is_admin'=>0]);
// });

// Route::get('update', function(){
//     Post::where('id', 2)->update(['title'=>'NEW PHP TITLE', 'content'=>'wow larave is nice oh omo']);
// });


// Route::get('delete', function(){
//     $post = Post::find(2);

//     $post->delete();
// });

// Route::get('delete2', function(){
//     Post::destroy([4,5]);


// });


// Route::get('softdelete', function(){
//     Post::find()->delete();
// });

// Route::get('readsoftdelete', function(){
    // $post = Post::find(1);

    // return $post;

    // $post = Post::withTrashed()->where('id', 6)->get();

    // // return $post;
    // foreach($post as $posts)
    // {
    //     $shed = $posts->content;
    //     return $shed;
    // }

//     $post = Post::onlyTrashed()->where('isadmin', 0)->get();

//     return $post;
// });

// Route::get('restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
// });

// |--------------------------------------------------------------------------
// | ELOQUENT RELATIONSHIPS
// |--------------------------------------------------------------------------
// |


//one to one relationship
// Route::get('user/{id}/post', function($id){
//     return User::find($id)->post->content;
// });

// Route::get('post/{id}/user', function($id){
// return Post::find($id)->user->name;
// });

// Route::get('posts', function(){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         echo $post->title;
//         echo "<br>";
//     }
// });

//many to many relationship
// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBY('id', 'desc')->get();

//     // foreach($user->roles as $role)
//     // {
//     //     return $role->name;
//     // }

//     return $user;
// });


//accessing intermediary/pivot table
Route::get('user/pivot', function(){
    $user = User::find(1);

    foreach($user->roles as $role)
    {
        echo $role->pivot->created_at;
    }
});


