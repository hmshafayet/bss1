@extends('welcome')

@section('content')

<div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('admin.report.search')}}" method="post">
            @csrf
            <label for="inputPassword4">From date</label>
            <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">To date</label>
            <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>

      </div>
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
            <!-- <td>{{ optional($report->user)->name}}</td>
            <td>{{ optional($report)->book_name}}</td>
            <td>{{ optional($report)->issue_date}}</td>
            <td>{{ optional($report)->return_date}}</td> -->
            <td>{{ $report->book->book_name}}</td>
            <td>{{ $report->borrow->user->name}}</td>
            <td>{{ $report->borrow->issue_date}}</td>
            <td>{{ $report->borrow->return_date}}</td>
     


          </tr>
        @endforeach

        
      </tbody>
    </table>

      </div>
@endsection