@extends('layouts.admin')
@section('content')
    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center"><i
                            class="material-icons">assignment</i>Member List</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 2%">
        <div class="col">

            <div class="bg-white rounded-lg py-2 px-2">
                <div class="text-center mb-3 mt-5">
                    <a href="{{ route('members.create') }}" class="btn btn-primary" style="width: 90%;">Add New</a>
                </div>

                <table id="report" class="table is-narrow">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php($count_dj_sl = 1)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $count_dj_sl }} </td>
                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
                                <td class="has-text-right">
                                    {{-- <a class="btn btn-outline-success" href="{{route('purchase.show', $purchase->id)}}">View </a> --}}
                                    <form action="{{ route('members.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}

                                        <a class="btn btn-info" href="{{ route('members.edit', $user->id) }}"> Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @php($count_dj_sl++)
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
