<template>
    <div class="col-12">
        <a v-if="criar" v-bind:href="criar">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" v-for="titulo in titulos">{{titulo}}</th>
                    <th scope="col" v-if="detalhe || editar || deletar">Ações</th>
                </tr>
            </thead>
            <tbody>
            <tr v-for="(item,itemId) in itens">
                <td v-for="row in item">{{row}}</td>
                <td v-if="detalhe || editar || deletar">
                    <form v-bind:id="itemId" v-if="deletar && token" v-bind:action="deletar" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">
                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar" v-bind:href="editar">Editar |</a>
                        <a v-if="deletar" href="#" v-on:click="executaDelete(itemId)">Deletar</a>
                    </form>
                    <span v-if="!token">
                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar" v-bind:href="editar">Editar |</a>
                        <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                    </span>
                    <span v-if="token && !deletar">
                        <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                        <a v-if="editar" v-bind:href="editar">Editar |</a>
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "TabelaLista",
        props: ['titulos','itens', 'criar', 'detalhe', 'editar', 'deletar', 'token'],
        methods: {
            executaDelete: function (index) {
                document.getElementById(index).submit()
            }
        }
    }
</script>

<style scoped>

</style>
