<link rel="stylesheet" href="{{ asset('front/slides/css/owl.carousel.min.css')}}">

 <style>
 .mb-1 {
   margin-bottom:4px;
 }
 </style>   
    <section>
    <div class="container">
    <h2 class="section-header" style="margin-top:-40px;">Our Current Available Products
        <br>
        <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
    </h2>

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
                            <button class="btn btn-primary mb-1">Add To Cart</button>
                            <a href="/cart" class="btn btn-warning">View Cart</a>
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
  </div>
</section>
    
    

    <script src="{{ asset('front/slides/js/jquery-3.3.1.min.js')}}"></script>
    {{--<script src="{{ asset('front/slides/js/popper.min.js')}}"></script>--}}
    {{--<script src="{{ asset('front/slides/js/bootstrap.min.js')}}"></script>--}}
    <script src="{{ asset('front/slides/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front/slides/js/main.js')}}"></script>