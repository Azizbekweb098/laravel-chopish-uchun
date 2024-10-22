@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
            <div class="col-8 mb-3">
                <a href="{{ route('admin.phone.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10px">name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th style="width: 40px">image</th>
                        <th style="width: 40px">halati</th>
                        

                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                 
                        <td>{{ $user->name }}</td>
                        <td>
                            <div style="width: 55%;">{{ $user->email }}</div>
                        </td>
                        <td class="d-flex" style="gap: 5px;">
                            {{ $user->phone->number ?? 'kemadi'  }}
                        </td>
                        
                        <td>
                            <img src="{{ asset('images/' . $user->image->image ?? 'kemadi') }}" alt="" width="200px">
                        </td>
                        <td class="d-flex" style="gap: 5px;">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
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