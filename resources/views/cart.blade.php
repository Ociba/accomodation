@extends('layouts.frontend')

<link rel="stylesheet" href="{{ asset('front/slides/css/owl.carousel.min.css')}}">
<style>
   .btn-primary {
      color: #ffffff;
      background-color: #1a1a4c;
      border-color: #0081b2;
      padding:8px;
      }
      .btn-warning {
         background-color:#ffbf00;
         padding:6px;
         border-color: #ffbf00;
         color: #ffffff;
      }
      .mb-1 {
        margin-bottom:4px;
      }
  </style>
@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Your Selected Items</h3>
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
                              <th class="hidden text-right md:table-cell"> price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td hidden>{{$item->id}}</td>
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
                                    
                                    <form action="{{ route('cart.update')}}" method="get">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    Ugx: {{ number_format($item->price * $item->quantity) }}
                                </span>
                              </td>
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
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger mb-1">Remove All Cart</button>
                            <a href="/checkout" class="btn btn-primary">Proceed To Checkout sh.{{ number_format(Cart::getTotal()) }}</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="site-section bg-left-half mt-2">
        
        <div class="container owl-2-style">
  
          <div class="owl-carousel owl-2">
          @foreach($get_supermarket_items as $items)
            <div class="media-29101">
              <a href="#"><img src="{{ asset('super_market_photos/'.$items->photo)}}"  style="width:318px; height:190px;" alt="Image" class="img-fluid"></a>
              <div class="panel-body text-left">
                      <div class="row row-table">
                          <div class="col-xs-6">
                              <p>{{$items->item}}</p>
                          </div>
                          <div class="col-xs-6">
                              <p class="text-primary">Ugx:{{ number_format($items->price)}}</p>
                          </div>
                      </div>
                      <div class="row row-table">
                      <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" value="{{ $items->id }}" name="id">
                          <input type="hidden" value="{{ $items->item }}" name="name">
                          <input type="hidden" value="{{ $items->price }}" name="price">
                          <input type="hidden" value="{{ $items->photo }}"  name="image">
                          <input type="hidden" value="1" name="quantity">
                          <div class="col-xs-12">
                              <button class="btn btn-primary mb-1" style="padding:8px;">Add To Cart</button>
                              <a href="/cart" class="btn btn-warning" style="padding:10px;">View Cart</a>
                          </div>
                      </form>
                      </div>
                  </div>
            </div>
            @endforeach
          </div>
  
        </div>
      </div>
            </div>
        </main>
    @endsection
    <script src="{{ asset('front/slides/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('front/slides/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front/slides/js/main.js')}}"></script>