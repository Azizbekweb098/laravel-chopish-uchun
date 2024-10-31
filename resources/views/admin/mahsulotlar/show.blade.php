@extends('layouts.admin')

@section('content')
<div class="container">
<a href="#" class="btn btn-primary" style="margin-left: 350px;">chiqish</a>
<br>
<br>
    <div class="row">
    
        <div class="col-8" style="margin-left: 350px;">
        
        <div class="card" style="width: 18rem;">
        <img src="{{  asset('images/' . $mah->image) }}" class="card-img-top" alt="..." >
  <div class="card-body">
    <h5 class="card-title">{{ $mah->name }}</h5>
    <p class="card-text">{{ $mah->commet }}</p>
    <p><span>{{ $mah->created_at }}</span></p>
  </div>
</div>
        </div>
    </div>
</div>
@endsection