@extends('layouts.template')

@section('content')
<div class="flex-center position-ref full-height">

	@isset($user)
	<product-detail-component v-bind:user="{{ $user }}">
		</productt-detail-component>
@else
	<product-detail-component>
    </productt-detail-component>
@endisset

</div>

@endsection