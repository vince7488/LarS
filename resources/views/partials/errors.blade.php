@if( count($errors->all()) )
    <div class="alert alert-danger">
        <ul class="normal-list">
            @foreach($errors->all() as $error)
            <li>
                <span class="text-danger">
                    {{ $error }}
                </span>
            </li>
            @endforeach
        </ul>
    </div>
@endif