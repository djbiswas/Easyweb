@extends('layouts.admin')
@section('content')
    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Vip</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h4>Create Activity Form For a Vip</h4>
                    </div>
                    {{-- <div class="">
                        <a href="{{ route('vips.create') }}" class="btn btn-primary">Add New</a>
                    </div> --}}
                </div>
                <div class="card-body card-block">

                    {!! Form::open(['route' => 'activities.store']) !!}

                    {{-- select vip  --}}

                    <div class="form-group">
                        {{-- {{ Form::label('bank_id', 'Transfer To Account:') }} --}}

                        {{ Form::select('id', $vips->pluck('name', 'id'), null, ['class' => 'form-control', 'vip_id' => 'id', 'placeholder' => 'Select To vip', 'required']) }}
                        @if ($errors->has('id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Name Input Form -->
                    <div class="form-group">
                        {{ Form::label('name', 'Activity Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Activity Name', 'required']) }}
                        @error('name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'description:') }}
                        {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Description', 'required']) }}
                        @error('description')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {{ Form::label('task_benefits', 'Task Benefits:') }}
                        {{ Form::number('task_benefits', null, ['class' => 'form-control', 'placeholder' => 'Enter Task Benefits', 'required', 'step' => 'any']) }}
                        @error('task_benefits')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-actions form-group">
                        <!-- Submit Button Form -->
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary float-right']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection
