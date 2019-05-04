@extends('template')
@section('content')

       
        
    
  </div>
  </body>
</html>

<div class="container-fluid">
    <div class="jumbotron">
            <h1>List of Projects</h1>
        </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
    <th>Title</th>
    <th> Description</th> 
    <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($projects as $project)
      <a href="/projects/{{ $project->id }}">
      <tr>
        <td>{{$project['id']}}</td>
        <td>{{$project['title']}}</td>
        <td>{{$project['description']}}</td>
        <td><a href="{{action('ProjectsController@edit', $project['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProjectsController@destroy', $project['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div class="container-fluid">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>



  </div> <!-- /container -->


</div>
@endsection('content')