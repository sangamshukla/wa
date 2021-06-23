@extends('layouts.operation_dashboard')
@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:90px;">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Teacher Name</th>
            <th>Total Session Count</th>
            <th>Action</th>          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Director</td>
            <td>90</td>
            <td>View Details</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Support Engineer</td>
            <td></td>
            <td></td>
        </tr>      
    </tbody>
</table>
{{-- datatable js --}}

@endsection