<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="text-center my-3">
        <h1 class="text-danger fw-bold">
            Hello World
        </h1>
        <ul class="list-unstyled fs-4">
            <li>
                {{ $home }}
            </li>
            <li>
                {{ $docs }}
            </li>
            <li>
                {{ $example }}
            </li>
        </ul>
    </div>
</body>

</html>