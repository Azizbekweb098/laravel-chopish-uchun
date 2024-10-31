@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 350px;">
<a href="{{ route('admin.mahsulotlar.create') }}"  class="btn btn-primary" height="30px">create</a>
<br>
<br>
    <div class="row">
  
        <div class="col-8 d-flex" style="gap: 20px;">
      
        <br>
        <br>
  @foreach ($mahsulotlar as $mhs)
  <div class="card" style="width: 18rem;">
    
  <img src="{{  asset('images/' . $mhs->image) }}" class="card-img-top" alt="..." >
  <div class="card-body">
    <h5 class="card-title">{{ $mhs->name }}</h5>
    <p class="card-text">{{ $mhs->commet }}</p>
    <a href="{{  route('admin.mahsulotlar.show', $mhs->id)  }}" class="btn btn-primary">show</a>
    <a href="#" class="btn btn-primary">update</a>
    <br>
    <br>
    <form action="{{ route('admin.mahsulotlar.destroy', $mhs->id) }}" method="POST">
        @csrf
        @method('DELETE')
       <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
<br>
<br>

  </div>
</div>
  @endforeach
        </div>
    </div>
</div>
@endsection