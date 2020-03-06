@extends('layouts.master')

@section('MainContainer')

    <div class="jumbotron text-center">
        <h1>This is <strong>LarS</strong></h1>
        <p>
            <span class="small">
                <span class="very-emphasised">LarS</span> (<span class="very-emphasised">Lar</span>avel <span class="very-emphasised">S</span>tarter) is Vernard Mercader's Laravel Biolerplate template, that includes all the good stuff in starting a decent website.
            </span>
        </p>
        <p>
            <span>{{ "Thanks for visiting " . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}</span>
        </p>
    </div>

    <main>
        <section class="container-fluid" style="border-top: 1px #999 solid; border-bottom:1px #999 solid">
            <h2 class="text-center">What's included</h2>

            <div class="container">
                
                <div class="text-center">
                    Included in the build are some of the Web's useful tools for Web Artist's and Developers
                </div>

                <div class="row" style="margin: 2rem auto">
                    <div class="col-sm-6">
                        <ul>
                            <li>Bootstrap4</li>
                            <li>jQuery Libray (for Bootstrap, and everything nice)</li>
                            <li>NumeralJS</li>
                            <li>Search Console (Google)</li>
                        </ul>
                        
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li>SlickJS</li>
                            <li>LazyLoad JS</li>
                            <li>Icon Libraries (FontAwesome Free)</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container-fluid" style="background-color: #e9e4ed">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4" style="background-color:#ccc"></div>
                    <dl class="col-md-8">
                        <dt class="h4">Title</dt>
                        <dd>
                            Content 1
                            <a href=" {{ route('main.post',['id' => 1],['postId' => 1]) }} " rel="bookmark">read More&hellip;</a>
                        </dd>
                    </dl>
                </div>
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4" style="background-color:#ccc"></div>
                    <dl class="col-md-8">
                        <dt class="h4">Title</dt>
                        <dd>
                            Content 2
                            <a href=" {{ route('main.post',['id' => 2]) }} " rel="bookmark">read More&hellip;</a>
                        </dd>
                    </dl>
                </div>
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4" style="background-color:#ccc"></div>
                    <dl class="col-md-8">
                        <dt class="h4">Title</dt>
                        <dd>
                            Content 3
                            <a href=" {{ route('main.post',['id' => 3]) }} " rel="bookmark">read More&hellip;</a>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>
    </main>
@endsection

