<section style="margin-top:-35px;">
            <div class="container">
                <h2 class="section-header">Add More Items to Your List
                    <br>
                    <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
                </h2>
                <div class="row">
                    @foreach($get_supermarket_items as $items)
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('super_market_photos/'.$items->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            {{--<div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <button type="button" class="btn btn-pill-left btn-warning"> %</button>
                            </div>--}}
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
                                    <div class="col-xs-6">
                                    <a href="/selected-item/{{$items->id}}"><span class="btn btn-bloc btn-primary">Order Now</span></a>
                                    </div>
                                    <div class="col-xs-6">
                                    <a href="/get-supermarket-items/{{$items->item_group_id}}"><span class="btn btn-bloc btn-warning">View More</span></a>
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