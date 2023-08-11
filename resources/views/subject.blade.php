<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rukesh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .container {
        margin-top:50px;
    }
  </style>
  <body>
    <div class="container">
    <h1>Subjects</h1>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="/save" method="post">
        @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="subject_name" class="form-label">Student Name</label>
            <select name="student_id" class="form-control">
            <option>Select Student</option>
                @foreach ($students as $student)
                    
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="subject_name" class="form-label">Subject Name</label>
            <input name="subject_name" type="text"  class="form-control" id="subject_name" required>
        </div>
        <div class="col-md-6">
            <label for="marks" class="form-label">Marks</label>
            <input name="marks" type="text" class="form-control" id="marks" required>
        </div>
    </div><br>
    <div style="text-align:center;"> 
    <input class="btn btn-primary" type="submit" value="Submit">
    <a class="btn btn-primary" href="/" role="button">Close</a>
</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>