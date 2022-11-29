<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>toDoList</title>
</head>

<body>
    <div class="container" id="app">
        <main>
            <div class="container py-8 bg-primary mt-4">
                <h1 class="text-center">Todo List</h1>
                <div class="row justify-content-center">
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item" v-for="toDo in toDoList"> {{toDo.text}}</li>
                        </ul>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col mt-4">
                        <input class="form-control" type="text" placeholder="Inserisci nuovo elemento" aria-label="Inserisci un nuovo todo" v-model="newToDo.text">
                        <button class="btn btn-warning m-4 " @click="addNewToDo">Aggiungi</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>


</html>