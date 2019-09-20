{{ Form::bsTextInput('query', 'query', request()->input('query'), ['class' => 'form-control', 'style'=> 'float: left;','placeholder' => 'Search']) }}
{{ Form::bsHidden('type', request()->input('type') ?? 'categories', []) }}
{{ Form::bsButton('btnSave', 'click', ['type' => 'submit', 'style'=> 'float: right;', 'class' => "btn btn-primary"]) }} 