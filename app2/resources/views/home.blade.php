
<body>
    <ul>
        @foreach ($users as $user)
            <li>User Name Is {{ $user ['name'] }} And City Is {{ $user ['city'] }}</li>
        @endforeach
    </ul>
</body>