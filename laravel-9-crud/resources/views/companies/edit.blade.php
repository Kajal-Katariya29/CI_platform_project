<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> -->
@extends('layouts.app')
@section('content')


<div class="container mt-3">
    <h3>Edit Company</h3>
    <div class="pull-right">
         <a class="btn btn-primary" href="/back">Back</a>
    </div>
  <form action="/update/{{$companies->id}}" method="post">
    @csrf
    <div class="mb-3 mt-3">
    <div class="mb-3">
      <label for="name">Company Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="name" value="{{ $companies->name }}">
           @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
    </div>
      <label for="email">Company Email:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{$companies->email}}">
           @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Company Address:</label>
      <textarea class="form-control" rows="5" id="comment" name="address">{{$companies->address}}</textarea>
          @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
           @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection('content')

<!-- </body>
</html> -->
