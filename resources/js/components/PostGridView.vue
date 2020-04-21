<template>

<section>
<button @click="toggleGridView"> Toggle Grid View </button>    
<ul :class="{ 'grid-view' : gridView }">

    <li class="gridCard m-b-md" v-for="post in posts.posts" :key="post"> 

        {{ gridCard }}

    </li>

</ul>
</section>

</template>

<script>
export default {
    name: 'PostGridView',
    props: ['gridCard'],
            
    data ()  {
        return {
        gridView: true,
        }
    },
    methods:  {
        toggleGridView ()  {
            this.gridView = !this.gridView;
        }
    }
}
</script>



<style scoped>
*  {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
}

.grid-view  {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    list-style: none;
}

.grid-view li  {
    display: block;
    width: calc( 100% / 3 );
    height: 30vw;
    text-align: center;
    padding: 10vw 0;
}



</style>