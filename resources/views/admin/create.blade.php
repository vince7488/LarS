@extends('layouts.admin')

@section('MainContainer')
    <main>
        <section class="container-fluid" role="heading">
            <h2 class="text-center">Write your New Post</h2>
        </section>

        <section class="container">
            @include('partials.errors')
            
            <fieldset>
                <form action=" {{ route('admin.create') }} " method="post">
                    <div class="form-group">
                        <label for="postTitle">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" placeholder="Title" name="title" value="">
                    </div>

                    <div class="form-group">
                        <label for="postContent">Post Content</label>
                        <textarea class="form-control" name="content" id="postContent" rows="3">
                        </textarea>
                    </div>
                    {{ csrf_field() }} <?php //always use this Cross-Site Request Forgery Protection ?>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </fieldset>
        </section>
    </main>    
@endsection
