@extends('layouts.master')

@section('title', 'Category Title')

@section('big-title', 'Category list')
    
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Category</h3>
                <a href="{{route('category.create')}}" class="float-right">
                    <button class="btn btn-success">
                        <i class="fas fa-plus-circle"></i>&nbsp;&nbsp; Create
                    </button>
                </a>
                <hr class="top-hr"> 
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 150px">ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 175px; text-align:center;">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                            @foreach ($category as $categories)
                                <tr>
                                    <td>{{ $categories -> id }}</td>
                                    <td>{{ $categories -> name }}</td>
                                    <td>{{ $categories -> description }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#">
                                                <button type="button" class="btn btn-primary"> <i class="fas fa-eye"></i> </button> &nbsp;&nbsp;
                                            </a>
                                            <a href="#">
                                            {{-- <a href="{{ route('category.edit', $categories->id)}}"> --}}
                                                <button type="button" class="btn btn-success"> <i class="fas fa-edit"></i> </button> &nbsp;&nbsp;
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn bg-danger"> <i class="fas fa-trash"></i> </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                {{-- <div class="card-footer">
                    {{ $category->links() }}
                </div> --}}
            </div>
            <!-- /.card-body -->
            
        </div>
    </div>
</div>
@endsection