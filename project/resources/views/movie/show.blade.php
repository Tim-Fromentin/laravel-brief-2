<x-layout>
    <h1>{{$movie->name}}</h1>
    <p>
        {{$movie->description}}
    </p>
    <p>
        Date de sortie <strong>
            {{$movie->date}}
        </strong>
    </p>
    <p>Notes
    <strong>{{$movie->rating}}</strong> / 5
    </p>
</x-layout>
