@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Product Add </title>

          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link href="{{asset('css/product/add.css')}}" rel="stylesheet" />




     </head>

     <body>
          <div class="container ">
               <div class="table-responsive">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col-xs-5">
                                        <h2>Add Product </h2>
                                   </div>
                                   <div class="col">

                                        <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                                                  class="material-icons">&#xe5c4;</i>
                                             <span>Back</span></a>

                                   </div>
                              </div>
                         </div>
                         <section class="get-in-touch">
                              {{-- action="{{route('productAddSubmit')}}"method="post" --}}

                              <form action="{{route('product.add')}}" method="post" class="contact-form row" enctype="multipart/form-data">
                                   {{@csrf_field()}}
                                   <div class="form-field col-lg-6">
                                        <label class="label" for="name">Product Name</label>
                                        <input name="pname" value="{{old('pname')}}" class="input-text js-input"
                                             type="text">
                                        @error('pname')
                                        <span>{{$message}}</span><br>
                                        @enderror


                                   </div>

                                   <div class="form-field col-lg-6">
                                        <label class="label" for="pshop">Shop Name</label>
                                        <input name="pshop" value="{{old('pshop')}}" class="input-text js-input"
                                             type="text">

                                        @error('pshop')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                               
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="pdescription">Product Description</label>
                                        <input name="pdescription" value="{{old('pdescription')}}"
                                             class="input-text js-input" type="text">

                                        @error('pdescription')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="pbprice">Basic Price</label>
                                        <input name="pbprice" value="{{old('pbprice')}}" class="input-text js-input"
                                             type="text">

                                        @error('pbprice')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   <div class="form-field col-lg-6 ">
                                        <label class="label" for="pstock">Product Stock</label>
                                        <input name="pstock" value="{{old('pstock')}}" class="input-text js-input"
                                             type="text">

                                        @error('pstock')
                                        <span>{{$message}}</span><br>
                                        @enderror
                                   </div>
                                   {{-- <div class="form-field col-lg-6 ">
                                        <label class="label" for="pcat">Product Category</label>
                                        <select name="pcat" value="{{old('pcat')}}"> 
                                             foreach() 
                                             <option value = "BMW"> BMW   
                                             </option>  
                                              
                                              
                                             </select> 
                                   </div> --}}


                               <div class="form-field col-lg-6">
                                   <label class="image-label" for="pimage">Image</label>
                                    <input name="pimage" class="input-text js-input form-control-file" type="file" >
                                    @error('pimage')
                                    <span>{{$message}}</span><br>
                                    @enderror
                                 </div>
                                 
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