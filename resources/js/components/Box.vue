<template>
    <div class="small-box" v-bind:style="defineCor">
        <div class="inner">
            <h3>{{indicador}}</h3>

            <p>{{titulo}}</p>
        </div>
        <div class="icon">
            <i v-bind:class="icone"></i>
        </div>
        <a v-bind:href="url" class="small-box-footer">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</template>

<script>
    export default {
        name: "Box",
        props: ['indicador', 'titulo', 'url', 'cor', 'icone'],
        computed: {
            defineCor: function () {
                return "background-color:" + this.cor + " !important;"
            }
        }
    }
</script>

<style scoped>
    .small-box, .small-box > a {
        color: #fff !important;
    }

    .small-box {
        border-radius: .25rem;
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
        display: block;
        margin-bottom: 20px;
        position: relative;
    }

    .small-box:hover {
        text-decoration: none;
    }

    .small-box > .inner {
        padding: 10px;
    }

    .small-box h3 {
        font-size: 2.2rem;
        font-weight: 700;
        margin: 0 0 10px 0;
        padding: 0;
        white-space: nowrap;
    }

    .small-box .icon {
        color: rgba(0, 0, 0, .15);
        z-index: 0;
    }

    .small-box .icon > i.fa, .small-box .icon > i.fab, .small-box .icon > i.far, .small-box .icon > i.fas, .small-box .icon > i.glyphicon, .small-box .icon > i.ion {
        font-size: 70px;
        top: 20px;
    }

    .small-box:hover .icon > i.fa, .small-box:hover .icon > i.fab, .small-box:hover .icon > i.far, .small-box:hover .icon > i.fas, .small-box:hover .icon > i.glyphicon, .small-box:hover .icon > i.ion {
        font-size: 80px;
    }

    .small-box .icon > i {
        font-size: 90px;
        position: absolute;
        right: 15px;
        top: 15px;
        transition: all .3s linear;
    }

    .small-box > .small-box-footer {
        background: rgba(0, 0, 0, .1);
        color: rgba(255, 255, 255, .8);
        display: block;
        padding: 3px 0;
        position: relative;
        text-align: center;
        text-decoration: none;
        z-index: 10;
    }

    .small-box > .small-box-footer:hover {
        background: rgba(0, 0, 0, .30);
        color: #fff;
    }


</style>
