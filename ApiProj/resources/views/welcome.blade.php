<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Meu Projeto Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body onload="getCustomers()">
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

        // function getCustomers() {
        //     // Fazer a requisição para a nova rota da API Laravel
        //     axios.get('api/customers')
        //         .then(response => {
        //             console.log(response.data);
        //         })
        //         .catch(error => {
        //             console.error('Erro:', error);
        //         });
        // };

        function getCustomers() {
            // Fazer a requisição para a nova rota da API Laravel
            axios.get('api/customers')
                .then(response => {
                    displayCustomers(response.data);
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        };

         function displayCustomers(customers) {
            // Limpar o conteúdo anterior
            document.getElementById('customerDisplay').innerHTML = '';

            // Criar uma tabela para exibir os clientes
            var table = document.createElement('table');
            table.id = 'customerTable';

            // Cabeçalho da tabela
            var headerRow = document.createElement('tr');
            ['ID', 'First Name', 'Last Name', 'Sex', 'Birth Date', 'Status'].forEach(function(column) {
                var th = document.createElement('th');
                th.textContent = column;
                headerRow.appendChild(th);
            });
            table.appendChild(headerRow);

            // Corpo da tabela
            customers.forEach(function(customer) {
                var tr = document.createElement('tr');
                ['id', 'first_name', 'last_name', 'sex', 'birth_date', 'status'].forEach(function(field) {
                    var td = document.createElement('td');
                    td.textContent = customer[field];
                    tr.appendChild(td);
                });
                table.appendChild(tr);
            });

            // Adicionar a tabela ao elemento de exibição
            document.getElementById('customerDisplay').appendChild(table);
        }

    </script>
    <button type="button" onClick="syncDatabases()">Synchronize Databases</button>
    <button type="button" onClick="getCustomers()">Get Database Data</button>
    <div id="customerDisplay"></div>

</body>

</html>