<form method="POST" action="{{ url('/fortestsave')}}">
  @csrf
    {{-- row 2 Assign Teacher --}}
    <div class="row">
       @if(auth()->user()->role == 'admin')
        <div class="col">
            <div class="form-group" id="select_form">
              <label for="inputState">Assign Teacher</label>
                <select name="name" required id="class_name" value="{{ old('name')}}"class="form-control">
                   <option selected>... Select Teacher ...</option>
                   @foreach($assignteachers as $assignteacher)
                  <option value="{{ $assignteacher->id }}">{{ $assignteacher->name }}</option>
                   @endforeach 
                </select>
            </div>
        </div> 
        @endif
        <input type="submit" value="submit">
      </form>