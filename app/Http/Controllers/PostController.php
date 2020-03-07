<?php
/* 
* You can generate a controller via the terminal:
* cd to %project_folder%/ 
* run `php artisan make:controller %ControllerName%`
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Session\Store;

use App\Post;

class PostController extends Controller
{
    //retrieve sessions to main/index
    public function getIndex(Store $session)
    {
        $post = new Post();
        $posts = $post->getPosts($session);
        return view('main.index', ['posts' => $posts]);
    }

    public function getAdminIndex(Store $session)
    {
        $post = new Post();
        $posts = $post->getPosts($session);
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost(Store $session, $id)
    {
        $post = new Post();
        $post = $post->getPost($session, $id);
        return view('main.post', ['post' => $post]);
    }

    public function getAdminCreate()
    {
        return view('admin.create');
    }

    public function postAdminCreate(Store $session, Request $request)
    {
        //validate it first
        $this->validate($request, [
            'title' => 'min:5|max:140|required',
            'content' => 'min:140|required'
        ]);

        //work on the posts
        $post = new Post();
        $post->addPost($session,$request->input('title'),$request->input('content')); //from Post.php
        return redirect()->route('admin.index')->with('Success', 'Post, &quot;' . $request->input('title') . '&quot;, created');
    }

    public function getAdminEdit(Store $session, $id) 
    {
        $post = new Post();
        $post = $post->getPost($session, $id);
        return view('admin.edit',['post' => $post, 'postId' => $id]);
    }

    public function postAdminUpdate(Store $session, Request $request)
    {
        $this->validate($request, [
            'title' => 'min:5|max:140|required',
            'content' => 'min:140|required'
        ]);

        $post = new Post();
        $post->editPost(
            $session, 
            $request->input('id'),
            $request->input('title'),
            $request->input('content')
        );
        return redirect()->route('admin.index')->with('info', 'Post &quot;' . $request->input('title') . '&quot; was edited'); //$request->input('title') is the <input name="" value
    }
}
