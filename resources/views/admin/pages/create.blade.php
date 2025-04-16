@extends('layouts.admin')

@section('content')

<div class="row mt-minus">
    <div class="col">
        <div class="row">
            <div class="col">
                <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center">
                    <i class="material-icons">assignment</i> Page Builder
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Create Page</h4>
                <a href="{{ route('pages.index') }}" class="btn btn-primary">Page List</a>
            </div>

            <div class="card-body card-block">
                {{-- Page creation form --}}
                {!! Form::open(['route' => 'pages.store', 'id' => 'page-form']) !!}

                {{-- Page Title --}}
                <div class="form-group">
                    {{ Form::label('title', 'Page Name:') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Page Name', 'required']) }}
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                {{-- Page Slug --}}
                <div class="form-group">
                    {{ Form::label('slug', 'Page URL:') }}
                    {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'page-url', 'required']) }}
                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                {{-- GrapesJS Builder --}}
                <div class="form-group">
                    {{ Form::label('content', 'Page Content (Builder):') }}
                    <div id="gjs" style="height: 500px; border: 1px solid #ccc;"></div>
                    <input type="hidden" name="content" id="gjs-html">
                </div>

                <div class="form-actions form-group text-right">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Load GrapesJS CSS --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/grapesjs/grapes.min.css') }}">
@endpush

{{-- Load GrapesJS JS and Bootstrap block set --}}
@push('scripts')
    <script src="{{ asset('vendor/grapesjs/grapes.min.js') }}"></script>
    <script src="{{ asset('vendor/grapesjs/bootstrap-blocks.js') }}"></script>
@endpush
