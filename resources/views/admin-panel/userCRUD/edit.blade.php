@extends('admin-panel.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/user_crud') }}" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Back</a>
                        <h1><strong>User Create</strong></h1>
                    </div>
                    
                    <form action="{{url('user_crud/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body"> 
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ $user->name ?? old('name')}}">
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" value="{{ $user->email ?? old('email')}}">
                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Position</label>
                                <select name="position" class="form-control">
                                    <option value="">Select Position</option>
                                    <option value="admin"
                                    @if ($user->position == 'admin')
                                        selected
                                    @endif
                                    >Admin</option>
                                    <option value="user"
                                    @if ($user->position == 'user')
                                        selected
                                    @endif
                                    >User</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info btn-block">Update</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection