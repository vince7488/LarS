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
            <a href=" {{ route('admin.edit',['id' => substr("$_SERVER[REQUEST_URI]", -1)]) }} " class="btn btn-link" rel="bookmark">Edit</a>
            <?php //How?
                  //array_search($post,$posts)]
                  //route('admin.edit',['id' => $post['id']])
                  
                  //route('admin.edit',['id' => $postId])
                  //route('admin.edit',['id' => array_search($post,$posts)])

                  //This:
                  //$arrayIndex = array_search($post['title'], $array) //takes the post title name and outputs the array index number
            ?>
        </div>
    </article>

    {{ var_dump($post) }}<br/>

    @else
        <span class="alert alert-error">Error. No posts.</span>
    @endif
@endsection