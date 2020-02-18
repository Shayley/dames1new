@extends('layout/layout')

@section('content')
    <!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>

        <h1>Wedstrijden</h1>
        <br>
        <br>
        <h2>Recente uitslag</h2>
        <table class="rwd-table">
            <tr>
                <th>Datum</th>
                <th></th>
                <th>Wedstrijd</th>
                <th></th>
                <th>Uitslag</th>
            </tr>
            <tr>
                <td data-th="Datum">15 feb. 14:30</td>
                <td data-th=""><img style="max-width: 35px;" src="{{asset('assets/img/heerde.png')}}"></td>
                <td data-th="Wedstrijd">Heerde VR1 - VSCO'61 VR1</td>
                <td data-th=""><img style="max-width: 40px;" src="{{asset('assets/img/VSCO.png')}}"></td>
                <td data-th="Uitslag">-</td>
            </tr>
        </table>
    <br>
        <br>
        <h2>Programma</h2>
        <table class="rwd-table">
            <tr>
                <th>Datum</th>
                <th></th>
                <th>Wedstrijd</th>
                <th></th>
                <th>Uitslag</th>
            </tr>
            <tr>
                <td data-th="Datum">7 mrt. 10:30</td>
                <td data-th=""><img style="max-width: 35px;" src="{{asset('assets/img/VVOP.png')}}"></td>
                <td data-th="Wedstrijd">VVOP VR1 - Heerde VR1</td>
                <td data-th=""><img style="max-width: 40px;" src="{{asset('assets/img/heerde.png')}}"></td>
                <td data-th="Uitslag">-</td>
            </tr>
        </table>

        </body>
    </html>

@endsection
