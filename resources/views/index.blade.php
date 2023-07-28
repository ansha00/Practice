<html>
    <head>

        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
             h1{
             text-align: center;
            }

            .container{
            width: 370px;
            margin: auto;
            padding: 16px;
            border: 1px solid;
            border-radius: 5px;
            }
        </style>

        <title>Student Record System</title>

    </head>

            <body>

                <h1>Student Record System</h1>
                <div class='container'>
                <form action="/save" method="POST">
                @csrf
                    Name: <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
                    Email: <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                    Address: <input class="form-control form-control-lg" type="text" name="address" placeholder="Enter your address">
                    Phonenumber: <input class="form-control form-control-lg" type="text" name="phonenumber" placeholder="Enter your phonenumber">
                    Course: <input class="form-control form-control-lg" type="text" name="course" placeholder="choose which course you want">
                    Fee: <input class="form-control form-control-lg" type="float" name="fee" placeholder="Total amount">
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <table class="table table-sm">
                    <thead>
                         <tr>
                            <th scope="col">Id</th>  
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phonenumber</th>
                            <th scope="col">Course</th>
                            <th scope="col">Fee</th>
                         </tr>

                             @foreach($students as $student)
                         <tr>
                             <td>{{$student->id}}</td>
                             <td>{{$student->name}}</td>
                             <td>{{$student->email}}</td>
                             <td>{{$student->address}}</td>
                             <td>{{$student->phonenumber}}</td>
                             <td>{{$student->course}}</td>
                             <td>{{$student->fee}}</td>
                             <td><a href="/delete/{{$student->id}}">delete</a></td>
                             <td><a href="/edit/{{$student->id}}">edit</a></td>
                        </tr>
                             @endforeach

                    </thead>
                </table>

            </body>
            
</html>
