@extends('layouts.app')
@section('main')


<div class="mt-5 mx-auto" style="width: 380px">
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
               <li> {{ $error }}</li>
               @endforeach

           </ul>
    </div>
    @endif

    <div class="card" style="margin-top: 140px;">
        <div class="card-body" style="background-color: #ffcfed;">
            <form action="{{ url("furnitures/$furnitures->id") }}" method="POST">
                @csrf
                @method('PATCH')


                <div class="mb-3">
                    <label for="" class="form-label">Name Furniture</label>
                    <input name="name_furniture" type="text" class="form-control" value="{{ old('name_furniture')}}">
                    @error('name_furniture')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror

                    
                <div class="mb-3">
                    <label for="" class="form-label" style="margin-top: 20px;">Price</label>
                    <input name="price" type="integer" class="form-control" value="{{ old('price')}}">
                    @error('price')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror

                    
                <div class="mb-3">
                    <label for="" class="form-label" style="margin-top: 20px;">Stock</label>
                    <input name="stock" type="integer" class="form-control" value="{{ old('stock')}}">
                    @error('stock')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror

                    
                <div class="mb-3">
                    <label for="" class="form-label" style="margin-top: 20px;">Total Order</label>
                    <input name="total_order" type="integer" class="form-control" value="{{ old('total_order')}}">
                    @error('total_order')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror

                <button type="submit" class="btn btn-dark" style="margin-top: 20px;">update data</button>
            </form>
        </div>
    </div>
</div>
@endsection
