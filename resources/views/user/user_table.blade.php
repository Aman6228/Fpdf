<!DOCTYPE>
<html lang="">
<head>
</head>
<body>
<h1>Heading</h1>
<table>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>

    @endforeach
    </tbody>


</table>
</body>
</html>
