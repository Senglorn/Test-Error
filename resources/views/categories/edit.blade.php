{{-- @extends('layouts.master')

@section('title', 'Edit Category')

@section('big-title', 'Edit Category')

@section('content')
    
<div class="row">
    <div class="col-md-6">
        
        <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">Please Enter Your New Information</h3>
            </div>
            
            <div class="card-body">
                @if ( $errors->any() )
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif    
                <form action="{{ route('category.update') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" name="name"  >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Enter Description" name="description">  </textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Save </button>
                    <a href="{{ route('category.index') }}">
                        <button  class="btn btn-danger"><i class="fas fa-arrow-left"></i> Cancel </button>
                    </a>
                </form>
            </div> {{-- card-body --}}
        {{-- </div>
    </div>
</div>

@endsection --}} 
