<template>
    <div v-bind:class="defineCor">
        <div class="card-header">{{titulo}}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['titulo', 'cor'],
        computed: {
            defineCor: function () {
                return "card " + (this.cor || "");
            }
        }
    }
</script>

<style>
    .blue {
        border-color: #055399;
    }

    .blue > .card-header {
        background-color: #055399;
        color: #ffffff;
    }

    .orange {
        border-color: #d97b35;
    }

    .orange > .card-header {
        background-color: #d97b35;
        color: #ffffff;
    }

    .green {
        border-color: #2f7606;
    }

    .green > .card-header {
        color: #ffffff;
        background-color: #2f7606;
    }
</style>
