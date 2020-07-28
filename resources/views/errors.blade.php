@if(count($errors) > 0)

<div class="alert alert-danger odst col-md-12">
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>

@endif