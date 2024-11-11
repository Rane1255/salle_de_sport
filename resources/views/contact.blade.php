<!-- 
    Je définie une section 'contact'
        'contact' : que je divise en deux class ('titre' et 'localisation')
        dans 'localisation' : je mets l'adresse' et la 'maps'
-->
@extends('base')

@section('content')

<section class = contact>
    <div class="titre">
        <h1>Nos Contacter</h1>
    </div>
    <div class="localisation">
        <div class="adresse">
            <div class="logo">
                <h1>Fitness Force</h1>
            </div>
            <p>FitnessForce@contact.com</p>
            <p>09 22 25 08 19</p>
            <p>8 Bd Louis XIV, 59000 Lille</p>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5061.939428625491!2d3.068374564111139!3d50.62767942057657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5928753e249%3A0x27545fb60fab01b3!2s%C3%89cole%20Nationale%20Sup%C3%A9rieure%20des%20Arts%20et%20M%C3%A9tiers!5e0!3m2!1sfr!2sfr!4v1729380944101!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
    <div class="formulaire">
        <form>
            <input type="text" id="nom" placeholder="Votre Nom" minlength="2" maxlength="20" required>

            <input type="text" id="prenom" placeholder="Votre Prénom" required>

            <input type="text" id="demande" placeholder="Votre Demande" required>

            <input type="email" id="mail" placeholder="Votre E-mail" required>

            <textarea name="message" id="message" placeholder="Votre Message" required></textarea>

            <a href="{{ route('contact.index') }}" class="btn">Envoyer</a>
        </form>
    </div>
</section>

@endsection