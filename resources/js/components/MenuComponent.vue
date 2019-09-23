<template>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{title}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#" v-for="item in itemenu.data" :key="item.index">{{item.method}} - {{item.end_point}}</a>
        </div>
    </li>
</template>

<script>
export default {
    props: ['itemenu'],
    data(){
        return{
            title: '',
        }
    },
    mounted(){
        this.title = this.itemenu.title;
    }
}
</script>
