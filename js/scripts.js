const { createApp } = Vue;
createApp({
    data() {
        
        return {
            toDo: [],
            newtodo: ''
        };
        
        
        
    },
    mounted() {
        axios
            .get('http://localhost/booleanPHP/php-todo-list-json-1/api.php')
            .then((res) => {
                console.log(res.data);
                this.toDo = res.data;
                console.log(this.toDo);
            });
    },
    
    methods: {


        addTodo(){

            
            axios
                .post('http://localhost/booleanPHP/php-todo-list-json-1/new-todo.php',{
                        do: this.newtodo
                    },
                    {
                        headers: {
                            'Content-Type' : 'multipart/form-data'
                        }
                    },
                )
                .then((res) => {
                    console.log(res);
                    
                });
        },
        

        

    },
    
    
}).mount('#app');