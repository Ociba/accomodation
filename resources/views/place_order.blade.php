@extends('layouts.frontend')

<style>
  .bg-orange-700 {
    color:#FFA500;
  }
 .mb-1 {
   margin-bottom:4px;
   }
</style>
@section('content')
          <main class="my-8">
            @include('layouts.messages')
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Cart List  <span style="color:blue;">{{auth()->user()->name}}</span></h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base table-responsive" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              {{--<th class="hidden text-right md:table-cell"> price</th>--}}
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td hidden>{{$item->id}}
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                <img src="/super_market_photos/{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="get">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="text" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    {{--<button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>--}}
                                    </form>
                                  </div>
                                </div>
                              </td>
                              {{--<td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    Ugx: {{ number_format($item->price) }}
                                </span>
                              </td>--}}
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div class="text-right font-medium" style="color:blue;">
                         Total: Ugx: {{ number_format(Cart::getTotal()) }}
                        </div>
                        <div>
                          <form action="/save-order" method="get">
                            @csrf
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                            @foreach ($cartItems as $item)   
                            <input type="hidden" name="item_id" value="{{$item->id}}" class="form-control">
                            <input type="hidden" name="item_name" value="{{$item->name}}" class="form-control">
                            <input type="hidden" name="price" value="{{$item->price}}" class="form-control">
                            <input type="hidden" name="quantity" value="{{$item->quantity}}" class="form-control">
                            @endforeach
                            <button type="submit" class="btn btn-primary mt-1 mb-1">Place Order Now</button>
                            <a href="/logout" class="btn btn-danger mt-1" style="padding:10px;">Logout</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection