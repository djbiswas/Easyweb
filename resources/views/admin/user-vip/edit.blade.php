@extends('layouts.admin')
@section('content')

<div class="row mt-minus">
    <div class="col">
        <div class="row">
            <div class="col">
                <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Activity</h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Edit Activity</div>
            <div class="card-body card-block">

                {!! Form::model($activity,['method' =>'PATCH', 'route' => ['activities.update', $activity->id]]) !!}

                <!-- Name Input Form -->
                
                <!-- VIP Name Select -->
                <div class="form-group">
                    {{ Form::label('vip_id', 'Select Vip Name:') }}
                    {{ Form::select('vip_id', $vips, $activity->vip_id ?? null, ['class' => 'form-control', 'placeholder' => 'Select VIP', 'required']) }}
                    @error('vip_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
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

                    <!-- Activity Name Input -->
                    <div class="form-group">
                        {{ Form::label('share_link', 'Share Link:') }}
                        {{ Form::text('share_link',$activity->activity_detail->share_link ?? null, ['class' => 'form-control', 'placeholder' => 'Enter Share Link', 'required']) }}
                        @error('share_link')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{ Form::label('task_steps', 'Task Steps:') }}
                        {{ Form::text('task_steps',$activity->activity_detail->task_steps ?? null, ['class' => 'form-control', 'placeholder' => 'Enter Task Steps', 'required']) }}
                        @error('task_steps')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{ Form::label('task_content', 'Task Content:') }}
                        {{ Form::text('task_content',$activity->activity_detail->task_content ?? null, ['class' => 'form-control', 'placeholder' => 'Enter Task Content', 'required']) }}
                        @error('task_content')
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