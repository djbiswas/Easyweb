@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center"><i class="material-icons">assignment</i>Vip</h5>
                </div>
                {{-- <div class="col text-right">
                    <div class="">
                        <a href="{{route('vips.create')}}" class="btn btn-primary">Add New</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div><h4>Vip</h4></div>
                    <div class="">
                        <a href="{{route('vips.create')}}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
                <div class="card-body card-block">

                {!!  Form::open(['route' => 'vips.store'])  !!}

                <!-- Name Input Form -->
                    <div class="form-group  ">
                        {{Form::label('name','Page Name:') }}
                        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'page Name', 'required']) }}
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('url','Page Url:') }}
                        {{Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Page Url', 'required', 'readonly']) }}
                        @error('url')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('info','Page Text:') }}
                        {{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => 'Page Text', 'required']) }}
                        @error('info')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-actions form-group">
                        <!-- Submit Button Form -->
                        {{Form::submit('Submit', ['class' => 'btn btn-primary float-right']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection
