@extends('layouts.admin')

@section('MainContainer')
    <main>
        <section class="container-fluid">
            <h2 class="text-center">What would you like to do?</h2>

            <div class="row justify-content-around align-items-center" style="margin: 2em auto;">
                <a href=" {{ route('admin.create') }} " class="btn btn-primary btn-lg">Create A new Post</a>
            </div>

            <div class="container" style="border: 1px #666 solid; border-radius:15px; padding: 15px;">
                <div class="row">
                    <div class="col-12">
                        
                        @if(Session::has('info'))
                            <div class="alert alert-info">
                                <span class="text-info"> {{ Session::get('info') }} </span>
                            </div>
                        @elseif(Session::has('success'))
                            <div class="alert alert-success">
                                <span class="text-success"> {{ Session::get('success') }} </span>
                            </div>
                        @endif

                        <h3>Posts</h3>

                        <ul class="normal-list">
                            @foreach($posts as $post)
                                @if($post['title'] != null && $post['content'] != null)
                                    <li>
                                        <a href="{{ route('main.post', ['id' => array_search($post, $posts)]) }}" rel="bookmark"> {{ $post['title'] }} read More&hellip;</a>&emsp;<a href=" {{ route('admin.edit',['id' => array_search($post,$posts)]) }} " class="btn btn-primary btn-sm" rel="bookmark">Edit</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>    
@endsection
