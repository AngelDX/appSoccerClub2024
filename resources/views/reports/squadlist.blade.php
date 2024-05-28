<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .titulo{
        color: blue;
        text-decoration: underline;
        text-align: center;
    }
    table{
        border: 1px solid blue;
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid blue;
        padding: 4px;
    }
    thead{
        background-color: blue;
        color: white;
    }
    tbody{
        font-size: 0.9em;
    }
    .imagen{
        position: absolute;
        top: -10;
    }
</style>
<div style="margin-top: 40px">
    <img class="imagen" src="img/logo.webp" width="150px">
    <h1 class="titulo">Equipo de futbol</h1>
</div>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NOMBRE COMPLETO</th>
            <th>F. NACIMIENTO</th>
            <th>NÚMERO</th>
            <th>POSICIÓN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $key=>$player)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$player->fullname}}</td>
            <td>{{\Carbon\Carbon::parse($player->birthdate)->formatLocalized('%d/%m/%Y')}}</td>
            <td>{{$player->number}}</td>
            <td>{{$player->position->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
