<div class="panel panel-default bg-inverse" style="margin-top:-50px;">
   <div class="panel-heading text-center bg-inverse">@include('layouts.messages')</div>
    <div class="panel-headin text-center bg-inverse">Search Your Property</div>
    <div class="panel-body text-center">
        <form role="form" class="form-inline" action="/search-property" method="get">
            <div class="form-group">
                <label for="location" class="sr-only">Password</label>
                <input id="location" type="text" name="location" placeholder="Location" class="form-control">
            </div>
            <div class="form-group">
                <label for="bedroom" class="sr-only">Password</label>
                <input id="bedroom" name="bedroom" type="text" placeholder="Number of Bedrooms" class="form-control">
            </div>
            <div class="form-group">
            <label for="category_name" class="sr-only">Password</label>
                <input id="category_name" type="text" name="category_name" placeholder="Category" class="form-control">
            </div>
            <div class="form-group">
            <label for="price" class="sr-only">Password</label>
            <input id="price" type="text" name="price" placeholder="Price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>
<!-- END panel-->