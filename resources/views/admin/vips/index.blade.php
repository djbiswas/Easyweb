@extends('layouts.admin')
@section('content')

    <div class="row mt-minus">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5 class="page-heading text-light mb-4 mt-4 mt-md-0 text-center"><i class="material-icons">assignment</i>Vip List</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 2%">
        <div class="col">

            <div class="bg-white rounded-lg py-2 px-2">
                <div class="text-center mb-3 mt-5" >
                    <a href="{{route('vips.create')}}" class="btn btn-primary" style="width: 90%;">Add New</a>
                </div>

                <table id="report" class="table is-narrow">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Profit</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php($count_dj_sl = 1)
                    @foreach ($vips as $vip)
                        <tr>
                            <td>{{$count_dj_sl}} </td>
                            <td>{{$vip->name}} </td>
                            <td>{{$vip->total_profit}} </td>
                            <td class="has-text-right">
                                {{-- <a class="btn btn-outline-success" href="{{route('purchase.show', $purchase->id)}}">View </a> --}}
                                <form action="{{ route('vips.destroy',$vip->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}

                                    <a class="btn btn-info" href="{{route('vips.edit', $vip->id)}}"> Edit</a>
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
