const {createApp} = Vue;

createApp({
data() {
    return {
        toDoList: [],
        newToDo: "",
    };
},
created() {
    axios.get("server.php").then((resp => {
    // console.log(resp);
    this.toDoList = resp.data;
    }));
},
methods: {
    
    addNewToDo(){
        //Raccolgo il dato
        // console.log("add")
        const data = {
            newToDo: this.newToDo,
        };
        //invio il dato al server
        axios.post("server.php", data, {
            headers: {'Content-Type' : 'multipart/form-data'},
        })
        .then((resp) => {
           this.toDoList = resp.data;
            console.log(resp);
            this.newToDo = "";

        });
    },
    textDone(index){

        const data = {
            doneIndex: index,
        };

        axios.post("server.php", data, {
            headers: {"Content-Type" : "multipart/form-data"},
        })
        .then((resp) => {
            // console.log(resp);
            // ricevo il risultato dal server e attuon la modifica nel frontend
            this.toDoList = resp.data;
        })
    }
    
}


}).mount("#app");