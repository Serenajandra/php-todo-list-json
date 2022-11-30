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
            headers: {'content-type' : 'multipart/form-data'},
        })
        .then((resp) => {
           this.toDoList = resp.data;
            console.log(resp);
            this.newToDo = "";

        });
    }
}


}).mount("#app");