<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">phone</th>
            <th scope="col">location</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($crud as $cruds)
    
        <tr>
            <td>{{$cruds->id}}</td>
            <td>{{$cruds->name}}</td>
            <td>{{$cruds->phone}}</td>
            <td>{{$cruds->location}}</td>
            <td>{{$cruds->email}}</td>
        </tr>
            <td>
                <a href="{{route('cruds.edit',$cruds->id)}}">Edit</a>
                <form action="{{route('cruds.destroy',$cruds->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        @endforeach
        </tbody>
      </table> 
</body>
</html>