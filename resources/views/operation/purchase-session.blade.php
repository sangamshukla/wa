@extends('layouts.operation_dashboard');
@section('content')
<div style="margin:100px;" class="container-fluid ">
 {{-- <div class="row"> --}}
    {{-- form --}}
    <form>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationServer02">Email</label>
            <input type="text" class="form-control is-valid" id="validationServer02" placeholder=" Enter Email" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

        </div>
            <label for="validationServer02">Email: alka@gmail.com</label>&nbsp;	&nbsp; 	&nbsp;

            <label for="validationServer02">Year: Year1</label>

        </div>
        {{-- <div class="col-md-4 mb-3">
            <label for="validationServer02">Email</label>
          </div>
            --}}

          {{-- <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
              </div>
              <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div> --}}
        </div>

        <button style="margin-left:150px;"class="btn btn-primary" type="submit">Submit form</button>
      </form>
    {{-- form --}}

 </div>
<div class="row">
    <table style="margin: 100px;" class="table table-bordered table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th scope="col">Sr. No.</th>
            <th scope="col">Session Name</th>
            <th scope="col">Select Session</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
             <form action="{{ route('sell-session') }}" method="post">
            @foreach ($sessions as $session)
            <tr>
              <th scope="row">{{ $i }}</th>
              <td>{{ $session->name }}</td>
              <td>
                  <input type="checkbox" name="session[]" id="sessions" value="{{ $session->id }}">
              </td>
            </tr>
            @php
                $i=$i+1;
            @endphp
            @endforeach
            <tr>
                <td colspan="3" class="text-center">
                    <input type="submit" value="Submit" class="text-center btn btn-primary">
                </td>
            </form>
            </tr>
        </tbody>
      </table>

    </div>
{{-- </div> --}}


@endsection
