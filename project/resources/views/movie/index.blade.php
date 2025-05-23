<x-layout>
    <style>
        .box {
            width: 90%;
            height: auto;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            gap: 25px;
        }
        .title {
            font-size: 2rem;
        }
        button {
            padding: 10px 25px;
            background: none;
            border: 1px solid black;
            margin: 15px 0;
        }
        .group_choice {
            display: flex;
            gap: 10px;
        }
        .group_choice select {
            width: 100px;
        }
    </style>
    <h1>Movies</h1>

    <div class="group_choice">

    <form action="{{route('movie.indexAsc')}}" method="get">

    <button type="submit">Date decroissant</button>

    </form>
    <form action="{{route('movie.index')}}" method="get">

        <button type="submit">Date croissant</button>

    </form>

    <form action="{{route('movie.indexRatingAsc')}}" method="get">

        <button type="submit">Note croissant</button>

    </form>

    <form action="{{route('movie.indexRatingDesc')}}" method="get">

        <button type="submit">Note decroissant</button>

    </form>

    <form action="{{route('movie.indexRating')}}" method="get">
        Note
        <select name="rating" id="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>
            <button type="submit">filtrer par Note</button>
    </form>

    </div>

    @forelse($movies as $movie)

        <div class="box">
        <a href="{{route('movie.show', $movie->id)}}" class="title">{{$movie->name}}</a>
            <p>Date de sortie <span>{{ \Carbon\Carbon::parse($movie->date)->format('Y') }}</span></p>
            <p>
                Note
                <strong>
                    {{$movie->rating}}
                </strong>
                    / 5
            </p>
            <a href="{{route('movie.edit', $movie)}}">modif</a>
            <form action="{{route('movie.destroy', $movie->id)}}" method="post">
                @csrf
                @method('DELETE')

                <button type="delete">Supprimer</button>
            </form>
        </div>

    @empty
        <h1>Pas de film trouvé</h1>
    @endforelse
    <a href="{{url('/movies/create')}}">Ajouter</a>
</x-layout>
