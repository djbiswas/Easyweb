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
    <div class="row" style="margin-top: 2%">
        <div class="col">
            <div class="bg-white rounded-lg py-5 px-5">


                <table id="report" class="table is-narrow">
                    <thead>
                    <tr>
                        <th>Name </th>
                        <th>Shares </th>
                        <th>Phone</th>
                        <th>Email</th>
                        @role('admin|devadmin')
                        <th>Actions</th>
                        @endrole
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}} </td>
                            <td>@foreach($user->usershares as $usershare)
                                {{$usershare->name}} <br>
                                @endforeach

                            </td>
                            <td>{{$user->phone}} </td>
                            <td>{{$user->email}} </td>
                            @role('admin|devadmin')
                            <td class="has-text-right">
                                {{-- <a class="btn btn-outline-success" href="{{route('purchase.show', $purchase->id)}}">View </a> --}}
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}

                                    <a class="btn btn-info" href="{{route('users.edit', $user->id)}}"> Edit</a>
                                </form>
                            </td>
                            @endrole
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection
