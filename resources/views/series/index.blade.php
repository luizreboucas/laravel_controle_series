<x-layout title="Séries">
    
    <a href="{{route("series.create")}}" class="btn btn-primary mb-5 mt-2">criar série</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">{{$serie->nome}}</li>
        @endforeach
    </ul>
    
</x-layout>
