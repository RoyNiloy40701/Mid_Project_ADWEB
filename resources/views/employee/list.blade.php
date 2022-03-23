@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> Employee Table</title>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link href="{{asset('css/employee/list.css')}}" rel="stylesheet" />



     </head>

     <body>
          <div class="container">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col-xs-5">
                                        <h2>Employee Table</h2>
                                   </div>
                                   <div class="col-xs-7">
                                        <a href="{{route('employee.add')}}" class="btn btn-primary"><i
                                                  class="material-icons">&#xE147;</i>
                                             <span>Add New </span></a>
                                        <a href="{{route('employee.pdf')}}" class="btn btn-primary"><i
                                                  class="material-icons">&#xE24D;</i>
                                             <span>Export to PDF</span></a>
                                   </div>
                              </div>
                         </div>
                         <table class="table table-striped table-hover">
                              <thead>
                                   <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>

                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($employees as $em)
                                   <tr>
                                        <td>{{$em->EID}}</td>
                                        <td><a href="{{route('employee.details',['id'=>encrypt($em->EID)])}}"><img
                                                       src="{{ asset('uploads/employees/'.$em->EPICTURE)}}"
                                                       class="avatar" alt="Avatar">{{$em->ENAME}}</a></td>
                                        <td>{{$em->EEMAIL}}</td>
                                        <td>{{$em->EPHONE}}</td>
                                        <td>{{$em->EADDRESS}}</td>

                                        <td>
                                             <a href="{{route('employee.details',['id'=>encrypt($em->EID)])}}"
                                                  class="view text-primary " title="View" data-toggle="tooltip"><i
                                                       class="material-icons">&#xE417;</i></a>
                                             <a href="{{route('employee.edit',['id'=>encrypt($em->EID)])}}"
                                                  class="edit text-warning " title="Edit" data-toggle="tooltip"><i
                                                       class="material-icons">&#xE254;</i></a>
                                             <a href="{{route('employee.delete',['id'=>encrypt($em->EID)])}}"
                                                  class="delete" title="Delete" data-toggle="tooltip"><i
                                                       class="material-icons">&#xE872;</i></a>
                                        </td>
                                   </tr>
                                   @endforeach

                              </tbody>
                         </table>

                    </div>
               </div>
          </div>
     </body>

</html>


@endsection