<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-row {
            margin-bottom: 1rem;
        }
        .form-row .name {
            font-weight: bold;
        }
        .input-group {
            width: 100%;
        }
        .btn {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="title">Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('update_data', $edit->id) }}" method="POST">
                    @csrf
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="name">Name</td>
                                <td>
                                    <input class="form-control" type="text" name="name" value="{{ old('name', $edit->name) }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Email</td>
                                <td>
                                    <input class="form-control" type="email" name="email" value="{{ old('email', $edit->email) }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Address</td>
                                <td>
                                    <input class="form-control" type="text" name="address" value="{{ old('address', $edit->address) }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Gender</td>
                                <td>
                                    <select name="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="M" @selected(old('gender', $edit->gender) == 'M')>M</option>
                                        <option value="F" @selected(old('gender', $edit->gender) == 'F')>F</option>
                                        <option value="O" @selected(old('gender', $edit->gender) == 'O')>O</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Points</td>
                                <td>
                                    <select name="points" class="form-control">
                                        <option value="">Select Points</option>
                                        <option value="5" @selected(old('points', $edit->points) == '5')>5</option>
                                        <option value="10" @selected(old('points', $edit->points) == '10')>10</option>
                                        <option value="15" @selected(old('points', $edit->points) == '15')>15</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Password</td>
                                <td>
                                    <input class="form-control" type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
