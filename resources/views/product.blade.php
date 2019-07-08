@extends('layouts.main')

@section('title','product detail')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="ps-section__title" data-mask="products">- P r o d u c t </h3>
                </div><!-- /.col-lg-12 -->

                @foreach ($product->pictures as $pictures)
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <a href="#"><img class="card-img" src="{{ asset('uploads/'.$pictures) }}"></a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection