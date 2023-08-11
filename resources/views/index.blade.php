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
    <h1>Add Students</h1>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="/store" method="post">
        @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text"  class="form-control" id="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone" aria-describedby="picme"  value="{{ old('phone') }}" maxlength="10" pattern="\d{10}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" required>
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input name="city" type="text" class="form-control" id="city" required>
        </div>
        <div class="col-md-6">
            <label for="state" class="form-label">State</label>
            <input name="state" type="text" class="form-control" id="state" required>
        </div>
        <div class="col-md-6">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="country" required>
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