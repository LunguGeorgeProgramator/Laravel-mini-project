@php
	if(!is_array($attributes)):
		$attributes = [];
	endif
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : ''}} row">

{{ Form::label(__($name), ucfirst($label ?? str_replace('_',' ', $name)) . (isset($attributes['required']) ? ' *' : ''), ['class' => 'control-label']) }}
<div class="input-group">
    <input type="text" class="form-control print_name" style="background: none; border: none;" readonly="" value="{{ $value ?? null }}">
    <label class="input-group-btn">
     <span class="btn btn-primary">
         {{ __('Browse') }} <input type="file" name="{{ $name }}" style="display: none;">
     </span>
    </label>
</div>
{{  __('Max file size: ') . \App\Helpers\Helper::readableSize(\App\Helpers\Settings::setting('uploads_default_max_size')) }}
<div id="file-info-{{ $name }}" class="text-success" style="font-style: italic;"></div>
@error($name)
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<script>
const input = $('input[type=file]');
input.change(function() {
    const file = input[0].files[0];
    $('.print_name').val(file? file.name : null);
});
</script>