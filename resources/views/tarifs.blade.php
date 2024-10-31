@extends('base')

@section('content')

<section class="tarifs">
    <div class="titre">
        <h1>Nos Tarifs</h1>
    </div>
    <div class="nos_tarifs">
        <div class="basic">
            <h3>Basic</h3>
            <h4>19.99€</h4>
            <h5>/ semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <div class="confort">
            <h3>Confort</h3>
            <h4>24.99€</h4>
            <h5>/ semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <div class="premium">
            <h3>Premium</h3>
            <h4>29.99€</h4>
            <h5>/ semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
    </div>
</section>

@endsection