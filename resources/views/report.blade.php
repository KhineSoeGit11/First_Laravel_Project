
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daily Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
    body{
        padding: 50px;
    }
</style>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	

	<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if (Session('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session('successMsg')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <strong>Daily Report</strong>
                        <a href="/user" class="btn btn-primary  float-right"><i class="fas fa-arrow-circle-left"></i> Back</a>
                    </div>
                    <form action="{{route('reports.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Report Title"  value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Report Description"  rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info btn-block">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>