@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.post.store') }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">


    @csrf

    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">dectrection</label>
        <input type="text" class="form-control" name="description" value="{{ old('description') }}">
    </div>
 <div class="form-group">
    <label for="category">Kategoriya</label>
    <select name="category_id" id="" class="form-control">
        @foreach ($category as $categor )
        <option value="{{ $categor->id }}">{{ $categor->name }}</option>
        @endforeach
    </select>
 </div>
 <div class="form-group">
    <label for="category">Kategoriya</label>
    <select name="tag_id[]" id="" class="form-control" multiple>
        @foreach ($tags as $tag )
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
 </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


