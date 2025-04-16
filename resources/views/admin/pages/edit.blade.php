@extends('layouts.admin')

@section('content')
<div class="row mt-minus">
    <div class="col">
        <div class="row">
            <div class="col">
                <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center">
                    <i class="material-icons">assignment</i> Edit Page: {{ $page->title }}
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Page Builder</h4>
                <a href="{{ route('pages.index') }}" class="btn btn-primary">Back to Page List</a>
            </div>
            <div class="card-body p-0">

                {{-- Form to update page content --}}
                <form id="page-form" action="{{ route('pages.update', $page->id) }}" method="POST">
                    @csrf
                    {{-- Hidden input to capture GrapesJS output --}}
                    <input type="hidden" name="content" id="gjs-html">

                    {{-- GrapesJS visual editor container --}}
                    <div id="gjs" style="min-height: 500px;">{!! $page->content !!}</div>

                    {{-- Form submit button --}}
                    <div class="p-3 text-right border-top">
                        <button type="submit" class="btn btn-success">Update Page</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/grapesjs/grapes.min.css') }}">
@endpush

{{-- Load GrapesJS JS and Bootstrap block set --}}
@push('scripts')
    <script src="{{ asset('vendor/grapesjs/grapes.min.js') }}"></script>
    <script src="{{ asset('vendor/grapesjs/bootstrap-blocks.js') }}"></script>
@endpush

