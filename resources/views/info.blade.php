<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rukesh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .container{
            margin-top:50px;
        }
  </style>
  <body>
    <div class="container">
    <h1>Student Information</h1>
@foreach ($students as $student)
    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Student Name</label>
            <input name="name" type="text"  class="form-control" id="name" placeholder="{{ $student->name }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="{{ $student->email }}">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input name="phone" type="integer" class="form-control" id="phone" placeholder="{{ $student->phone }}">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="{{ $student->address }}">
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input name="city" type="text" class="form-control" id="city" placeholder="{{ $student->city }}">
        </div>
        <div class="col-md-6">
            <label for="state" class="form-label">State</label>
            <input name="state" type="text" class="form-control" id="state" placeholder="{{ $student->state }}">
        </div>
        <div class="col-md-6">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="country" placeholder="{{ $student->country }}">
        </div>
        <h2>Subjects</h2>
        @foreach ($subjects as $subject)
         <div class="col-md-6">
            <label for="subject_name" class="form-label">Subject Name</label>
            <input name="subject_name" type="text"  class="form-control" id="subject_name" placeholder="{{ $subject->subject_name }}">
        </div>
        <div class="col-md-6">
            <label for="marks" class="form-label">Marks</label>
            <input name="marks" type="text" class="form-control" id="marks" placeholder="{{ $subject->marks }}">
        </div>
        <div class="col-md-6">
            <label for="marks" class="form-label">Grade</label>
            <input name="marks" type="text" class="form-control" id="marks" placeholder="{{ $subject->grade }}">
        </div>
        @endforeach
</div>
@endforeach
</form>
<div style="text-align:center; padding-top: 30px">
<a class="btn btn-primary" href="/" role="button">Close</a>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>