@extends('layouts.main')

@section('title','product')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="ps-section__title" data-mask="products">- P r o d u c t s</h3>
                </div><!-- /.col-lg-12 -->

                @foreach ($products as $product)
                    <div class="col-xl-12 col-lg-4 col-md-6">
                        <div class="card text-center">
                            <a href="#"><img class="card-img" src="{{ asset('uploads/'.$product->image) }}"
                                             alt="{{ $product->name }}"></a>
                            <div class="card-body">
                                <p class="card-text">{{ $product->describe }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $(".content-container").css('min-height', window.innerHeight + 'px');

            $(window).resize(function () {
                $(".content-container").css('min-height', window.innerHeight + 'px');
            });
        });

    </script>
@endsection