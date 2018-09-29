@if(count($errors) > 0)
    @foreach($errors -> all() as $error)
        <div class ="alert alert-damage">
            {{$error}}
        </div>
    @endforeach
@endif