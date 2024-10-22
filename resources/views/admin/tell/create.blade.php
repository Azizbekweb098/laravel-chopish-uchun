@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.tell.store') }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">


    @csrf

    <div class="mb-3">
        <label class="form-label">User-id</label>
        <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">surname</label>
        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">tell</label>
        <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">User</label>
        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
