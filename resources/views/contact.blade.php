@extends('layouts.main')

@section('title','contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @component('vendor.comments.components.comments',['model'=>$product])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection