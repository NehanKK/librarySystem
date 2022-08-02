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
    h2{
        color:white;
        text-shadow: 0 0 3px #FF0000, 0 0 5px #000008;
    }
</style>
@section('content')
<div id="div">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-2"><h2>Borrowed Books<img src="{{ url('./images/rightarrow.png') }}" alt=""style="max-height:30px"></h2>
</div>
<div class="col-md-2">
</div>
        <div class="col-md-4" style="margin-top:5px">
        <form action="{{ url('borrowed-Books') }}" method="GET">
  <div class="form-group">
    
    <input type="text" class="form-control"  name="searchkey" aria-describedby="emailHelp" placeholder="Search The Book" value="{{ $searchkey }}">
    
  </div>
 
  <button type="submit" class="btn btn-primary" style="margin-top:2px" >SEARCH</button>
</form>
</div>
<div class="col-md-2">
</div>
<div class="col-md-2">
   <a href="{{ url('/books') }}"><button type="button" class="btn btn-info" style="margin-top:10px"><img src="{{ url('./images/bookp.png') }}" alt=""style="max-height:50px">Go To Library</button></a>

</div>
</div>
    <div class="row justify-content-center">
    <div class="col-md-2">
</div>
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
            <td scope="col"><a href="{{url('return-book/'.$book->id)}}" class="btn btn-danger" >Return</a>
</td>

        </tr>
        @endforeach
    </tbody>
</table>
       

</div>
        </div>
        <div class="col-md-2">
    <img src="{{ url('./images/userbook.png') }}" alt=""style="max-height:500px">

</div>
    </div>
</div>
</div>
@endsection