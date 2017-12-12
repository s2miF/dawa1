<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Subjects</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

<div class="container">
    <div class="row"> 
    <br>
    <div class="col-md-2"></div>
    <div class="col-md-6">
    <table class="table table-primary">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
        </thead>
        <tbody>
      
            @foreach($subs as $indexKey => $sb)
                <tr>
                    <td>{{ $sb->id }}</td>
                    <td>{{ $sb->title }}</td>
                    <td>{{ $sb->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>


    </div>

<div class="row">
<div class="col-md-2"></div>
    <div class="col-md-2">
    <ul class="list-group">
    @foreach($subs as $indexKey => $sb)
  <li class="list-group-item list-group-item-danger">{{ $sb->title }}</li>
  @endforeach
 
</ul>
    </div>
</div>


</div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
