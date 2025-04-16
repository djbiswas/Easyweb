@extends('layouts.admin')
@section('content')
    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center"><i
                            class="material-icons">assignment</i>Create Members</h5>
                </div>
                {{-- <div class="col text-right">
                    <div class="">
                        <a href="{{route('vips.create')}}" class="btn btn-primary">Add New</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%">
        <div class="col">

            <div class="bg-white rounded-lg py-2 px-2">
                <div class="text-center mb-3 mt-5">
                    <a href="{{ route('members.index') }}" class="btn btn-primary" style="width: 90%;">Members List</a>
                </div>
                <div class="card-body card-block">

                    {!! Form::open(['route' => 'members.store']) !!}

                    <!-- Name Input Form -->
                    <div class="form-group  ">
                        {{ Form::label('name', 'Member Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Member Name', 'required']) }}
                        @error('name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Member Email', 'required']) }}
                        @error('daily_tasks')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{ Form::label('password', 'Enter A Password:') }}
                        {{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Enter A Password', 'required']) }}
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {{ Form::label('vip_id', 'Select A Vip:') }}

                        {{ Form::select('id', $vips->pluck('name', 'id'), null, ['class' => 'form-control', 'vip_id' => 'id', 'placeholder' => 'Select To vip', 'required']) }}
                        @if ($errors->has('id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('id') }}</strong>
                            </span>
                        @endif
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
