<section>
    <div class="container">
        <h2 class="section-header">Our Current Available Accomodations & Properties With Discount
            <br>
            <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
        </h2>
        <div class="row">
            @foreach($supermarket_items_with_discount as $discount)
            <div class="col-lg-3">
                @php
                $percentage_discount =\DB::table('super_markets')->where('id',$discount->id)->value('discount');
                $original_price =\DB::table('super_markets')->where('id',$discount->id)->value('price');
                $actual_percentage_discount =($percentage_discount * 0.01);

                $calculate_discount =$original_price * $actual_percentage_discount;

                $new_price =$original_price-$calculate_discount;

                $item_category_id =\DB::table('super_markets')->where('id',$discount->id)->value('discount');
                @endphp
                <!-- START widget-->
                <div class="panel widget">
                    <img src="{{ asset('super_market_photos/'.$discount->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                    <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <button type="button" class="btn btn-pill-left btn-warning">{{$percentage_discount}} %</button>
                    </div>
                    <div class="panel-body">
                        <div class="row row-table text-center">
                            <div class="col-xs-6">
                                <p>{{$discount->item}}</p>
                            </div>
                            <div class="col-xs-6">
                                <p><strong>{{$discount->status}}</strong></p>
                            </div>
                        </div>
                        <div class="row row-table text-center">
                            <div class="col-xs-6">
                                <span class="text-primary"><del>Ugx.{{ number_format($discount->price)}}</del></span>
                                <span class="text-warning font-weight-bold"><strong>Ugx:{{ number_format($new_price)}}</strong></span>
                            </div>
                            <div class="col-xs-6">
                                <span class="text-primar">{{$discount->location}}</span>
                            </div>
                        </div>
                        <div class="row row-table text-center">
                            <div class="col-xs-12">
                                <a href="/selected-item/{{$discount->id}}"><span class="btn btn-block btn-primary">Order Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END widget-->
            </div>
            @endforeach
            <!-- END row-->
        </div>
    </div>
</section>