<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    


        
     

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Url</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($photo as $data) 
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->url}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>
                <button class="btn btn-info">Edit</button>
                <button class="btn btn-warning">Show</button>
                <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>





<script src="{{asset("js/app.js")}}"></script>    
</body>
</html>