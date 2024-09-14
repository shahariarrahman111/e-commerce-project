<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studnet form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container text-info">
        <h1 class="text-center mt-5">Studnets Form</h1>

        <div class="card">
            <div class="card-body">
               <form action="{{ route('store_student') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputStudent_Id" class="form-label">Student_Id</label>
                    <input type="text" name="student_id" class="form-control" id="exampleInputStudnet_Is" aria-describedby="student_idHelp">
                </div>

                    <div class="mb-3">
                        <label for="exampleInputStudent_Name" class="form-label">Studnet_Name</label>
                        <input type="text" name="student_name" class="form-control" id="exampleInputStudent_Name" aria-describedby="Student_NameHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputStudent_Email" class="form-label">Student_Email</label>
                        <input type="email" name="student_email" class="form-control" id="exampleInputStudent_Email" aria-describedby="Student_EmailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputStudent_Phone" class="form-label">Student_Phone</label>
                        <input type="text" name="student_phone" class="form-control" id="exampleInputStudent_Phone" aria-describedby="StudentPhoneHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDepartment" class="form-label">Department</label>
                        <input type="text" name="department" class="form-control" id="exampleInputDepartment">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>  
            </div>
        </div>

    </div>


    


</body>
</html>