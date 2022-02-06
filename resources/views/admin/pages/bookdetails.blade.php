@extends('welcome')

@section('content')

 <h1>Book Details</h1>
 <div id="divToPrint">
    
     <p><b>Book Name:</b>{{$book->book_name}}</p>
     <p><b>Author Name:</b>{{$book->author_name}}</p>
     <p><b>Description:</b>{{$book->description}}</p>
     <p><b>Book ISBN:</b>{{$book->ssl_no}}</p>


    
</div>  
<input class="btn btn-info" type="button" onClick="PrintDiv('divToPrint');" value="Print">
 @endsection
 <script language="javascript">
 function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>