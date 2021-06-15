new Vue({
    el:'#root',

    data:{
        cats:[]
    },

    mounted() {
        //make an ajax request to our server - /cat

        axios.get('/cat').then(response => this.cats =  response.data);
    },
})