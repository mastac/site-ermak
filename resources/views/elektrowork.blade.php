
@extends('layouts.app')

@section('title', 'Электромонтажные работы в Омске | ЕРМАК')

@section('keywords', 'омск, услуги, электрика, электропроводка, розетки, выключатель, освещение')

@section('description', 'Любые работа связаные с электрикой в Омске')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Электромонтажные работы</h1>
        </div>
    </div>

    <div class="container">

        <div class="row" style="margin-bottom:50px;">
            <div class="col-4">
                <h2 style="font-size: 1.2em;">Замена электропроводки</h2>
                <img src="images/elektrowork1.jpg" alt="Замена электропроводки" style="width:100%">
            </div>
            <div class="col-4">
                <h2 style="font-size: 1.2em;">Услуги электрика</h2>
                <img src="images/elektrowork2.jpg" alt="Услуги электрика" style="width:100%">
            </div>
            <div class="col-4">
                <h2 style="font-size: 1.2em;">Установка и сборка электрощита</h2>
                <img src="images/elektrowork3.jpg" alt="Установка и сборка электрощита" style="width:100%">
            </div>
        </div>

        <div class="row">
            <div class="col-4" style="margin-bottom:50px;">
                <h2 style="font-size: 1.2em;">Установка розеток</h2>
                <img src="images/elektrowork4.jpg" alt="Установка розеток" style="width:100%">
            </div>
            <div class="col-4">
                <h2 style="font-size: 1.2em;">Установка выключателей</h2>
                <img src="images/elektrowork5.jpg" alt="Установка выключателей" style="width:100%">
            </div>
            <div class="col-4">
                <h2 style="font-size: 1.2em;">Монтаж освещения помещений</h2>
                <img src="images/elektrowork6.jpg" alt="Монтаж освещения помещений" style="width:100%">
            </div>
        </div>

    </div>

    <hr>

    @include('blocks.service-list')

@endsection