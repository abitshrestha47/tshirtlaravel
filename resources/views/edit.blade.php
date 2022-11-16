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
    <form action="{{route('pass')}}" method="post">
        @csrf
        <input type="text" value="{{$list->id}}" name='id'>
        <label for="batch">Batch:</label>
        <input type="text" name="batch" placeholder="enter batchno" value="{{$list->batchno}}"><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" name='quantity' value="{{$list->quanity}}" placeholder="enter quantity"><br><br>
        <label for="status">Status</label>
        <input type="text" name='status' placeholder="enter the status" value="{{$list->status}}"><br><br>
        <label for="remarks">Remarks</label>
        <input type="text" value="{{$list->remarks}}" name="remarks" placeholder="enter remarks"><br><br>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
