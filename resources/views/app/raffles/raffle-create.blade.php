@extends('layouts.app.layout')

@section('content')
    <form method="post" action="{{route('rifas.store')}}">@csrf
        <fieldset>
            <div class="form-group">
                <label for="">Titulo da Rifa</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label for="">Descrição</label>
                <textarea name="" id="" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="">Preço Unitário da Rifa</label>
                <input type="number"  min="0.01" step=".01" name="price">
            </div>
            <div class="form-group">
                <label for="">Quantidade total de rifas</label>
                <input type="number" name="ticket_amount">
            </div>
            <div class="form-group">
                <label for="">Quantidade de sorteios</label>
                <input type="number" name="sweepstakes_amount">
            </div>
            <div class="form-group">
                <label for="">Data do sorteio</label>
                <input type="datetime-local" name="sweepstakes_date">
            </div>
            <div class="form-group">
                <button>Próximo</button>
            </div>
        </fieldset>
    </form>
@endsection