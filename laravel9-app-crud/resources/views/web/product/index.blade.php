@extends('layouts.header')

{{-- @section('content') --}}

<div id="chefs" class="parallax pricing">
    <div class="container inner">

        <h2 class="section-title text-center">販売中のケーキ</h2>
        <div class="row text-center chefs">
            @foreach ($products as $product)
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="{{ asset($product->path) }}" width="100%">
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p>¥{{ $product->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- @stop --}}
@extends('layouts.footer')
