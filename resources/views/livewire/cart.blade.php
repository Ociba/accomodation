<div>
<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">
            <thead>
            @php
            $my_cart_total =\DB::table('carts')->join('super_markets','super_markets.id','carts.item_id')
            ->where('carts.user_id',auth()->user()->id)
            ->sum('price');
            
            $price=\DB::table('carts')->join('super_markets','super_markets.id','carts.item_id')
            ->where('carts.user_id',auth()->user()->id)
            ->value('price');
            @endphp
                <tr>
                {{--<th>#</th>--}}
                <th>Name of Item</th>
                <th>Photo</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Unit Price</th>
                <th>Remove</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cart_details as $item)
                <tr>
                {{--<td>{{$i + 1}}</td>--}}
                <td>{{$item['item']}}</td>
                <td><img src="{{ asset('super_market_photos/'.$item->photo)}}" style="width:50px; height:40px;" alt="Image" class="img-responsive"></td>
    
                <td>
                    <form action="/update-cart/{{$item->id}}" method="get">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}" >
                        <input type="number" name="quantity" style="width:40px;" value="{{ $item->quantity }}" 
                        class="w-6 text-center bg-gray-300" />
                        <button type="submit" class="btn-sm btn btn-primary"><i class="fa fa-plus"></i></button>
                    </form>
                </td>
                <td>Ugx:{{ number_format($item['price'])}}</td>
                <td style="color:black; font-weight:bold;">Ugx: {{ number_format($item['price'] * $item['quantity'])}}</td>
                <td>
                    <a href="/remove-from-cart-list/{{$item->id}}" class="text-danger" style="text-align:center;"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                <tr>
                <td colspan="4"  style="color:black; font-weight:bold;">Total Amount</td>
                <td style="font-weight:bold;"> Total: ${{ Cart::getTotal() }}</td>
               {{--<td style="color:black; font-weight:bold;">Ugx: {{ number_format($my_cart_total)}}</td>--}}
                </tr>
            </tbody>
        </table>
    </div>
</div>
