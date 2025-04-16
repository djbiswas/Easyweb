@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Page</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Page</div>
                <div class="card-body card-block">

                {!!  Form::model($page,['method' =>'PATCH', 'route' => ['pages.update', $page->id]])  !!}

                <!-- Name Input Form -->
                    <div class="form-group  ">
                        {{Form::label('name','Page Name:') }}
                        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Page Name', 'required']) }}
                        @error('name')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('daily_tasks','Daily Tasks:') }}
                        {{Form::text('daily_tasks', null, ['class' => 'form-control', 'placeholder' => 'Daily Tasks', 'required']) }}
                        @error('daily_tasks')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('simple_interest','Simple Interest:') }}
                        {{Form::text('simple_interest', null, ['class' => 'form-control', 'placeholder' => 'Simple Interest', 'required']) }}
                        @error('simple_interest')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('daily_profit','Daily Profit:') }}
                        {{Form::text('daily_profit', null, ['class' => 'form-control', 'placeholder' => 'Daily Profit', 'required']) }}
                        @error('daily_profit')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group  ">
                        {{Form::label('total_profit','Total Profit:') }}
                        {{Form::text('total_profit', null, ['class' => 'form-control', 'placeholder' => 'Total Profit', 'required']) }}
                        @error('total_profit')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="form-group  ">
                        {{Form::label('effective_time','Effective Time:') }}
                        {{Form::text('effective_time', null, ['class' => 'form-control', 'placeholder' => 'Effective Time', 'required']) }}
                        @error('effective_time')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group  ">
                        {{Form::label('image', 'NID File')}}
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                        @error('image')
                        <span>{{ $message }}</span>
                        @enderror
                    </div> --}}


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
