<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @else
<div class="alert alert-success">
       Estimado Usuario registro exitoso!!!!!!!!!!!!!!!!!!!!!!!!!! 
    </div>
@endif

<!-- Create Post Form -->