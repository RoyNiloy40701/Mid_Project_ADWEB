@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> Order Table</title>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link href="{{asset('css/order/list.css')}}" rel="stylesheet" />



     </head>

     <body>
          <div class="container">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col-xs-5">
                                        <h2>Order Table</h2>
                                   </div>
                                   <div class="col-xs-7">

                                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i>
                                             <span>Export to PDF</span></a>
                                   </div>
                              </div>
                         </div>
                         <table class="table table-striped table-hover">
                              <thead>
                                   <tr>
                                        <th>Id</th>
                                        <th>Custromer Id</th>
                                        <th>Order Item</th>
                                        <th>Status</th>
                                        <th>Order Date</th>
                                        <th></th>


                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($orders->orderList as $od)
                                   <tr>
                                        <td>{{$od->OID}}</td>
                                        <td>{{$od->CID}}</td>
                                        <td><a
                                                  href="{{route('order.details',['id'=>encrypt($od->OID)])}}">{{$od->ORDERITEM}}</a>
                                        </td>
                                        <td>{{$od->OSTATUS}}</td>
                                        <td>{{$od->ODATE}}</td>



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