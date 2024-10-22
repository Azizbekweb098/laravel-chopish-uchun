@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
            <div class="col-8 mb-3">
                <a href="{{ route('admin.tell.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10px">Rasm</th>
                        <th>User</th>
                        <th>name</th>
                        <th>surname</th>
                        <th>phone</th>
                        <th style="width: 40px">Holati</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tells as $tell)
                    <tr>
                        <td>
                            <img src="{{ asset('images/' . $tell->image) }}" alt="" width="200px">
                        </td>
                        <td>{{ $tell->user_id }}</td>
                        <td>
                            <div style="width: 55%;">{{ $tell->name }}</div>
                         
                        </td>
                        <td>
                        
                            <div style="width: 55%;">{{ $tell->surname }}</div>
                         
                        </td>
                        <td>
                         
                            <div style="width: 55%;">{{ $tell->phone }}</div>
                        </td>
                        <td class="d-flex" style="gap: 5px;">
                            <a href="{{ route('admin.phone.edit', $tell->id) }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('admin.phone.destroy', $tell->id) }}" method="POST" style="display:inline;">
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
