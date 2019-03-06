@extends('layouts.master')


@section('content')

    <div class="container">
        @if (session('successMsg'))
        <div class="alert alert-success" role="alert">
                <strong>Well done! </strong>{{session('successMsg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endif

        <h4>Student List</h4>

        <table class="table table-bordered">
                <thead>
                  <tr class="text-center">
                    <th scope="col">#ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach($students as $student)
                    <tr class="text-center">
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                    <td> <a class="btn btn-raised btn-primary btn-sm" href ="{{route('edit',$student->id)}}"><i class="far fa-edit"></i></a>

                    <form action="{{route('delete',$student->id)}}" method="POST" id="delete-form-{{$student->id}}" style="display:none;">
                            {{csrf_field()}}
                            {{method_field('delete') }}

                        </form>

                            <button onClick="if(confirm('Are you sure, You want to delete this?')){
                                event.preventDefault();
                            document.getElementById('delete-form-{{$student->id}}').submit();
                            }else{
                                event.preventDefault();
                            }" class="btn btn-raised btn-danger btn-sm offset-1" ><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
              </table>
              {{ $students->links()}}
    </div>




@endsection
