@php
	if(!is_array($attributes)):
		$attributes = [];
	endif
@endphp
<div class="form-group {{ $errors->has($name) ? ' has-error' : ''}} row">
    {{ Form::label(__($name), ucfirst($label ?? str_replace('_',' ', $name)) . (isset($attributes['required']) ? ' *' : ''), ['class' => 'col-md-4 col-form-label text-md-left']) }}
    <div class="col-md-8">
    @php
        if (isset($attributes['required'])) {
            //turn off html required attribute, just use for displaying * above
            unset($attributes['required']);
        }
    @endphp
    {{ Form::text($name, $value ?? null, array_merge(['class' => 'form-control' . ($errors->has($name) ? ' is-invalid' : '')], $attributes)) }}
    @error($name)
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
</div>