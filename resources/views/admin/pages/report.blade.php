@extends('welcome')

@section('content')

<div style="margin: 30px 60px 30px 40px; background: #7FFFD4; padding: 20px;">

<div class="form-row">

      <div  class="form-group col-md-4" >
        <form action="{{route('admin.report.search')}}" method="post">
            @csrf
            <label for="inputPassword4">From date</label>
            <input name="from" class="form-control" id=""  type="date" placeholder="">
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">To date</label>
            <input name="to" class="form-control" id=""  type="date" placeholder="">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>

      </div>
      <div id="divToPrint">
        <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">BorrowID</th>
                <th scope="col">BookName</th>
                <th scope="col">StudentName</th>
                <th scope="col">Issue Date</th>
                <th scope="col">Return Date</th>
            
              
            </tr>
          </thead>
          <tbody>
            @foreach ($viewreport as $key=>$report)
            <tr>
            <th scope="row">{{$key+1}}
                <td>{{ $report->book->book_name}}</td>
                <td>{{ $report->borrow->user->name}}</td>
                <td>{{ $report->borrow->issue_date}}</td>
                <td>{{ $report->borrow->return_date}}</td>
              </tr>
            @endforeach

            
          </tbody>
        </table>
      </div>
   <input class="btn btn-warning" type="button" onClick="PrintDiv('divToPrint');" value="Print">
   </div>

      
     
      
</div>

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
