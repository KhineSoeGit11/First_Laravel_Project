@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-info" style="text-align: center"><h3>Your Informations</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Name:{{Auth::user()->name}}</h5><br>
                    <h5>Email:{{Auth::user()->email}}</h5><br>
                    <h5>Position: <span class="badge badge-pill badge-primary"> {{Auth::user()->position}}</span></h5>
                    <h5>Password :{{Auth::user()->password}}</h5><br>
                    <h5>Created_at : {{Auth::user()->created_at}}</h5><br>
                    <h5>Updated_at : {{Auth::user()->updated_at}}</h5><br>

                    <a href="/reports" class="btn btn-info btn-block">Daily Report To Admin</a>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
