<h1> Add New cruds </h1>

<form action="{{route('cruds.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="phone">Phone:</label>
    <input type="number" id="phone" name="phone"><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="submit">Submit</button>

</form>