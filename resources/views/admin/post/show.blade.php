@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
            <div class="col-8 mb-3">
                <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create</a>
            </div>
            <h2>
                {{ $post->title }}
            </h2>

        <ul>
        @foreach ($post->tags as $tag  )
            <li>
                {{ $tag->name }}
            </li>
            @endforeach
        </ul>
                            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
        </div>
    </div>
</div>

@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
