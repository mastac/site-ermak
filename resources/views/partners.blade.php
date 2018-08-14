
@extends('layouts.app')

@section('title', 'Наши партнеры в Омске | ЕРМАК')

@section('keywords', 'омск, услуги, партнеры')

@section('description', 'Наши партнеры с которыми мы работаем в Омске')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Наши партнеры</h1>
        </div>
    </div>

    <div class="container">

        <div class="row" style="margin-bottom: 50px;">

            <div class="col-3">
                <img src="images/partners/rjd.jpg" style="width:150px" alt="Российские железные дороги"/>
            </div>

            <div class="col-3">
                <img src="images/partners/okb.png" style="width:150px" alt="Обласная клиническая больница. г Омск"/>
            </div>

            <div class="col-3">
                <img src="images/partners/fgbu.jpg" style="width:150px" alt="фгбу-россельхознадзор-утв"/>
            </div>

            <div class="col-3">
                <img src="images/partners/magnit.jpg" style="width:150px" alt="Магнит"/>
            </div>

        </div>

    </div>


@endsection