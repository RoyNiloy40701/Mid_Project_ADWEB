@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> CustomerTable</title>
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
                                        <h2>Customer Table</h2>
                                   </div>
                                   <div class="col-xs-7">
                                        <a href="" class="btn btn-primary"><i class="material-icons">&#xE147;</i>
                                             <span>Add New User</span></a>
                                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i>
                                             <span>Export to Excel</span></a>
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
                                   @foreach($customers as $cus)
                                   <tr>
                                        <td>{{$cus->CID}}</td>
                                        <td><a href=""><img
                                                       src="https://media.istockphoto.com/photos/confident-maori-man-in-a-studio-picture-id899827696?k=6&m=899827696&s=170667a&w=0&h=yvBvy9NoTxL5Yn0ueOwPj9hsD-dQqCEowGUt4cYmO1k="
                                                       class="avatar" alt="Avatar">{{$cus->CNAME}}</a></td>
                                        <td>{{$cus->CEMAIL}}</td>
                                        <td>{{$cus->CPHONE}}</td>
                                        <td>{{$cus->CADDRESS}}</td>

                                        <td>
                                             <a href="{{route('customer.details',['id'=>encrypt($cus->CID)])}}"
                                                  class="view text-primary " title="View" data-toggle="tooltip"><i
                                                       class="material-icons">&#xE417;</i></a>

                                             <a href="{{route('customer.delete',['id'=>encrypt($cus->CID)])}}"
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