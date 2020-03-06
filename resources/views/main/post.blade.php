@extends('layouts.master')

@section('MainContainer')
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
        </div>
    </article>
    
@endsection