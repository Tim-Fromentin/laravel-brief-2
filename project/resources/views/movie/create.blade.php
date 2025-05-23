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
    <form action="{{route('movie.store')}}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="name">
        <textarea id="description" name="description">
            Description
        </textarea>
        <input type="number" name="rating" id="rating" placeholder="rating" maxlength="5" step="0.1">
        <input type="date" name="date" id="date">

        <button type="submit">add</button>
    </form>
</x-layout>
