@extends('base')

@section('content')

<section class="content_1">
    <div class="titre">
        <h1>Nos Cours</h1>
    </div>
    <!-- Je définie une ligne (row) que je divise en colonne (col_contenu1 : qui prends ma première image avec le titre et 'Découvrir') -->
    <div class="row">
        <div class="col_contenu1">
            <div class="img_muscu"></div>
            <h3>Espace Musculation</h3>
            <a href="{{ route('cours.index') }}" class="btn">Découvrir</a>
        </div>

        <div class="col_contenu2">
            <div class="img_cardio"></div>
            <h3>Espace Cardio</h3>    
            <a href="{{ route('cours.index') }}" class="btn">Découvrir</a>
        </div>
        
        <div class="col_contenu3">
            <div class="img_collectifs"></div>
            <h3>Cours Collectifs</h3>    
            <a href="{{ route('cours.index') }}" class="btn">Découvrir</a>
        </div>

        <div class="col_contenu4">
            <div class="img_boxe"></div>
            <h3>Boxing Club</h3>    
            <a href="{{ route('cours.index') }}" class="btn">Découvrir</a>
        </div>
    </div>
</section>

<section class="content_2">
    <div class="titre">
        <h1>Nos Coachs</h1>
    </div>
    <div class="row">
        <div class="col_contenu1">
            <div class="img_coach1"></div>
            <h3>Théo Gravier</h3>
            <a href="{{ route('contact.index') }}" class="btn">Contacter</a>
        </div>
        <div class="col_contenu2">
            <div class="img_coach2"></div>
            <h3>Léna Fadwa</h3>
            <a href="{{ route('contact.index') }}" class="btn">Contacter</a>
        </div>
        <div class="col_contenu3">
            <div class="img_coach3"></div>
            <h3>Mehdi Issam</h3>
            <a href="{{ route('contact.index') }}" class="btn">Contacter</a>
        </div>
    </div>
</section>

@endsection