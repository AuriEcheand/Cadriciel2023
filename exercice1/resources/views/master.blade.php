<!DOCTYPE html>
<html>
<head>
    <title>Exercice 1</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <h1>Exercice 1</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/form">Form</a></li>  
            </ul>
        </nav>
    </header>
    <main>
        <section>
            @yield('contenu')
        </section>
    </main>
</body>
</html>