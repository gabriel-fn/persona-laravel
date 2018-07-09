<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Create Persona PDF</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $persona['nome'] }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nível de Campanha: {{ $persona['np'] }} - Total de pontos: {{ $total['all'] }}pp</h6>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Habilidades ({{ $total['habilidade'] }}pp)</h5>
                    <p class="card-text">
                        <ul>
                            <li>Força {{ $persona['forca'] }} ({{ $bonus['forca'] }})</li>
                            <li>Destreza {{ $persona['destreza'] }} ({{ $bonus['destreza'] }})</li>
                            <li>Constituição {{ $persona['constituicao'] }} ({{ $bonus['constituicao'] }})</li>
                            <li>Sabedoria {{ $persona['sabedoria'] }} ({{ $bonus['sabedoria'] }})</li>
                            <li>Inteligência {{ $persona['inteligencia'] }} ({{ $bonus['inteligencia'] }})</li>
                            <li>Carisma {{ $persona['carisma'] }} ({{ $bonus['carisma'] }})</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Combate ({{ $total['combate'] }}pp)</h5>
                    <p class="card-text">
                        <ul>
                            <li>Dano {{ $bonus['dano'] }}</li>
                            <li>Ataque {{ $bonus['ataque'] }}</li>
                            <li>Defesa {{ $bonus['defesa'] }}</li>
                            <li>Vida {{ $bonus['vida'] }}</li>
                            <li>Iniciativa {{ $bonus['iniciativa'] }}</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Salvamentos ({{ $total['salvamento'] }}pp)</h5>
                    <p class="card-text">
                        <ul>
                            <li>Resistência {{ $bonus['resistencia'] }}</li>
                            <li>Reflexo {{ $bonus['reflexo'] }}</li>
                            <li>Fortitude {{ $bonus['fortitude'] }}</li>
                            <li>Vontade {{ $bonus['vontade'] }}</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Poderes ({{ $total['poder'] }}pp)</h5>
                    @foreach($persona['poderes'] as $poder)
                    <ul class="list-group mb-2">
                        <li class="list-group-item list-group-item-secondary">
                            {{ $poder['nome'] }}
                        </li>
                        <li class="list-group-item">                    
                            Extras:
                            @foreach($poder['extras'] as $extra)
                                {{ $extra['nome'] }} +{{ $extra['modificador'] }};
                            @endforeach
                        </li>
                        <li class="list-group-item">
                            Falhas:
                            @foreach($poder['falhas'] as $falha)
                                {{ $falha['nome'] }} -{{ $falha['modificador'] }};
                            @endforeach
                        </li>
                        <li class="list-group-item">    
                            Feitos de Poder:
                            @foreach($poder['opcoes'] as $opcao)
                                {{ $opcao['nome'] }} {{ $opcao['modificador'] }};
                            @endforeach
                        </li>
                        <li class="list-group-item">    
                            Poderes Alternativos:
                            @foreach($poder['poderes_alternativos'] as $poder_alternativo)
                                {{ $poder_alternativo['nome'] }} {{ $poder_alternativo['modificador'] }};
                            @endforeach
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Feitos ({{ $total['feito'] }}pp)</h5>
                    <p class="card-text">
                        <ul>
                            @foreach($persona['feitos'] as $feito)
                            <li>{{ $feito['nome'] }} {{ $feito['graduacao'] }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Pericias ({{ $total['pericia'] }}pp)</h5>
                    <p class="card-text">
                    <ul>
                        @foreach($persona['pericias'] as $pericia)
                        <li>
                            {{ $pericia['nome'] }}
                            @if($pericia['habilidade_chave']) 
                            {{ $pericia['graduacao'] + $bonus[$pericia['habilidade_chave']] }}
                            @else
                            {{ $pericia['graduacao'] }}
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    </p>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">Desvantagens (-{{ $total['desvantagem'] }}pp)</h5>
                    <p class="card-text">
                        <ul>
                            @foreach($persona['desvantagens'] as $desvantagem)
                            <li>{{ $desvantagem['nome'] }} -{{ $desvantagem['graduacao'] }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

