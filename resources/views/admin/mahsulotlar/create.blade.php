@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 200px;">

<form action="{{ route('admin.mahsulotlar.store') }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">


    @csrf
    <div class="mb-3">
        <label class="form-label">Card_id</label>
        <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
   
    </div>
    <div class="mb-3">
        <label class="form-label">name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">commet</label>
        <input type="text" class="form-control" name="commet" value="{{ old('commet') }}">
        @error('commet')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>
<br>
<br>
@endsection