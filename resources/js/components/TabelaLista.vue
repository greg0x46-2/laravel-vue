<template>
    <div class="col-12">
        <div class="col">
            <a v-if="criar" v-bind:href="criar">Criar</a>
            <div class="float-right">
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th style="cursor: pointer" scope="col" v-on:click="ordenaColuna(index)" v-for="(titulo,index) in titulos">{{ titulo }}</th>
                <th scope="col" v-if="detalhe || editar || deletar">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item,itemId) in lista">
                <td v-for="row in item">{{ row }}</td>
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
    props: ['titulos', 'itens', 'ordem', 'ordemcol', 'criar', 'detalhe', 'editar', 'deletar', 'token'],
    data: function () {
        return {
            buscar: '',
            ordemAux: this.ordem || 'asc',
            ordemAuxCol: this.ordemcol || 0
        }
    },
    methods: {
        executaDelete: function (index) {
            document.getElementById(index).submit()
        },
        ordenaColuna: function (coluna){
            this.ordemAuxCol = coluna;
            if(this.ordemAux.toLowerCase() == 'asc'){
                this.ordemAux = 'desc';
            }else{
                this.ordemAux = 'asc';
            }
        }
    },
    computed: {
        lista: function () {
            let ordem = this.ordemAux || 'asc';
            let ordemCol = this.ordemAuxCol || 0;
            ordemCol = parseInt(ordemCol);

            if(ordem.toLowerCase() == 'asc'){
                this.itens.sort(function (a,b){
                    if(a[ordemCol] > b[ordemCol]) {return 1}
                    if(a[ordemCol] < b[ordemCol]) {return -1}
                    return 0;
                })
            }else{
                this.itens.sort(function (a,b){
                    if(a[ordemCol] < b[ordemCol]) {return 1}
                    if(a[ordemCol] > b[ordemCol]) {return -1}
                    return 0;
                })
            }

            return this.itens.filter(res => {
                for (let k = 0; k < res.length; k++){
                    if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                        return true
                    }
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
