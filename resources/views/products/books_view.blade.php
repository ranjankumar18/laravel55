<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Selected Books List</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>View Listed Book</h2><br  />
      
      <table class="table table-striped">
    <thead>
      <tr>
        <th>SN No.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        
      </tr>
    </thead>
    <tbody>
     @foreach($data as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->noteId}}</td>
        <td>{{$product->noteName}}</td>
        <td>{{$product->noteType}}</td>
        
      </tr>
      @endforeach
      
    </tbody>
  </table>
    </div>
  </body>
</html>