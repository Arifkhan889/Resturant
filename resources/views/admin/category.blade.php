@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <title>Resturant</title>
</head>
<body>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-6">
<div class="card card-outline-primary">
    <div class="card-header">
        <h4 class="m-b-0 text-black">Add Category</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="form-body">
               
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <input type="text" name="name" value="" class="form-control name" placeholder="Category Name">
                           </div>
                    </div>
                    <!--/span-->
                    
            </div>
            <a  id="submitdata" class="submit btn btn-primary" type="submit">Submit</a>
        </form>
    </div>
  
</div>
</div>
</div>
<div class="container">
    <hr><br>
    
    <div class="row">
        
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-3 text-black"> Categories</h4>
                </div>
          <table class="table table-bordered" id="">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Category Name</th>
                 <th>Created Date</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="users-crud">
            @foreach($users as $u_info)
              <tr id="user_id_{{ $u_info->id }}">
                 <td>user_id_{{ $u_info->id }}</td>
                 <td>user_id_{{ $u_info->name }}</td>
                 <td>user_id_{{ $u_info->created_at }}</td>
                 <td><a href="" id="show-user" data-id="{{ $u_info->id }}" class="btn btn-info">Edit</a></td>
                 <td><a href="" id="show-user" data-id="" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
       </div> 
    </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#submitdata').click(function(){
    var name =$('.name').val();
    var token=$('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: '{{route("addcategory")}}',
        type: 'POST',
    data:{
       '_token': token,
       'name':name,  
    },
    success: function(response) {
        console.log(response);
    }
    })
})
$('body').on('click', '#show-user', function () { 
    var user_id = $(this).data('id');
    var token=$('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: '{{route("addcategory")}}',
        type: 'POST', 
    
    })
})
});

</script>
</body>
</html>@include('admin.footer')