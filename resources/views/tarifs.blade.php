<!-- 
    j'ai définie une section 'tarifs' qui contient deux div ('titre' et 'nos_tarifs')
        'titre' : contient mon titre
        'nos_tarifs' : contient nos trois formules d'abonnement ('basic', 'confort' et 'premium')
            dans chaque formule : je définie un titre , le prix et un lien btn qui pointe vers ma page 'Contact'
-->

@extends('base')

@section('content')

<section class="tarifs">
    <div class="titre">
        <h1>Nos Tarifs</h1>
    </div>
    <div class="nos_tarifs">
        <div class="association">
            <h3>Association</h3>
            <h4>15€</h4>
            <h5>/ an</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <div class="seance">
            <h3>Adhésion</h3>
            <h4>10€</h4>
            <h5>/ 1 séance</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <div class="carnet">
            <h3>Adhésion</h3>
            <h4>90€</h4>
            <h5>/ 10 séances</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <div class="basic">
            <h3>Basic</h3>
            <h4>30€</h4>
            <h5>/ 4 semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
        <!-- <div class="confort">
            <h3>Confort</h3>
            <h4>34.99€</h4>
            <h5>/ 4 semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div> -->
        <div class="premium">
            <h3>Premium</h3>
            <h4>60€</h4>
            <h5>/ 4 semaines</h5>
            <a href="{{ route('contact.index') }}" class="btn">choisir</a>
        </div>
    </div>
</section>

@endsection