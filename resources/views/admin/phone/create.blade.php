@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.phone.store') }}" method="POST" style="max-width: 400px; margin: auto;" enctype="multipart/form-data">
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
      
        @endforeach
    </ul>
    @endif
    @csrf
    <div class="mb-3">
        <label class="form-label">User</label>
        <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
        @error('user_id')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="number" class="form-control" name="number" value="{{ old('number') }}">
        @error('number')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
        @error('image')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
