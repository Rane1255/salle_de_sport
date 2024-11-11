<!-- 
    J'ai divisé ma page d'Accueil en deux grandes sections ('content_1' et 'content_2') 
        'content_1' : qui présente Nos Cours et, qui prends 4 class, dans chaque class j'ai une image, un titre et un lien btn Découvrir qui pointe vers ma page de Cours
        'content_2' : qui présente Nos Coachs et, qui prends 3 class, dans chaque class, j'ai une image, le nom du coach et un lien btn Contacter qui pointe vers ma page Contact
-->

@extends('base')

@section('content')



<section class="content_1">
    <div class="titre">
        <h1>Nos Cours</h1>
    </div>
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