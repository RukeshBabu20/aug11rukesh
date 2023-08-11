<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rukesh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
 <style>
    .container{
        margin-top:50px;
    }
    .table>tbody {
    vertical-align: unset;  
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 </style>
  <body>
    <div class="container">
    <h1>Students List</h1>
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div style="float:right;">
    <a href="/students" class="btn btn-primary">Add Student</a>
    <a href="/add-subject" class="btn btn-primary">Add Subject</a>
</div>  
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Student</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>
      <a href="/information/{{$student->id}}">{{ $student->name }}</a>
    </td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->phone }}</td>
      <td>
      <label class="switch">
        <input data-id="{{$student->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approve" data-off="Block"  {{ $student->status ? 'checked' : '' }}>
        <span class="slider round"></span>
    </label>
                

      </td>
      <td>
        <div class="d-flex justify-content-center"> 

            <a href='/edit/{{ $student->id }}' title="Edit" class="btn px-2 text-primary fs-2 doctor-edit-btn" data-bs-toggle="tooltip"
            data-bs-original-title="Edit" data-turbolinks="false">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
            <a href='/delete/{{ $student->id }}' data-id="1" title="Delete" class="btn px-2 text-danger fs-2 doctor-delete-btn" data-bs-toggle="tooltip"
            data-bs-original-title="Delete">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
            
            
        
        </div>
    </td>
    </tr>
    @endforeach

  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
$(document).ready(function() {
    $('.toggle-class').change(function() {
      console.log(this);
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "get",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
</html>