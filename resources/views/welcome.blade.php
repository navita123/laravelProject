@extends('assets.external')
@section('title','welcome')
@section('body')
 <div class="container">
 	
 	<div class="row">
 		
 		<div class="col-md-6 offset">
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
   @endif

      <center><h2>Create User</h2></center> 
 				<form method="post" action="{{ action('UserController@store') }}">

           {{ csrf_field() }}
<div class="form-group has-success">
  <label class="form-control-label" for="name">User Name:</label>
  <input type="text" value="" class="form-control is-valid" placeholder="User Name" name="username">  
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="email">User Email:</label>
  <input type="email" value="" class="form-control is-valid"  placeholder="User Email" name="email">  
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="mobile">Mobile Number:</label>
  <input type="number" value="" class="form-control is-valid" placeholder="Mobile Number" name="mobile">
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="mobile">User Image:</label>
  <input type="file" value="" name="image">
</div>

<div class="form-group has-success">
  <label class="form-control-label" for="gender">Gender:</label>
  <input type="radio" value=""  name="gender"> Male
  <input type="radio" value=""  name="gender"> Female
</div>

<button type="submit" class="btn btn-success">Submit</button>

</form>
 		
 	</div>
  <div class="col-md-6">
    <center><h2>User List</h2></center>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  </div>
 	</div>	
 </div>

@endsection