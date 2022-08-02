@extends('layouts.app')

<style>
    #div{
        background-image: linear-gradient(red, yellow);
    }
    .card{
        height:110%;
    }
   h2{
        color:white;
        text-shadow: 0 0 3px #FF0000, 0 0 5px #000008;
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
<div class="container" style="padding:0px">
<div class="row justify-content-center">
<div class="col-md-2"><h2>Library Book Shelf<img src="{{ url('./images/rightarrow.png') }}" alt=""style="max-height:30px"></h2>
  
</div>
<div class="col-md-2">
</div>
        <div class="col-md-4" style="margin-top:5px">
        <form action="{{ url('books') }}" method="GET">
  <div class="form-group">
    
    <input type="text" class="form-control"  name="searchkey2" aria-describedby="emailHelp" placeholder="Search The Book" value="{{ $searchkey2 }}">
    
  </div>
 
  <button type="submit" class="btn btn-primary" style="margin-top:2px" >SEARCH</button>
</form>
</div>
<div class="col-md-2">
</div>
<div class="col-md-2">
<a href="{{ url('/borrowed-Books') }}"><button type="button" class="btn btn-info" style="margin-top:50px"><img src="{{ url('./images/bookp.png') }}" alt=""style="max-height:50px">Go to Your Shelf</button></a>
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
        <th scope="col">Id</th>
            <th scope="col" >Title</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            <th scope="col">price</th>
            <th scope="col">Return</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td scope="col">{{$book->id}}</td>
            <td scope="col">{{$book->title}}</td>
            <td scope="col">{{$book->description}}</td>
            <td scope="col">{{$book->type}}</td>
            <td scope="col">{{$book->price}}</td>
            <td scope="col"><a href="{{url('borrow-book/'.$book->id)}}" class="btn btn-success" >Borrow</a>
</td>

        </tr>
        @endforeach
    </tbody>
</table>
         
</div>
        </div>
        <div class="col-md-2">
    <img src="{{ url('./images/bookshelf.png') }}" alt=""style="max-height:500px">
</div>
    </div>
    </div>
</div>
@endsection