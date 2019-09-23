<template>
    <div>

        <div class="text-secondary mb-3 rounded item p-2 pl-4" v-for="item in itemenu.data" :key="item.index">

            <a :name="item.url.toLowerCase()"></a>
            <div class="text-dark p-3"> <span class="alert alert-primary"> {{item.method}} </span> <span class="ml-3">{{item.end_point}}</span> </div>
            <pre>{{item}}</pre>
        </div>
    </div>
</template>

<style>
    .item:hover{
        background: #cce5ff52 !important;
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid #b8daff;
    }

    pre{
        color: green;
        background: black;
        padding: 15px;
        border-radius: 5px;
    }
</style>

<script>
export default {
    props: ['itemenu'],
    data(){
        return{

        }
    },
    methods:{

    },
    mounted(){

    }
}
</script>
