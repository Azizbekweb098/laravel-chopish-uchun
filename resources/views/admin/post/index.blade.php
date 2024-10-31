@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container" style="margin-left: 320px; width: 60%;">
    <div class="row">
        <div class="card-body">
            <div class="col-8 mb-3">
                <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-bordered" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10px">title</th>
                        <th style="width: 10px">description</th>
                        <th style="width: 10px">category</th>
                        <th style="width: 10px">image</th>
                        <th style="width: 10px">slug</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($post as $pst)
                    <tr>
                 
                        <td>{{ $pst->title }}</td>
                        <td>{{ $pst->description }}</td>
                        <td>{{ $pst->category->name ?? 'ulanmagan' }}</td>
                        <td>{{ $pst->image }}</td>
                        <td>{{ $pst->slug }}</td>
               
                        <td class="d-flex" style="gap: 5px;">
                        <a href="{{ route('admin.post.show', $pst->id) }}" class="btn btn-primary">show</a>
                            <a href="{{ route('admin.user.edit', $pst->id) }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('admin.user.destroy', $pst->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE') <!-- DELETE metodini qo'shish -->
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                
            </table>
                            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
        </div>
    </div>
</div>

@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
