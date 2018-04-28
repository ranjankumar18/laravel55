<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Listing Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    
    <tbody>
     @foreach($data->elements as $note)
      <tr>
        <td>{{$note->id}}</td>
        <td>{{$note->name}}</td>
        <td>{{$note->courseType}}</td>
        <td>
          <form action="{{action('BookInfoController@addNote')}}" method="post">
            {{csrf_field()}}
            <input name="noteId" type="hidden" value="{{$note->id}}">
            <input name="noteName" type="hidden" value="{{$note->name}}">
            <input name="noteType" type="hidden" value="{{$note->courseType}}">
            <button class="btn btn-primary" type="submit">Save</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
