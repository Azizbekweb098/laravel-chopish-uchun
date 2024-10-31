@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
            <div class="col-8 mb-3">
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10px">title</th>
                        <th style="width: 10px">commet</th>
                        <th style="width: 10px">cetegory_id</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pst as $pt)
                    <tr>
                 
                        <td>{{ $pt->title }}</td>
                        <td>{{ $pt->commet }}</td>
                        <td>{{ $pt->ctg_id }}</td>
               
                        <td class="d-flex" style="gap: 5px;">
                        <a href="{{ route('admin.category.show', $pt->id) }}" class="btn btn-primary">show</a>
                            <a href="{{ route('admin.category.update', $pt->id) }}" class="btn btn-primary">Update</a>
                            <form  method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE') <!-- DELETE metodini qo'shish -->
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection