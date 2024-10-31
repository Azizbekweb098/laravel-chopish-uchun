@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
          <h2>{{ $ctg->name }}</h2>
          <ul>
          @foreach ($ctg->posts as $pst )
         <li>
            {{ $pst->title }}
         </li>
       @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection