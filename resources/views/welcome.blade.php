@extends('layouts.master')

@section('MainContainer')
    <main>
        <section class="container-fluid">
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
    </main>    
@endsection
