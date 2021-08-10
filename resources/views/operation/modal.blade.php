<table class="table table-bordered table-responsive w-100 d-block d-md-table">
    <thead>
      <tr>
<<<<<<< HEAD
        <th>#</th>
=======
        {{-- <th>#</th> --}}
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        <th>Student Name</th>
        <th>Amount</th>
        <th>Due Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @forelse ($studentList as $student)

        <tr>
<<<<<<< HEAD
          <td>{{ $i }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->order_amount }}</td>
          <td>{{ $student->order_amount - $student->paid_amount }}</td>
          <td> @if($student->order_amount - $student->paid_amount == 0) <i class="fa fa-check" style="color:green; float:right;"></i> @else <i class="fa fa-times" style="color:red; float:right;"></i> @endif
=======
          {{-- <td>{{ $i }}</td> --}}
          <td>{{ $student->name }}</td>
          <td>{{ $student->order_amount }}</td>
          <td>{{ $student->order_amount - $student->paid_amount }}</td>
           <td> @if($student->order_amount - $student->paid_amount == 0) <i class="fa fa-check" style="color:green; float:right;"></i> @else <i class="fa fa-times" style="color:red; float:right;"></i> @endif
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
          </td>
        </tr>
        @php
            $i=$i+1;
        @endphp
        @empty
        <tr>
            <td>No student </td>
        </tr>
        @endforelse

    </tbody>
  </table>
