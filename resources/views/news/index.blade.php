<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>News</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
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
        <th>Content</th>
      </tr>
        </thead>
        <tbody>
      
            @foreach($news as $indexKey => $n)
                <tr>
                    <td>{{ $n->id }}</td>
                    <td>{{ $n->title }}</td>
                    <td>{{ $n->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>


    </div>

<div class="row">
<div class="col-md-6">
<h2 class="tit_cat1">القسم الثاني</h2>

@foreach($news as $indexKey => $n)

        <div class="col-sm-4 col-md-4" style="margin-bottom: 20px">
            <div class="post">
                <div class="post-img-content">
                    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive" style="width: 100%;height: 200px;"/>
                    <span class="post-title"><b>{{ $n->title }}</b>
                </div>
                <div class="content">
                    <div class="author">
                        بواسطة <a href="#"><b>مالك</b></a> |
                        بتاريخ <time datetime="2014-01-20">13-12-2016</time>
                    </div>
                    <div class="text-justify">
                    {{ $n->content }}
                    </div>
					<hr />
                    <div class="text-left">
                        <a href="#" class="btn btn-warning btn-sm">اقرأ المزيد &larr;</a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
</div>

</div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
