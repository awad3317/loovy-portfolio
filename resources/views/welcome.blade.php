@extends('layouts.app')

@section('title', 'الرئيسية')


@section('content')
<section style="
    background-image: url('{{ asset('images/Rectangle.png') }}'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
    min-height: 80vh;
    position: relative;
">
 <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 intro-text">
                <h4 class="fw-bold text-dark">شركة المصنع الأول للصناعات الصحية المحدودة</h4>
                <p class="mt-3 mb-4 text-secondary">
                    نلتزم في الصناعات الصحية بتقديم منتجات آمنة وموثوقة تلبي أعلى معايير الجودة العالمية،
                    لنضمن راحة وصحة أطفالكم في كل لحظة.
                </p> 
                <button class="btn text-white rounded-4 px-5 fw-bold"
                        style="background-color: #2b3b6b; font-size: 1.5rem; font-weight: 900;">
                    أكتشف منتجاتنا
                </button>
            </div>
            <div class="col-lg-6 text-center intro-image">
                <img src="{{ asset('images/lofy1.png') }}" alt="صورة المنتجات" class="img-fluid" >
            </div>
        </div>
    </div>
</section>
@endsection

