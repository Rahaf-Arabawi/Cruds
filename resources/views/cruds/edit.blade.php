<h1> Edit New cruds </h1>

<form action="{{route('cruds.update',$crud->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$crud->name}}"><br><br>

    <label for="phone">Phone:</label>
    <input type="number" id="phone" name="phone" value="{{$crud->phone}}"><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value="{{$crud->location}}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$crud->email}}"><br><br>

    <button type="submit">Update</button>

</form>