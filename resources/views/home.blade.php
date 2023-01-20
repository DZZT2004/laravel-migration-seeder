<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <div>
        <h1>Treni in partenza oggi</h1>
        <h4>Legenda: Azienda - Stazione Partenza - Stazione Arrivo - Orario Partenza - Orario Arrivo - Codice Treno - Treno Cancellato</h4>
        <ul>
            @foreach ($trains as $train)
                @if ($train->data_partenza == date('Y-m-d'))
                    <li>{{ $train->azienda }} - {{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }} - 
                        {{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo}} - {{ $train->codice_Treno }} -
                        @if($train->cancellato)
                            Si
                        @else
                            No
                        @endif  
                        
                    </li>
                    <br>
                @endif
            @endforeach
        </ul>
    </div>
</body>
</html>