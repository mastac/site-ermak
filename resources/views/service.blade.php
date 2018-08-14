
@extends('layouts.app')

@section('title', 'Наши услуги и цены Омске | ЕРМАК')

@section('keywords', 'омск, услуги, скидки, цены')

@section('description', 'Работаем с бюджетными организациями на особых условия в Омске')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Услуги и цены</h1>
        </div>
    </div>

    <div class="container">

        <h1>Гибкая система скидок.</h1>

        <p>Работаем с бюджетными организациями на особых условиях.</p>

    </div>

    @include('blocks.service-list')

@endsection