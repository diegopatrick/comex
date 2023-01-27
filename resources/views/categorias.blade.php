<x-layout title="Categorias">
    <div>
        <a href="{{ url('categorias/criar') }}">Criar</a>
    </div>
    <ul>
        @foreach($categorias as $c)
        <li>{{ $c->nome }}</li>
        @endforeach
    </ul>
</x-layout>