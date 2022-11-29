const {createApp} = Vue;

createApp({
data() {
    return {
        toDoList: [],
        newToDo: {
        "text":"",
        "done":true},
    };
},
created() {
    axios.get("todo.json").then((resp => {
    console.log(resp);
    this.toDoList = resp.data;
    }));
},
methods: {
    addNewToDo(){
        // console.log("add")
        const data = {
            newToDo: this.newToDo,
        };

        axios.post("todo.json", data, {
            headers: {'content-type' : 'multipart/form-data'},
        })
        .then((resp) => {
            console.log(resp);
        });
    }
}


}).mount("#app");