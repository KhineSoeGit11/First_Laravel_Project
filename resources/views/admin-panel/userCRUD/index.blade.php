@extends('admin-panel.master')
@section('content')
    
   <div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            @if (Session('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session('successMsg')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td><span class="badge badge-pill badge-primary">{{ $user->position}}</span></td>
                                <td>
                                    <form action="{{ url('user_crud/'.$user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a type="button" href="{{ url('user_crud/'.$user->id.'/edit')}}" class="btn btn-success"><i class="fas fa-user-edit"></i> Edit</a>
                                        <button type="submit"  onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fas fa-user-times"></i> Delete</button>
                                    </form>
                                    
                                </td>
                                
                            </tr>
                        @endforeach
                        
                    </tbody>
                </thead>
            </table>
            {{ $users->links()}}
        </div>
    </div>
   </div>
    
@endsection