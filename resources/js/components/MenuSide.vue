<template>
    <div>
        <div class="text-dark p-3"> {{title}} </div>
        <div class="text-secondary  item p-2 pl-4" v-for="item in itemenu.data" :key="item.index">
            <a :href="'#' + item.url.toLowerCase().replace('//','')">{{item.method}} - {{item.end_point}}</a>
        </div>
    </div>
</template>

<style>
    .item:hover{
        background: #cce5ff;
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid #b8daff;
    }
</style>

<script>
export default {
    props: ['itemenu'],
    data(){
        return{
            title: ''
        }
    },
    methods:{

    },
    mounted(){
        this.title = this.itemenu.title;
    }
}
</script>
