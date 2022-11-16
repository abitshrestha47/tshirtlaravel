<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        {{$list}}
      <div class="wrap m-4">
        <h1>Tshirt collection and details</h1>
            <form action="{{route('sub')}}" class="p-4" method="post">
                @csrf
                <label for="batch">BatchNo.:</label>
                <input type="text" name="batch" placeholder="enter batchno" required>
                <br><br>
                 <label for="quantity">Quantity:</label>
                 <input type="text" name="quantity" placeholder="enter quantity" required>
                <br><br>
                <label for="status">Status:</label>
                <!-- <input type="text" name="status" placeholder="enter status"> -->
                <select name="status" id="">
                    <option value="good">good</option>
                    <option value="bad">bad</option>
                </select>
                 <br><br>
                 <label for="Remarks">Remarks:</label>
                 <input type="text" name="remarks" placeholder="enter remarks" required>
                 <br><br>
                <button type="submit" class="btn btn-primary">Add item</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BatchNo.</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th colspan="2">Action</th>
                        <th>Datacreated</th>
                    </tr>
                </thead>
                @foreach($list as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->batchno}}</td>
                        <td>{{$value->quanity}}</td>
                        <td>{{$value->status}}</td>
                        <td>{{$value->remarks}}</td>
                        <td><a href="/delete/{{$value->id}}">Delete</a></td>
                        <td><a href="/edit/{{$value->id}}">Edit</a></td>
                        <td>{{$value->created_at}}</td>
                    </tr>
                @endforeach
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
