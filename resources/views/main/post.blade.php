@extends('layouts.master')

@section('MainContainer')
    @if (!empty($post))
    <article class="container" style="border:1px #666 solid; border-radius: 15px;padding:10px;">
        <div class="row">
            <hgroup class="col-md-12">
                <h1>{{ $post['title'] }}</h1>
            </hgroup>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $post['content'] }}
            </div>
        </div>
        <div class="row justify-content-end">
            <a href=" {{ route('admin.edit',['id' => $post['id']]) }} " class="btn btn-link" rel="bookmark">Edit</a>
            <?php //array_search($post,$posts)]
                  //route('admin.edit',['id' => $post['id']])
                  
                  //$post['title']
                  //$post['content']
                  //route('admin.edit',['id' => $postId])
            ?>
        </div>
    </article>
    @else
        <span class="alert alert-error">Error. No posts.</span>
    @endif
@endsection