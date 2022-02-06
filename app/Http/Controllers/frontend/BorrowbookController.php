<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Borrowdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BorrowbookController extends Controller
{

public function getcart()
{
   $carts= session()->get('cart');
    return view('website.pages.cart',compact('carts'));
}
 
public function clearcart()
    {
        session()->forget('cart');

      
        return redirect()->back()->with('message','Book Cart cleared successfully.');

    }
public function addtocart($id){
    
    $books=Book::find($id);
    if($books->quantity>0)
    {
    if(!$books)
    {
        return redirect()->back()->with('error','No book found.');
    }
    $cartExist=session()->get('cart');
// dd($cartExist);
        if(!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $cartData = [
                $id => [
                    'book_id' => $id,
                    'book_name' => $books->book_name,
                    'book_qty' => 1,
                    'author_name' => $books->author_name,
                    'ssl_no' => $books->ssl_no,
                ]
            ];
        
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Book Added to My Book.');
        }
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                    'book_id' => $id,
                    'book_name' => $books->book_name,
                    'book_qty' => 1,
                    'author_name' => $books->author_name,
                    'ssl_no' => $books->ssl_no,
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Book Added to My Book.');
        }
    }
    notify()->error('Book Not available');
    return redirect()->back();
                
}
public function confirmbook(Request $request){
    //   dd($request->all());  
    $date1=Carbon::createFromFormat('Y-m-d',$request->issue_date);
    $todate=$date1->addDays(7);
  
    $request->validate([
    
        'issue_date'=>['after:yesterday, required'],
        'return_date'=>['before:'.$todate.', required'],
        
        

        
    ]);
   $borrow=Borrow::create([
        'user_id'=>auth()->user()->id,
        'issue_date'=>$request->issue_date,
        'return_date'=>$request->return_date,
    ]);

    $carts= session()->get('cart');

    foreach($carts as $key=>$data)
    {

        $book=Book::find($key);
        $book->decrement('quantity',1);
        Borrowdetail::create([
            'borrow_id'=>$borrow->id,
            'book_id'=>$key
        ]);
    }

    session()->forget('cart');
    return redirect()->back();
          
        }
       
  public function availablebook()
  {
      $books=Book::all();
      return view('website.pages.availablebook',compact('books'));
  }      
}
