@extends('layouts.admin')

@section('MainContainer')
    <main>
        <section class="container-fluid">
            <h2 class="text-center">Edit Existing Post</h2>
        </section>

        <section class="container">
            @include('partials.errors')

            <fieldset>
                <form action=" {{ route('admin.update') }} " method="post">
                    <div class="form-group">
                        <label for="postTitle">Post Title</label>
                    <input type="text" class="form-control" id="postTitle" placeholder="Title" name="title" value="{{ $post['title'] }}">
                    </div>

                    <div class="form-group">
                        <label for="postContent">Post Content</label>
                        <textarea class="form-control" name="content" id="postContent" rows="3">
                            {{ $post['content'] }}
                        </textarea>
                    </div>
                    {{ csrf_field() }} <?php //always use this Cross-Site Request Forgery Protection ?>
                    <input type="hidden" name="id" value="{{ $postId }}">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </fieldset>
        </section>
    </main>    
@endsection
