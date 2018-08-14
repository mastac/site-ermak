
@extends('layouts.app')

@section('title', 'Системы видеонаблюдения и пожарной безопасности в Омске | ЕРМАК')

@section('keywords', 'cистемы видеонаблюдения, пожарная безопасность, контроля доступа, омск')

@section('description', 'Выполняем пусконаладочные работы систем противопожарной защиты, видео наблюдения, контроля доступа')

@section('content')

    @include('blocks.carousel')

    @include('blocks.service-list')

    @include('blocks.5reason')

    @include('blocks.security-info')

    {{--@include('blocks.key-info')--}}

@endsection