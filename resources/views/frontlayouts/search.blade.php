<div class="panel panel-default" style="margin-top:-50px;">
    <div class="panel-heading text-center">Search Your Property</div>
    <div class="panel-body text-center">
        <form role="form" class="form-inline">
            <div class="form-group">
                <label for="input-password" class="sr-only">Password</label>
                    <select name="quantity"  class="form-control col-sm-6">
                        <option>Location</option>
                        @foreach($get_property_info as $searc_info)
                        <option value="{{$searc_info->id}}">{{$searc_info->location}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="input-password" class="sr-only">Password</label>
                <input id="input-password" type="text" placeholder="Number of Bedrooms" class="form-control">
            </div>
            <div class="form-group">
            <label for="input-password" class="sr-only">Password</label>
               <select name="quantity"  class="form-control">
                   <option>Category</option>
                    @foreach($get_property_info as $searc_info)
                    <option value="{{$searc_info->id}}">{{$searc_info->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label for="input-password" class="sr-only">Password</label>
            <input id="input-password" type="text" placeholder="Price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>
<!-- END panel-->