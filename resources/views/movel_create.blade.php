<x-app-layout>
<h2>Create</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('movels.store') }}" method="post">
    @csrf
    <h6>Nome do móvel</h6>
    <input type="text" name="nome" placeholder="Digite o nome do móvel"> <br><br>

    <h6>Categoria</h6>
    <input type="text" name="categoria" placeholder="Digite a categoria do móvel"> <br><br>
    
    <h6>Preço do móvel</h6>
    <input type="text" name="preco" placeholder="Digite o preço do móvel"> <br><br>
    
    <h6>Estoque</h6>
    <input type="text" name="estoque" placeholder="Digite o estoque do móvel"> <br><br>
    
    <button type="submit" class="btn btn-secondary">Create</button>
    <a href="{{ route('movels.index') }}" class="btn btn-danger">Cancelar</a>
</form>

</x-app-layout>