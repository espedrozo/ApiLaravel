<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Meu Projeto Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        function syncDatabases() {
            // Fazer a requisição para a rota da API Laravel
            axios.get('api/syncDatabases')
                .then(response => {
                    console.log(response.data.message);
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        };
    </script>
    <button type="button" onClick="syncDatabases()">Synchronize Databases</button>

</body>

</html>