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
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
{{-- </div> --}}


@endsection
