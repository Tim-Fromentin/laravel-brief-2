<x-layout>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: baseline;
            gap: 20px;
        }
        input {
            width: 100%;
        }
    </style>
    <form action="{{route('movie.update', $movie)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" placeholder="name" value="{{$movie->name}}">
        <textarea id="description" name="description">
            {{$movie->description}}
        </textarea>
        <input type="number" name="rating" id="rating" placeholder="rating" maxlength="5" step="0.1" value="{{$movie->rating}}">
        <input type="date" name="date" id="date" value="{{$movie->date}}">

        <button type="submit">Edit</button>
    </form>
</x-layout>
