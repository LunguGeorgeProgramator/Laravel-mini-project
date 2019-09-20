@php
	if(!is_array($attributes)):
		$attributes = [];
	endif
@endphp
{{ Form::hidden($name, $value ?? null, $attributes) }}
