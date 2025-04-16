@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Members</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Members</div>
                <div class="card-body card-block">

                    {!!  Form::model($user,['method' =>'PATCH', 'files'=>'true','enctype'=>'multipart/form-data', 'id' => 'userup'.$user->id,'route' => ['users.update', $user->id]])  !!}

                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-4 ">
                            {{Form::label('name','Full Name:') }}
                            {{Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Full Name'))}}
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('phone', 'Phone')}}
                            {{Form::text('phone', null, array('class' => 'form-control','placeholder' => '01000000000'))}}
                            @error('phone')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        @role('devadmin')

                        <div class="form-group col-4 ">
                            {{Form::label('password', 'Password')}}
                            {{Form::text('password', '', ['class' => 'form-control','placeholder' => 'Password'])}}
                            @error('phone')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        @endrole

                        <div class="form-group col-4 ">
                            {{Form::label('nid_no', 'NID No')}}
                            {{Form::text('nid_no', null, array('class' => 'form-control','placeholder' => 'NID No'))}}
                            @error('nid_no')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('father_name', 'Father Name')}}
                            {{Form::text('father_name', null, array('class' => 'form-control','placeholder' => 'Father Name'))}}
                            @error('father_name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('mother_name', 'Mother Name')}}
                            {{Form::text('mother_name', null, array('class' => 'form-control','placeholder' => 'Mother Name'))}}
                            @error('mother_name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('spouse_name', 'Spouse Name')}}
                            {{Form::text('spouse_name', null, array('class' => 'form-control','placeholder' => 'Spouse Name'))}}
                            @error('spouse_name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('email', 'Email')}}
                            {{Form::email('email', null, array('class' => 'form-control','placeholder' => 'example@mail.com'))}}
                            @error('phone')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('present_address', 'Present Address')}}
                            {{Form::text('present_address', null, array('class' => 'form-control','placeholder' => 'Present Address'))}}
                            @error('present_address')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('permanent_address', 'Permanent Address')}}
                            {{Form::text('permanent_address', null, array('class' => 'form-control','placeholder' => 'Permanent Address'))}}
                            @error('permanent_address')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12 ">
                            <hr>
                        </div>


                        <div class="form-group col-4 ">
                            {{Form::label('nominee_name', 'Nominee Name')}}
                            {{Form::text('nominee_name', null, array('class' => 'form-control','placeholder' => 'Nominee Name'))}}
                            @error('nominee_name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('nominee_father', 'Nominee Father')}}
                            {{Form::text('nominee_father', null, array('class' => 'form-control','placeholder' => 'Nominee Father'))}}
                            @error('nominee_father')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('nominee_mother', 'Nominee Mother')}}
                            {{Form::text('nominee_mother', null, array('class' => 'form-control','placeholder' => 'Nominee Mother'))}}
                            @error('nominee_mother')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('nominee_mobile', 'Nominee Mobile')}}
                            {{Form::text('nominee_mobile', null, array('class' => 'form-control','placeholder' => '01000000000'))}}
                            @error('nominee_mobile')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('nominee_nid', 'Nominee NID')}}
                            {{Form::text('nominee_nid', null, array('class' => 'form-control','placeholder' => 'Nominee NID'))}}
                            @error('nominee_nid')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-4 ">
                            {{Form::label('nominee_relation', 'Nominee Relation')}}
                            {{Form::text('nominee_relation', null, array('class' => 'form-control','placeholder' => 'Nominee Relation'))}}
                            @error('nominee_relation')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group col-12 ">
                            <hr>
                        </div>

                        <div class="form-group col-3 ">
                            {{Form::label('referrar', 'Referred By')}}
                            {!! Form::select('referrar', $user_list, null, ['class' => 'form-control','placeholder' => 'Referred By']) !!}
                            @error('referrar')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 ">
                            {{Form::label('member_share', 'Member Shares')}}
                            {{Form::number('member_share', null, array('class' => 'form-control','placeholder' => 'Member Shares'))}}
                            @error('member_share')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 ">
                            {{Form::label('user_type_id', 'Member Type')}}
                            {!! Form::select('user_type_id', $user_types, null, ['class' => 'form-control','placeholder' => 'Member Type']) !!}
                            @error('user_type_id')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 ">
                            {{Form::label('roles', 'Select Role')}}
                            {!! Form::select('roles', $roles, null, ['class' => 'form-control','placeholder' => 'Select Role','required']) !!}
                            @error('roles')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12 ">
                            <hr>
                        </div>

                        <div class="form-group col-3 ">
                            <img src="/img/users/{{  $user->nid_file ?? ''}}" alt="" width="100">
                            <br>
                            <br>

                            {{Form::label('nid_file', 'New NID File')}}
                            {!! Form::file('nid_file', ['class' => 'form-control']) !!}
                            @error('nid_file')
                            <span>{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group col-3 ">
                            <img src="/img/users/{{  $user->photo ?? ''}}" alt="" width="100">
                            <br>
                            <br>

                            {{Form::label('photo', 'Photo')}}
                            {!! Form::file('photo', ['class' => 'form-control']) !!}
                            @error('photo')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 ">
                            <img src="/img/users/{{  $user->nominee_photo ?? ''}}" alt="" width="100">
                            <br>
                            <br>

                            {{Form::label('nominee_photo', 'Nominee Photo')}}
                            {!! Form::file('nominee_photo', ['class' => 'form-control']) !!}
                            @error('nominee_photo')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-3 ">
                            <img src="/img/users/{{  $user->nominee_nid_file ?? ''}}" alt="" width="100">
                            <br>
                            <br>

                            {{Form::label('nominee_nid_file', 'Nominee NID File')}}
                            {!! Form::file('nominee_nid_file', ['class' => 'form-control']) !!}
                            @error('nominee_nid_file')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>



                        {{-- <div class="form-group col-4 ">
                            {{Form::label('documents', 'Documents')}}
                            {!! Form::file('documents', ['class' => 'form-control']) !!}
                            @error('documents')
                            <span>{{ $message }}</span>
                            @enderror
                        </div> --}}

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
                text: "It will Approved Or Update The Data !",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                cancelButtonText: 'No'
            }).then(result=> {
                if (result.value) {
                    Swal.fire(
                        'Submitted!',
                        'Data has been Submitted.',
                        'success'
                    );
                    $("#userup"+id).submit();
                }
            })
        }

    </script>
@endsection
