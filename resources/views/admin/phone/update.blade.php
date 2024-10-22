@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.phone.update', $phone->id) }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="mb-3">
    <label class="form-label">User</label>
    <input type="text" class="form-control" value="{{ $phone->user_id }}" name="user_id">
  </div>
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" value="{{ $phone->number }}" name="number">
  </div>
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="file" class="form-control" value="{{ $phone->image }}" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection