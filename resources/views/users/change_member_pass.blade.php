@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Member Password Change</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Member Password Change</div>
                <div class="card-body card-block">

                    {!!  Form::model($user,['method' =>'PATCH', 'id' => 'userup'.$user->id,'route' => ['member_pass_update', $user->id]])  !!}

                    {{csrf_field()}}
                    <div class="row">


                        <div class="form-group col ">
                            {{Form::label('password', 'New Password')}}
                            {{Form::text('password', '', ['class' => 'form-control','placeholder' => 'Password' , 'required'])}}
                            @error('password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col ">
                            {{Form::label('new_password', 'Confirm New Password')}}
                            {{Form::text('new_password', '', ['class' => 'form-control','placeholder' => 'Confirm New Password' , 'required'])}}
                            @error('new_password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <hr>
                    {{-- <div class="btnsub text-right">
                      {{Form::submit('Update User', ['class' => 'btn btn-primary'])}}
                    </div> --}}
                  {{ Form::close() }}

                  <div class="float-right">
                    <button onclick="approved_dj({{ $user->id }})" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script !src="">
        function approved_dj(id){
            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: "It will Change Your Password !",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                cancelButtonText: 'No'
            }).then(result=> {
                if (result.value) {
                    Swal.fire(
                        'Submitted!',
                        'Password Changed Submitted.',
                        'success'
                    );
                    $("#userup"+id).submit();
                }
            })
        }

    </script>
@endsection
