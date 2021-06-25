@extends('layouts.operation_dashboard');

@section('content')
<link
      href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<div style="margin-top: 110px;" class="container-fluid">
<table id="example" style="width:100% " class="table table-bordered table-responsive w-100 d-block d-md-table">
    <thead>
        <tr>
            <th>Sr No. </th>
            <th>Teacher Name</th>
            <th>Session Count</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
        </tr>
    </tbody>

</table>
</div>

@endsection
