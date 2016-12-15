<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <h1 class="text-center"></h1><hr>
	    <div class="text-center">
		<form method="post" action="product/create">
		    {{ csrf_field() }}
		    <input type="text" name="name" />
		    <input type="text" name="description" />
		    <input type="submit" value="go">
		</form>
	    </div>

            <div class="text-right"><b>Всего сообщений:</b><i class="badge">{{$count}}</i></div><br/>

	    @foreach ($products as $product)

	    <div class="messages">
		<div class="panel panel-default">			
		    <div class="panel-heading">
			<h3 class="panel-title">			
			    <span>{{$product->name}}</span>			
			    <span class="pull-right label label-info">{{$product->created_at}}</span>			
			</h3>
		    </div>

		    <div class="panel-body">
			{{$product->description}}
			<hr/>
			<div class="pull-right">
			    <a class="btn btn-info" href="#">
				<i class="glyphicon glyphicon-pencil"></i>
			    </a>
			    <form action="product/delete/{{ $product->id }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}

				<button class="btn btn-danger">Удалить задачу</button>
			    </form>
			</div>
		    </div>
		</div>
		@endforeach      

	    </div>     
		<div class="text-center">
			{{$products->render()}}
		</div>

	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>