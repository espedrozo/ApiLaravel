<!-- resources/views/welcome.blade.php-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>My Laravel Project</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/frontConnection.js') }}"></script>
</head>

<body onload="getCustomers()">
    <div id="app">
        <header>
            <h1>My Laravel Project</h1>
        </header>
        
        <h3 id="db-title">Database 01</h3>
        <button id="getCustomersButton" type="button" onClick="getCustomers()">Get Customers</button>
        <div>
            <div id="display-layout">
                <div id="customerDisplay"></div>
            </div>


            <h3 id="db-title">Database 02</h3>
        <button id="getClientsButton" type="button" onClick="getClients()">Get Clients</button>
            <div id="display-layout">
                <div id="clientDisplay"></div>
            </div>
            
        </div>

        <section class="buttons-section">
        <button id="syncButton" type="button" onClick="syncDatabases()">Synchronize Databases</button>            
        </section>
        
    </div>
</body>

</html>
