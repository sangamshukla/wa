@if(!isset($col))
<div class="form-group">
    <label for="{{ $name }}">{{ $title }}</label>
    <input id="{{ $name }}" type="{{ $type ?? 'text' }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old($name) }}" autofocus>
    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
@else
<div class="row">
    <label class="col-sm-2 col-form-label">{{ $title }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has($name) ? ' has-danger' : '' }}">
        <input class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{ $name }}" id="{{ $name }}" type="{{ $type ?? 'text' }}" value="{{ old($name) }}" aria-required="true"/>
        @if ($errors->has($name))
            <span id="name-error" class="error text-danger" for="{{ $name }}">{{ $errors->first($name) }}</span>
        @endif
        </div>
    </div>
</div>
@endif