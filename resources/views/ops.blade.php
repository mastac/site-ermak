
@extends('layouts.app')

@section('title', 'Пожарная безопасность в Омске | ЕРМАК')

@section('keywords', 'пожарная безопасность, лицензия, омск')

@section('description', 'Лицензионная деательность по установке пожарной безопастности')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Пожарная безопастность</h1>
        </div>
    </div>

    <div class="container">

        <div style="text-align: center; margin-bottom: 30px;">
            <img src="images/license0.jpg" alt="Лицензия">
        </div>

        <div style="text-align: center;">
            <img src="images/license1.jpg" alt="Лицензия">
        </div>

    </div>

    @include('blocks.service-list')

@endsection