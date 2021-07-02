@extends('layouts.operation_dashboard')
@section('content')
    <table class="table table-bordered table-responsive" style="margin-top:222px;">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Purchased On</th>
          <th>Total Amount</th>
          <th>Due Amount</th>
          <th>Payment Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($session->enrolled()->pluck('order_id') as $ord )
          @php
            $singleOrder = App\Models\OrderPayment::find($ord);
          @endphp
          <tr>
              <td>{{ $singleOrder->student->name }}</td>
              <td style="overflow: scroll;">{{ $singleOrder->student->email }}</td>
              <td>{{ $singleOrder->created_at->format("Y-m-d h:i:s a") }}</td>
              <td>{{ $singleOrder->order_amount }}</td>
              <td>{{ $singleOrder->order_amount - $singleOrder->paid_amount }}</td>
              <td>@if($singleOrder->order_amount - $singleOrder->paid_amount == 0) <i class="fa fa-check" style="color:green; float:right;"></i> @else <i class="fa fa-times" style="color:red; float:right;"></i> @endif</td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection