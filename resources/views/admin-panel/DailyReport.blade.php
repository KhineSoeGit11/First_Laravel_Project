@extends('admin-panel.master')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2">
                <a href="/admin" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Back</a><br>
            </div>
            <div class="col-md-7">
                @if (Session('successMsg'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session('successMsg') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @foreach ($reports as $report)
                    <form action="{{ url('/daily_reports/'.$report->id.'/delete') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="float-left"><font color="white">{{ $report->title}}</font></h4>
                                <h5 class="float-right"><font color="white">{{ $report->created_at}}</font></h5>
                                
                            </div>
                            <div class="card-body">
                                {{ $report->description}}
                            </div>
                            <div class="card-footer bg-dark">
                                <button type="submit" class="btn btn-sm btn-danger float-right" onclick="return confirm('Are you sure to delete?')"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </form><br>
                @endforeach
                
                {{ $reports->links()}}
                
            </div>
            <div class="col-md-3">
                <form action="{{ url('/search_reports')}}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="search_data" class="form-control" placeholder="Search Report"  aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button type='submit' class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection