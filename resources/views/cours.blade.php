<!-- 
    Je définie une section 'cours' que je divise en trois div/class ('titre', 'nos_cours' et 'planning')
        'titre' : contient mon titre
        'nos_cours' : contient une liste des cours pratiqués dans la salle de sport
        'planning' : contient une image de mon planning que j'ai créée avec Word, en respectant le code couleur des cours
-->

@extends('base')

@section('content')

<section class="cours">
    <div class="titre">
        <h1>Nos Cours</h1>
    </div>
    <div class="nos_cours">
        <div class="cours_1">BOXE</div>
        <div class="cours_2">CARDIO/MUSCULATIO</div>
        <div class="cours_3">CROSS TRAINING</div>
        <div class="cours_4">CUISSES/ABDOS/FESSIERS</div>
        <div class="cours_5">HIIT</div>
        <div class="cours_6">MMA</div>
        <div class="cours_7">PILATES</div>
        <div class="cours_8">STEP</div>
        <div class="cours_9">TRX</div>
        <div class="cours_10">VELO</div>
        <div class="cours_11">YOGA</div>
        <div class="cours_12">ZUMBA</div>
    </div>
    <div class="planning"></div>
</section>


@endsection