@extends('layouts.app')
@section('main')

<div class="card align-items-stretch border rounded my-20 mx-auto" style="margin-top: 140px; width: 500px;">
    <div class="card-body d-flex justify-content-between flex-shrink-0 p-3 link-dark border-bottom" style="background-color: #ffcfed;"> 
        <span class="fs-5 fw-semibold">Furniture List : {{ $data->total() }}</span>
        <a href="{{ url('/furnitures/data/create') }}" class="btn btn-outline-light text-dark" style="margin-left: 20px;">add</a>
    </div>
    @foreach ($data as $item)


    <div class="list-group list-group-flush border-bottom scrollarea">
        <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{$item->name_furnitures}}</strong>
                <small>Wed</small>
            </div>
            <div class="col-10 mb-1 small">{{$item->price}}</div>
            <div class="col-10 mb-1 small">{{$item->stock}}</div>
            <div class="col-10 mb-1 small">{{$item->total_order}}</div>
            <div class="group-action">
                <form action="{{ url("/furnitures/$item->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ url("/furnitures/$item->id/edit") }}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>

            </div>
        </div>
    </div>
    @endforeach

    <br>
    {{ $data->links('pagination::bootstrap-4') }}

</div>
@endsection
