<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table>
    <thead>
    <th>ID</th>
    <th> Subject Name</th>
    <th> Subject Code</th>
    <th> Grade</th>
    <th> Average Pass Rate</th>
    <th> Teacher's Description</th>
    </thead>
    <br>
    <tbody>
    @foreach($subjects as $key =>$subject )
        <tr>
            <td>{{$subject->id }}</td>
            <td>{{$subject->subName }}</td>
            <td>{{$subject->subCode }}</td>
            <td>{{$subject->grade}}</td>
            <td>{{$subject->avgPassRate}}</td>
            <td>{{$subject->Tdescription}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>