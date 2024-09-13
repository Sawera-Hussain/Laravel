<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Points</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($info as $info_data)
              <tr>
                <td>{{$info_data->id}}</td>
                <td>{{$info_data->name}}</td>
                <td>{{$info_data->email}}</td>
                <td>{{$info_data->address}}</td>
                <td>
                    @if ($info_data->gender == 'M')
                    Male

                    @elseif ($info_data->gender == 'F')
                    Female

                    @elseif($info_data->gender == 'O')
                    Other
                    @endif
                </td>
                <td>{{$info_data->Points}}</td>
                <td>
                <a href="edit_record/{{$info_data->id}}"><button class="btn btn-dark">Update</button></a>
                 </td>
                <td>
                <a href="delete_record/{{$info_data->id}}">
                <button class="btn btn-dark">Delete</button></a>
                </td>
              </tr>

            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>