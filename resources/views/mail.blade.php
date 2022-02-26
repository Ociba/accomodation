@extends('layouts.frontend')

<style>
  .bg-orange-700 {
    color:#FFA500;
  }
</style>
@section('content')
          <main class="my-8">
            @include('layouts.messages')
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                     
                        <h3 class="text-3xl text-bold">Message</h3>
                      <div class="flex-1">
                        <p>{{$name}}</p>
                        <p>{{$body}}</p>
                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection