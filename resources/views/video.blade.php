
@extends('layouts.app')

@section('title', 'Системы видеонаблюдения в Омске | ЕРМАК')

@section('keywords', 'видеонаблюдение, омск')

@section('description', 'Монтаж и установка систем видео наблюдения в Омске')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Системы видеонаблюдения</h1>
        </div>
    </div>

    <div class="container">

        <h1>СИСТЕМЫ ВИДЕОНАБЛЮДЕНИЯ НА СТРАЖЕ ПОРЯДКА</h1>

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-8">
                <p>
                    Система видеонаблюдения решает проблему визуальной фиксации происходящего на объекте, записи и хранения информации. Грамотно спроектированное и установленное видеонаблюдение позволяет контролировать ситуацию с нескольких камер одновременно.
                </p>

                <p>
                    Мы предлагаем комплекс услуг по использованию данной системы. Учитывая специфику объекта, мы применяем цифровые или аналоговые камеры видеонаблюдения. Монтаж и настройка системы производится опытными, высокопрофессиональными и сертифицированными специалистами нашей компании.
                </p>
            </div>
            <div class="col-4">
                <img src="images/video1.jpg" style="width: 100%;" alt="СИСТЕМЫ ВИДЕОНАБЛЮДЕНИЯ">
            </div>
        </div>

    </div>

    @include('blocks.service-list')

@endsection