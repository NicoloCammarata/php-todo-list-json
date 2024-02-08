const { createApp } = Vue;
createApp({
    data() {
        
        return {
            toDo: []
        }
        
        
        
    },
    methos: {

    },
    mounted() {
        axios
            .get('http://localhost/booleanPHP/php-todo-list-json-1/api.php')
            .then((res) => {
                console.log(res.data);
                this.toDo = res.data;
                console.log(this.toDo);
            });
    }
}).mount('#app');