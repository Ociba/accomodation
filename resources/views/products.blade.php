@extends('layouts.frontend')
@section('content')

    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-m">
                <img src="{{ asset('super_market_photos/'.$product->photo)}}" style="width:300px; height:190px;" alt="" class="w-full max-h-60">
                <div class="flex w-full bg-cover">
                <div class="text-gray-700 uppercase">{{ $product->item }}</div>
                <div class="mt-2 text-blue-500 items-end justify-end">Ugx: {{ number_format($product->price) }}</div>
                </div>
                <div class="px-5 py-3">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->item_id }}" name="id">
                        <input type="hidden" value="{{ $product->item }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->photo }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        <a href="/cart" class="px-4 py-2 text-white bg-orange-800 rounded">View Cart</a>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
@endsection