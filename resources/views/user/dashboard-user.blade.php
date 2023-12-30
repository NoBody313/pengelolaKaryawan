<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    @include('helper.helper')
</head>

<body>
    <div class="flex flex-row gap-10">
        @include('shared.user-sidebar', ['data' => $data])
        <div class="w-full mt-14 mr-14">
            @include('components.header')
        </div>
    </div>
</body>

</html>
