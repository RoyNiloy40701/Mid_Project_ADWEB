<html>

     <head>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
               integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
               crossorigin="anonymous">
          <link href="{{asset('css/layout/layout.css')}}" rel="stylesheet" />

          <link rel="stylesheet"
               href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
               integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7"
               crossorigin="anonymous">

     </head>

     <body>


          <div class="row ps-2">
               <div class="col-4 d-flex  flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
                    <a href="{{route('manager')}}"
                         class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> <svg
                              class="bi me-2" width="40" height="32"> </svg> <span class="fs-4"><strong>
                                   Manager</strong> </span> </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                         <li class="nav-item"> <a href="{{route('manager')}}" class="nav-link active"
                                   aria-current="page"> <i class="fa fa-home"></i><span class="ms-2">Home</span> </a>
                         </li>

                         <li> <a href="{{route('employee.list')}}" class="nav-link text-white"> <i
                                        class="fa fa-first-order"></i><span class="ms-2">Employee</span> </a> </li>
                         <li> <a href="{{route('product.list')}}" class="nav-link text-white"> <i
                                        class="fa fa-first-order"></i><span class="ms-2">Product</span> </a> </li>
                         <li> <a href="{{route('customer.list')}}" class="nav-link text-white"> <i
                                        class="fa fa-cog"></i><span class="ms-2">Customer</span> </a> </li>
                         <li> <a href="{{route('category.list')}}" class="nav-link text-white"> <i
                                        class="fa fa-cog"></i><span class="ms-2">Category</span> </a> </li>
                         <li> <a href="{{route('order.list')}}" class="nav-link text-white"> <i
                                        class="fa fa-bookmark"></i><span class="ms-2">Order</span> </a> </li>
                    </ul>
                    <hr>
                    <div class="dropdown"> <a href="{{route('myProfile.view')}}"
                              class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" " data-bs-toggle="
                              dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png"
                                   alt="https://github.com/mdo.png" width="32" height="32" class="rounded-circle me-2">
                              <strong>{{Session()->get('mname')}}
                              </strong> </a>
                         {{-- //"{{asset('uploads/managers/'.$man->MPICTURE)}}" --}}
                    </div>
                    <a href="{{route('logout')}}" class="nav-link text-white"> <i class="fa fa-sign-out"
                              aria-hidden="true"></i><span class="ms-2">Sign Out</span> </a>

               </div>


               <div class="col-6">

                    @yield('content')
                    @yield('demo')
               </div>
          </div>


          @include('sweetalert::alert')

     </body>


</html>