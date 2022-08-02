@extends('layouts.app')
<style>
   #div{
        background-image: linear-gradient(red, yellow);
    }
   th{
    background-image: linear-gradient(black, black);
    color:white;

    }
    td{
    background-image: linear-gradient(white, white);

    }
</style>
@section('content')
<div id="div">
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ url('borrowed-Books') }}" method="GET">
  <div class="form-group">
    
    <input type="text" class="form-control"  name="searchkey" aria-describedby="emailHelp" placeholder="" value="{{ $searchkey }}">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
               
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col" style="background-color:red">Title</th>
            <th scope="col">Description</th>
            <th scope="col">price</th>
            <th scope="col">Type</th>
            <th scope="col">Return</th>
        </tr>
    </thead>
    <tbody>
    @foreach($brbooks as $book)
        <tr>
            <td scope="col">{{$book->title}}</td>
            <td scope="col">{{$book->description}}</td>
            <td scope="col">{{$book->price}}</td>
            <td scope="col">{{$book->type}}</tdW>
            <td scope="col"><a href="{{url('return-book/'.$book->id)}}" class="btn btn-primary" >Return</a>
</td>

        </tr>
        @endforeach
    </tbody>
</table>
       

</div>
        </div>
    </div>
</div>
</div>
@endsection