@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.user.update', $user->id) }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" value="{{ $user->name }}" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">email</label>
    <input type="email" class="form-control" value="{{ $user->email }}" name="email">
  </div>



  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection