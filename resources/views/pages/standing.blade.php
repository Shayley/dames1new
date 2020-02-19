@extends('layout/layout')

@section('content')

    <!DOCTYPE html>
    <html>
        <head>
            <link href="{{asset('css/standings.css')}}" rel="stylesheet">
        </head>
        <body>

        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

        <h1>Stand</h1>

        <div class="ptable">
            <table>
                <tr class="col">
                    <th>#</th>
                    <th>Team</th>
                    <th>G</th>
                    <th>W</th>
                    <th>GL</th>
                    <th>V</th>
                    <th>P</th>
                    <th>+</th>
                    <th>-</th>
                </tr>
                <tr class="wpos">
                    <td>1</td>
                    <td>FC Horst VR1</td>
                    <td>10</td>
                    <td>7</td>
                    <td>2</td>
                    <td>1</td>
                    <td><b>23</b></td>
                    <td>39</td>
                    <td>16</td>
                </tr>
                <tr class="wpos">
                    <td>2</td>
                    <td>asv Dronten VR2</td>
                    <td>11</td>
                    <td>6</td>
                    <td>3</td>
                    <td>2</td>
                    <td><b>21</b></td>
                    <td>39</td>
                    <td>16</td>
                </tr>
                <tr class="wpos">
                    <td>3</td>
                    <td>DVS'33 Ermelo VR3</td>
                    <td>10</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td><b>20</b></td>
                    <td>30</td>
                    <td>12</td>
                </tr>
                <tr class="wpos">
                    <td>4</td>
                    <td>Sparta Nijkerk VR3</td>
                    <td>10</td>
                    <td>6</td>
                    <td>0</td>
                    <td>4</td>
                    <td><b>18</b></td>
                    <td>32</td>
                    <td>27</td>
                </tr>
                <tr class="pos">
                    <td>5</td>
                    <td>Hierden VR1</td>
                    <td>11</td>
                    <td>5</td>
                    <td>1</td>
                    <td>5</td>
                    <td><b>16</b></td>
                    <td>29</td>
                    <td>34</td>
                </tr>
                <tr class="pos">
                    <td>6</td>
                    <td>VVOP VR1</td>
                    <td>11</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td><b>15</b></td>
                    <td>26</td>
                    <td>26</td>
                </tr>
                <tr class="pos">
                    <td>7</td>
                    <td>VSCO'61 VR1</td>
                    <td>10</td>
                    <td>4</td>
                    <td>2</td>
                    <td>4</td>
                    <td><b>14</b></td>
                    <td>29</td>
                    <td>23</td>
                </tr>
                <tr class="pos">
                    <td>8</td>
                    <td>VVOG VR1</td>
                    <td>11</td>
                    <td>4</td>
                    <td>1</td>
                    <td>6</td>
                    <td><b>13</b></td>
                    <td>20</td>
                    <td>18</td>
                </tr>
                <tr class="pos">
                    <td>9</td>
                    <td>SDC Putten VR2</td>
                    <td>10</td>
                    <td>2</td>
                    <td>0</td>
                    <td>8</td>
                    <td><b>6</b></td>
                    <td>12</td>
                    <td>32</td>
                </tr>
                <tr class="pos">
                    <td>10</td>
                    <td><b>Heerde VR1</b></td>
                    <td>10</td>
                    <td>1</td>
                    <td>0</td>
                    <td>9</td>
                    <td><b>3</b></td>
                    <td>11</td>
                    <td>48</td>
                </tr>
            </table>
        </div>

        </body>
    </html>

@endsection
