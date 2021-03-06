
@extends('layouts.app')

@section('title', 'Система Контроля и Управления Доступом в Омске | ЕРМАК')

@section('keywords', 'контроль, управление, доступ, скуд, омск, турникеты, шлагбаумы')

@section('description', 'Монтаж и установка система контроля доступом СКУД в Омске')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Система Контроля и Управления Доступом</h1>
        </div>
    </div>

    <div class="container">


        <h1>Система Контроля и Управления Доступом (СКУД)</h1>

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-6">
                <p>СКУД - программно-аппаратный комплекс, который ограничивает проникновение лиц на объект и перемещение сотрудников без права доступа. Такая система позволяет вести статистику посещений, а также проводить анализ рабочего времени сотрудников по различным критериям.</p>

                <p>Наличие систем контроля доступа на объекте является удобным средством для ограничения входа или въезда посторонних посетителей, организации комфорта и безопасности.</p>

                <p>При необходимости на платформе систем контроля и управления доступом можно создать систему, объединяющую в единый комплекс видеонаблюдение, охранную и пожарную сигнализации.</p>

                <p>
                    СКУД состоит из:
                </p>

                <ul>
                    <li>средств управления доступом: кодовых панелей, считывателей, картоприемников</li>
                    <li>исполняющих устройств: электронных замков и доводчиков на двери, турникетов, шлагбаумов, ворот, контрольно-пропускных шлюзов</li>
                    <li>персональных идентификаторов: магнитных карт, ключей Touch Memory</li>
                    <li>программного компьютерного обеспечения с базой данных и статистикой проходов</li>
                </ul>

            </div>
            <div class="col-6">

                <div>
                    <img src="images/skud1.jpg" alt="Система Контроля и Управления Доступом (СКУД)" style="width:100%">
                </div>

            </div>
        </div>

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-6" style="text-align: center;">
                <h2>Шлагбаумы</h2>
                <img src="images/skud2.jpg" alt="Система Контроля и Управления Доступом (СКУД) - Шлакбаум" style="width:100%">
            </div>
            <div class="col-6" style="text-align: center;">
                <h2>Турникеты</h2>
                <img src="images/skud3.jpg" alt="Система Контроля и Управления Доступом (СКУД) - Турникет" style="height:366px">
            </div>
        </div>

    </div>

    @include('blocks.service-list')

@endsection