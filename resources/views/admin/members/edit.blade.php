@extends('layouts.admin')

@section('content')
    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center">
                        <i class="material-icons">assignment</i> Edit Member
                    </h5>
                </div>
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

                    {{-- Form for Editing User --}}
                    {!! Form::model($user, ['route' => ['members.update', $user->id], 'method' => 'PUT']) !!}

                    <!-- Name Input Form -->
                    <div class="form-group">
                        {{ Form::label('name', 'Member Name:') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Member Name', 'required']) }}
                        @error('name')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email Input Form -->
                    <div class="form-group">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Member Email', 'required']) }}
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Input Form (Optional) -->
                    <div class="form-group">
                        {{ Form::label('password', 'Enter A New Password (Leave Blank to Keep Current)') }}
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter A New Password']) }}
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- VIP Selection -->
                    <div class="form-group">
                        {{ Form::label('vip_id', 'Select VIP Level:') }}
                        {{ Form::select('vip_id', $vips->pluck('name', 'id'), $user->userVip->vip_id ?? null, ['class' => 'form-control', 'placeholder' => 'Select VIP Level', 'required']) }}
                        @if ($errors->has('vip_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('vip_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="form-actions form-group">
                        {{ Form::submit('Update Member', ['class' => 'btn btn-primary float-right']) }}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
