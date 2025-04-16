@extends('layouts.admin')
@section('content')
    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Vip List
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 2%">
        <div class="col">

            <div class="bg-white rounded-lg py-5 px-5">
                <div class="text-right">
                    <a href="{{ route('vips.create') }}" class="btn btn-primary">Add New</a>
                </div>

                <table id="report" class="table is-narrow">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Activity Name</th>
                            <th>Vip Name</th>
                            <th>Description</th>
                            <th>Task Benefits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php($count_dj_sl = 1)
                        @foreach ($activitydetails as $activitydetail)
                            <tr>
                                <td>{{ $count_dj_sl }} </td>
                                <td>{{ $activitydetail->name }} </td>
                                {{-- <td>{{$activitydetail->vip->name}} </td> --}}
                                <td>{{ $activitydetail->description }} </td>
                                <td>{{ $activitydetail->task_benefits }} </td>
                                <td class="has-text-right">
                                    {{-- <a class="btn btn-outline-success" href="{{route('purchase.show', $purchase->id)}}">View </a> --}}
                                    <form action="{{ route('activity-details.destroy', $activitydetail->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}

                                        <a class="btn btn-info" href="{{ route('activity-details.edit', $activitydetail->id) }}">
                                            Edit</a>
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
