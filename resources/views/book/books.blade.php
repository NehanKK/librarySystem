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
        text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
    }
</style>
@section('content')
<div id="div">
<div class="container" style="padding:0px">
    <div class="row justify-content-center">
    <div class="col-md-2">
   <h2>Book Shelf<img src="{{ url('./images/rightarrow.png') }}" alt=""style="max-height:30px"></h2>
   <a href="{{ url('/borrowed-Books') }}"><button type="button" class="btn btn-success" style="margin-top:50px"><img src="{{ url('./images/bookp.png') }}" alt=""style="max-height:50px">Go to Your Shelf</button></a>
</div>
        <div class="col-md-8">
            <div class="row">
            <!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->
                @foreach($books as $book)
                <div class="col-md-3"style="padding:8px">
            <div class="card" >
                <div class="card-header">{{$book->title}}</div>
                

                <div class="card-body" Styles="min-height:1500px">
                    <img src="{{url('/images/'.$book->image)}}" style="max-height:100px">
                {{$book->description}}<br>
                {{$book->price}}<br>
                {{$book->type}}<br>
                <a href="{{url('borrow-book/'.$book->id)}}" class="btn btn-primary" >Borrow</a>
                </div>
            </div>
            
</div>
@endforeach
</div>
        </div>
        <div class="col-md-2">
    <img src="{{ url('./images/bookshelf.png') }}" alt=""style="max-height:500px">
</div>
    </div>
    </div>
</div>
@endsection