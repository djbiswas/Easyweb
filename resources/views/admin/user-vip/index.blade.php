@extends('layouts.admin')
@section('content')

<div class="row mt-minus">
    <div class="col">
        <div class="row">
            <div class="col">
                <h5 class="page-heading text-light mb-4 mt-4 mt-md-0"><i class="material-icons">assignment</i>Activity List</h5>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 2%">
    <div class="col">

        <div class="bg-white rounded-lg py-5 px-5">
            <div class="text-right">
                <a href="{{route('activities.create')}}" class="btn btn-primary">Add New</a>
            </div>

            <table id="report" class="table is-narrow">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Activity Name</th>
                        <th>Vip Name</th>
                        <th>Description</th>
                        <th>Task Benefits</th>
                        <th>Task content</th>
                        <th>Task steps</th>
                        <th>Share link</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @php($count_dj_sl = 1)
                    @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $count_dj_sl }}</td>
                        <td title="{{ $activity->name }}">{{ $activity->short_name }}</td>
                        <td title="{{ $activity->vip->name }}">{{ $activity->short_vip_name }}</td>
                        <td title="{{ $activity->description }}">{{ $activity->short_description }}</td>
                        <td title="{{ $activity->task_benefits }}">{{ $activity->short_task_benefits }}</td>
                        <td title="{{ $activity->activity_detail->task_content }}">{{ $activity->short_task_content }}</td>
                        <td title="{{ $activity->activity_detail->task_steps }}">{{ $activity->short_task_steps }}</td>
                        <td title="{{ $activity->activity_detail->share_link }}">{{ $activity->short_share_link }}</td>
                        <td class="has-text-right">
                            {{-- <a class="btn btn-outline-success" href="{{route('purchase.show', $purchase->id)}}">View </a> --}}
                            <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}

                                <a class="btn btn-info" href="{{route('activities.edit', $activity->id)}}"> Edit</a>
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