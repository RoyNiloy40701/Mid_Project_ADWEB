@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> Edit Profile</title>

          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link href="{{asset('css/myprofile/managerProfileEdit.css')}}" rel="stylesheet" />




     </head>

     <body>
          <div class="container ">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col-xs-5">
                                        <h2>Edit Profile</h2>
                                   </div>
                                   <div class="col">

                                        <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                                                  class="material-icons">&#xe5c4;</i>
                                             <span>Back</span></a>

                                   </div>
                              </div>
                         </div>
                         <section class="get-in-touch">
                              {{-- {{route('product.edit',['id'=>encrypt($man->PID)])}} --}}

                              <form action="  {{route('managerProfile.update',['id'=>encrypt($man->MID)])}}"
                                   method="post" enctype="multipart/form-data" class="contact-form row">
                                   {{@csrf_field()}}


                                   <div class="form-field col-lg-6">
                                        <label class="label" for="ename"> Name</label>
                                        <input name="ename" value="{{$man->MNAME}}" class="input-text js-input"
                                             type="text">
                                   </div>




                                   <div class="form-field col-lg-6">
                                        <label class="label" for="epassword"> Password</label>
                                        <input name="epassword" value="{{$man->MPASSWORD}}" class="input-text js-input"
                                             type="text">
                                   </div>


                                   <div class="form-field col-lg-6">
                                        <label class="label" for="eemail">Email</label>
                                        <input name="eemail" value="{{$man->MEMAIL}}" class="input-text js-input"
                                             type="email">

                                   </div>

                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="ephone">Phone No</label>
                                        <input name="ephone" value="{{$man->MPHONE}}" class="input-text js-input"
                                             type="text">


                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="eaddress">Address</label>
                                        <input name="eaddress" value="{{$man->MADDRESS}}" class="input-text js-input"
                                             type="text">


                                   </div>


                                   <div class="form-field col-lg-6">
                                        <label class="image-label" for="eimage">Image</label>
                                        <input name="eimage" value="{{$man->MPICTURE}}"
                                             class="input-text js-input form-control-file" type="file">
                                        <img <img src="{{ asset('uploads/managers/'.$man->MPICTURE)}}" class="avatar"
                                             alt="Avatar">
                                   </div>




                                   {{-- <div class="form-field col-lg-12">
                                   <label class="image-label" for="message">Image</label>
                                    <input name="image" class="input-text js-input form-control-file" type="file" required>
                                 </div> --}}
                                   <div class="form-field  col-lg-12 mb-3">
                                        <input class="submit-btn" type="submit" value="Submit">
                                   </div>

                              </form>
                         </section>

                    </div>

               </div>

          </div>
     </body>

</html>
@endsection