@extends('layouts.main')

@section('title','product')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="ps-section__title" data-mask="products">- P r o d u c t   L i s t</h3>
                </div><!-- /.col-lg-12 -->

                @foreach ($products as $product)
                    <div class="col-xl-12 col-lg-12 col-md-12">
                            <a href="{{ route('product',$product->id) }}"><img class="card-img" src="{{ asset('uploads/'.$product->image) }}"
                                             alt="{{ $product->name }}"></a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection