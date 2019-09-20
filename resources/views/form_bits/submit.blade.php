@php
	if(!is_array($attributes)):
		$attributes = [];
	endif
@endphp
<div class="form-group row mb-0">
    <div class="col-md-6">
        {{ Form::button(($fa_icon ? '<i class="fa fa-' . $fa_icon . '"></i> ' : '') . ucwords($label ?? str_replace('_',' ', $name)), array_merge(['type' => 'submit', 'value' => 1], $attributes)) }}
    </div>
</div>