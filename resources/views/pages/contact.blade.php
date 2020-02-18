@extends('layout/layout')

@section('content')

    <h1>Contact</h1>

    <section class="wrapsections-contact">
        <p>Wil je graag contact opnemen met ons? Dan kan dat via dit formulier. Je kunt ook contact opnemen met Hennie Bosch,
        Willeke Logtenberg of Jan van Huffelen.</p>
    </section>

    <form>
        <input required name="name" type="text" class="feedback-input" placeholder="Naam" />
        <input required name="email" type="text" class="feedback-input" placeholder="Email" />
        <textarea required name="text" class="feedback-input" placeholder="Bericht"></textarea>
        <input type="submit" value="VERSTUUR"/>
    </form>

    <section class="wrapsections-contact2">
        <p>Hennie Bosch<br>
            TEL<br>
            EMAIL</p>
    </section>

    <section class="wrapsections-contact3">
        <p>Jan van Huffelen<br>
            TEL<br>
            EMAIL</p>
    </section>

    <section class="wrapsections-contact4">
        <p>Willeke Logtenberg<br>
            TEL<br>
            EMAIL</p>
    </section>

    <section class="wrapsections-contact5">
        <p>VV Heerde<br>
            0578 691 298<br>
            Veldweg 1a, 8181 LP Heerde

    </section>



@endsection
