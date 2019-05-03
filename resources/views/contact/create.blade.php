@extends ('layouts.app')
@section('content')
<div class="container">

<div class="text-center">

    <h1>Create New Contact</h1>

</div>


    <form class="form-horizontal" method="POST" action="{{ route('create.contact') }}" enctype="multipart/form-data">
    {{ csrf_field()}}

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name">
        <small class="form-text text-muted">We'll never share your name with anyone else.</small>
    </div>

    <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" name="phoneNum" class="form-control" aria-describedby="emailHelp" placeholder="Enter Phone Number">
    </div>
 
 
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>

</div>

@endsection
