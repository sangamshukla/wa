<table class="table table-bordered table-responsive w-100 d-block d-md-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Student Name</th>
        <th>Amount</th>
        <th>Due Amount</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @forelse ($studentList as $student)

        <tr>
          <td>{{ $i }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->order_amount }}</td>
          <td>{{ $student->paid_amount }}</td>
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
