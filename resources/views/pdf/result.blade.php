<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table>
    <thead>
    <th>ID</th>
    <th> Student Name</th>
    <th> Student ID Number</th>
    <th> Grade</th>
    <th> Subject</th>
    <th> Marks</th>
    <th>Tnotices</th>
    </thead>
    <br>
    <tbody>
    @foreach($results as $key =>$result )
        <tr>
            <td>{{$result->id }}</td>
            <td>{{$result->stName }}</td>
            <td>{{$result->stID }}</td>
            <td>{{$result->grade}}</td>
            <td>{{$result->subject}}</td>
            <td>{{$result->marks}}</td>
            <td>{{$result->TNotices}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>