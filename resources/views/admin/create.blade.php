@extends('layouts.admin')

@section('MainContainer')
    <main>
        <section class="container-fluid">
            <h2 class="text-center">Write your New Post</h2>
        </section>
        <section class="container">
            <fieldset>
                <form action=" {{ route('admin.create') }} " method="post">
                    <div class="form-group">
                        <label for="postTitle">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <label for="postContent">Post Content</label>
                        <textarea class="form-control" id="postContent" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </fieldset>
        </section>
    </main>    
@endsection
