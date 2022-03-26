@extends('layouts.app')
@section('content')
<html>

     <head>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
               integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
               crossorigin="anonymous">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link href="{{ asset('css/myprofile/managerProfile.css') }}" rel="stylesheet" />

     </head>

     <body>

          <div class="container">
               <div class="table-res">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col">
                                        <h2> My Profile</h2>
                                   </div>
                                   <div class="col">

                                        <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                                                  class="material-icons">&#xe5c4;</i>
                                             <span>Back</span></a>

                                   </div>
                              </div>
                         </div>

                         <div class="main-body">
                              <div class="row gutters-sm">
                                   <div class="col-md-4 mb-3">
                                        <div class="card">
                                             <div class="card-body">
                                                  <div class="d-flex flex-column align-items-center text-center">
                                                       <img src="{{asset('uploads/managers/'.$man->MPICTURE)}}"
                                                            alt="Admin" class="rounded-circle" width="150">
                                                           
                                                       <div class="mt-3">
                                                            <h4>{{$man->MNAME}}</h4>
                                                            <p class="text-secondary mb-1">Manager</p>

                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="col-md-8">
                                        <div class="card mb-3">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                       </div>
                                                       <div class="col-sm-9 text-secondary">
                                                            {{$man->MNAME}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Email</h6>
                                                       </div>
                                                       <div class="col-sm-9 text-secondary">
                                                            {{$man->MEMAIL}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Phone</h6>
                                                       </div>
                                                       <div class="col-sm-9 text-secondary">
                                                            {{$man->MPHONE}}
                                                       </div>
                                                  </div>
                                                  <hr>

                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Address</h6>
                                                       </div>
                                                       <div class="col-sm-9 text-secondary">
                                                            {{$man->MADDRESS}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-12">
                                                            <a class="btn btn-info "
                                                                 href="{{route('managerProfile.edit',['id'=>encrypt($man->MID)])}}">Edit</a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </body>

</html>
@endsection