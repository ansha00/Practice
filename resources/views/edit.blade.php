<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Record System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    h1 {
      text-align: center;
    }

    .container {
      width: 850px;
      margin: auto;
      padding: 16px;
      border: 1px solid;
      border-radius: 5px;
    }
  </style>

</head>

<body>
  <h1>Welcome to edit page</h1>

  <div class="container">
    <form action="/update/{{ $student->id }}" method="POST">
      @csrf
      Name: <input type="text" name="name" value="{{$student->name}}"> 
      Email: <input type="email" name="email" value="{{$student->email}}"> 
      Address: <input type="text" name="address" value="{{$student->address}}"> <br> <hr>
      Phonenumber: <input type="text" name="phonenumber" value="{{$student->phonenumber}}"> 
      Course: <input type="text" name="course" value="{{$student->course}}"> 
      Fee: <input type="float" name="fee" value="{{$student->fee}}"> <hr>

      <div class="text-center" style="margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Update</button> 
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>