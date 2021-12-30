@extends('welcome')

@section('content')

 <h1>Book Details</h1>
 <div id="divToPrint">
    
     <p>Book Name:{{$book->book_name}}</p>
     <p>Author Name:{{$book->author_name}}</p>

    
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