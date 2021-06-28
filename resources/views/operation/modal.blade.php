<table class="table table-bordered table-responsive w-100 d-block d-md-table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Student Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Due Amount</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @php
            // dd($studentList);
        @endphp
        @forelse ($studentList as $student)

        <tr>
          <th scope="row">1</th>
          <td>{{ $student->name }}</td>
          <td>{{ $student->order_amount }}</td>
          <td>{{ $student->paid_amount }}</td>
        </tr>
        @empty
        <tr>
            <td>No student </td>
        </tr>
        @endforelse

    </tbody>
  </table>
