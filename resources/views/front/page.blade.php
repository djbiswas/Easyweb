@extends('layouts.front')
@section('content')

</div>

<div class="card mb-3 border-light shadow-sm rounded-3 p-3 mt-5">
    <div class="card-body">
        <h5 class="card-title fw-bold mb-3">{{ $page->name }}</h5>

        <div class="card-text">
            {!! $page->info !!}
        </div>
    </div>
</div>

@endsection
