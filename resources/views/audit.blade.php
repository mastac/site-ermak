
@extends('layouts.app')

@section('content')

    <div class="big-title">
        <div class="container">
            <h1 class="entry-title" itemprop="headline">Аудит охранно-пожарной безопасности</h1>
        </div>
    </div>

    <div class="container">

        <h1>Аудит</h1>

        <div class="row" style="margin-bottom:50px;">
            <div class="col-8">

                <p>
                    Аудит безопасности - это комплексное независимое обследование нашими экспертами объекта на предмет выявления незащищенных мест в системе безопасности с целью выработки рекомендаций по укреплению надежности. В результате Вы получаете рекомендации по оптимизации системы безопасности, которые обеспечат снижение затрат и повышение эффективности защищенности объекта.
                </p>

                <h2>Стоимость рассчитывается индивидуально</h2>

            </div>
            <div class="col-4">
                <img src="images/audit1.jpg" alt="Аудит охранно-пожарной безопасности" style="width: 100%;">
            </div>
        </div>

    </div>

    @include('blocks.service-list')

@endsection