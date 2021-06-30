<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main id='app'>
        <div class="card" v-for="disk in disks">
            <img :src="disk.poster" alt="disk.title">
            <h2> {{disk.title}} </h2>
            <p> {{disk.author}} </p>
            <p> {{disk.year}} </p>
        </div>
    </main>


    <script src="js/script.js"></script>
</body>
</html>