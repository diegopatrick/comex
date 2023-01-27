<x-layout title="Categorias">
    <ul>
        @foreach($categorias as $c)
        <li>{{ $c }}</li>
        @endforeach
    </ul>
</x-layout>