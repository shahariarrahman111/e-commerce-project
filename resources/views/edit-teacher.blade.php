<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers table</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-3">

        <h2 class="text-center mb-5">Teacher Data</h2>

        <a href="/home"><Button class="btn btn-primary">Add teacher</Button></a>

    
        <table class="table table-bordered $black: #000;">
                <thead class="border-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>


                <tbody class="border-dark">

                    @foreach ($teachers as $teacher)

                    <tr>
                        <th>{{$teacher->id}}</th>
                        <th>{{$teacher->name}}</th>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td>
                            <a href="{{ route('update_teacher', $teacher->id) }}"><button class="btn btn-primary ms-3 me-3">Edit</button></a>
                            <a href="{{ route('delete_teacher', $teacher->id) }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>

                    @endforeach

                
                </tbody>

        </table>
    </div>    


</body>
</html>