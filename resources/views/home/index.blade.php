@extends('layouts.app')
@section('title', 'Legal Zoom')


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12" style="margin-bottom: 10px">
                <div class="pull-right">
                    <div class="btn btn-default start_game">Start Game</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default game" style="display: none">
                    <div class="panel-body">

                        <div class="col-md-12">
                            <pull class="left">
                                <ul class="list-inline">
                                    <li class="">Lifes Available: <span class="lifes">3</span></li>
                                    <li class="">Points: <span class="points">0</span></li>
                                </ul>
                            </pull>
                        </div>

                        <h1 class="current_card text-center"></h1>
                        <input type="hidden" name="card_key" value="">

                        <div class="col-md-12">
                            <ul class="list-unstyled">
                                <li class="btn btn-default btn-check-card" data-id="higher">Higher</li>
                                <li class="btn btn-default btn-check-card" data-id="lower">Lower</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection