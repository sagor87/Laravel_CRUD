@extends('layouts.master')


@section('content')

    <div class="container">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <strong>Oh Snap! </strong>{{$error}}
                    <button type="button" class="close" data-dismiss="alert"                  aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add New Student</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('store')}}" method="POST" >
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Enter Your First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                            </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-2 col-form-label">Phone No.</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter Your Phone No.">
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="" class="btn btn-default">Cancle</button>
                            <button type="submit" class="btn btn-primary">Add New</button>
                         </div>
                    </div>

                  </form>
            </div>
        </div>
    </div>




@endsection
