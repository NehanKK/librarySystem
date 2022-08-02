<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowBook;
use Auth;
class BookController extends Controller
{
    //
    public function index(Request $request)
    {
        // $userid= Auth::user()->id;
        // $username = users::where('id',$userid)->get();
        $searchkey2=$request->searchkey2;
        $books = Book::where('status',0)->where(function ($q) use ($searchkey2){
            $q->where('title','like',"%".$searchkey2."%")->orWhere('description','like',"%".$searchkey2."%")->orWhere('type','like',"%".$searchkey2."%");
        })->get();
        // skip(0)->take(10)
    
        
        return view('book.books',compact('books','searchkey2'));
    }
    public function borrow($id)
    {
        $data = new BorrowBook();
        $data->userid= Auth::user()->id;
        $data->bookid=$id;
        $data->save();
        // BorrowBook::where('userId',Auth::user()->id)->where('bookid',$id)->delete();
        


        Book::where('id',$id)->update(['status'=>1]);
        return back();
    }
    public function borrowedview(Request $request)
    {
        $searchkey=$request->searchkey;
        $brbooks = Book::where('status',1)->where(function ($q) use ($searchkey){
            $q->where('title','like',"%".$searchkey."%")->orWhere('description','like',"%".$searchkey."%")->orWhere('type','like',"%".$searchkey."%");
        })->get();
    
        return view('borrowedBook.borrowedBooks',compact('brbooks','searchkey'));
    }
    public function return($id)
    {
        $data = new BorrowBook();
        $data->userid= Auth::user()->id;
        $data->bookid=$id;
        $data->save();
        
        Book::where('id',$id)->update(['status'=>0]);
        BorrowBook::where('userid',Auth::user()->id)->where('bookid',$id)->delete();

        return back();
    }
}
