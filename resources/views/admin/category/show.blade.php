@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
          <h2>{{ $category->name }}</h2>

          @foreach ($category->posts as  $post)
          <ul>
            <li>{{ $post->title }}</li> 
          </ul>
          @endforeach
          
        </div>
    </div>
</div>

@endsection