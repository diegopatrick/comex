<x-layout title="Categorias Criar">
    <div>
        <a href="{{ url('categorias') }}">Lista</a>
    </div>
    <div>
        <form action="{{ url('categorias/store') }}" method="post">
            @csrf

            <input type="text" name="nome" required>
            <button type="submit">Adicionar</button>
        </form>
    </div>
    
</x-layout>