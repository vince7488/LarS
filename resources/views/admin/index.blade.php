@extends('layouts.admin')

@section('MainContainer')
    <main>
        <section class="container-fluid">
            <h2 class="text-center">What would you like to do?</h2>

            <div class="row justify-content-around align-items-center">
                <a href=" {{ route('admin.create') }} " class="btn btn-primary btn-lg">Create A new Post</a>
            </div>

        </section>
    </main>    
@endsection
