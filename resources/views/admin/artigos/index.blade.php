@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Lista de Artigos">
            <div class="row">
                <tabela-lista
                    v-bind:titulos="['#', 'Livro', 'Autor', 'Data']"
                    v-bind:itens="[[1, 'Sapiens', 'Harari', 'Hoje'], [2, 'Castaneda', 'Viagem a ixlan', 'ontem'], [3, 'Harry Potter', 'Num Lembro', 'Mais Além']]"
                    criar="#criar"
                    editar="#editar"
                    detalhe="#detalhe"
                    deletar="#deletar"

                ></tabela-lista>
            </div>
        </painel>
    </pagina>
@endsection
