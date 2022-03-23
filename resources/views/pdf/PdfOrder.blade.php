<html>

     <head>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
               integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
               crossorigin="anonymous">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link href="{{ asset('css/order/details.css') }}" rel="stylesheet" />
          <style>
               body {

                    color: #1a202c;
                    text-align: left;
                    background-color: #e2e8f0;
               }

               .main-body {

                    width: 1000px;
                    margin-top: 15px;


               }

               .card {
                    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
               }

               .card {
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    min-width: 0;
                    word-wrap: break-word;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 0 solid rgba(0, 0, 0, .125);
                    border-radius: .25rem;
               }

               .card-body {
                    flex: 1 1 auto;
                    min-height: 1px;
                    padding: 1rem;
               }

               .gutters-sm {
                    margin-right: -8px;
                    margin-left: -8px;
               }

               .gutters-sm>.col,
               .gutters-sm>[class*=col-] {
                    padding-right: 8px;
                    padding-left: 8px;
               }

               .mb-3,
               .my-3 {
                    margin-bottom: 1rem !important;
               }

               .bg-gray-300 {
                    background-color: #e2e8f0;
               }

               .h-100 {
                    height: 100% !important;
               }

               .shadow-none {
                    box-shadow: none !important;
               }

               .table-res {
                    margin-top: 5px;
               }





               .table-wrapper {
                    min-width: 1050px;
                    background: #fff;
                    padding: 20px 25px;
                    border-radius: 3px;
                    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
               }

               .table-title {
                    padding-bottom: 15px;
                    background: #6f1a10;
                    color: #fff;
                    padding: 16px 30px;
                    margin: -20px -25px 10px;
                    border-radius: 3px 3px 0 0;
               }

               .table-title h2 {
                    margin: 5px 0 0;
                    font-size: 24px;
               }

               .table-title .btn {
                    color: #ffffff;
                    float: right;
                    font-size: 13px;
                    background: #BB2D3B;
                    border: none;
                    min-width: 50px;
                    border-radius: 4px;
                    border: none;
                    outline: none !important;
                    margin-left: 10px;
               }

               .table-title .btn:hover,
               .table-title .btn:focus {
                    color: #000000;
                    background: #ffffff;
               }

               .table-title .btn i {
                    float: left;
                    font-size: 21px;
                    margin-right: 5px;
               }

               .table-title .btn span {
                    float: left;
                    margin-top: 2px;
               }



               .text-success {
                    color: #10c469;
               }

               .text-info {
                    color: #62c9e8;
               }

               .text-warning {
                    color: #FFC107;
               }

               .text-danger {
                    color: #ff5b5b;
               }
          </style>

     </head>

     <body>

          <div class="container">
               <div class="table-res">
                    <div class="table-wrapper">
                         <div class="table-title">
                              <div class="row">
                                   <div class="col">
                                        <h2> Order Details</h2>
                                   </div>

                              </div>
                         </div>

                         <div class="main-body">
                              <div class="row gutters-sm">

                                   <div class="col-md-8">
                                        <div class="card mb-3">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->customer->CNAME}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row ">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Customer Email</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->customer->CEMAIL}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Customer Phone</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->customer->CPHONE}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Order Item</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->ORDERITEM}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Status</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->OSTATUS}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Total Cost</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->OTOTALCOST}}
                                                       </div>
                                                  </div>
                                                  <hr>

                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Order Date</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->ODATE}}
                                                       </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-3">
                                                            <h6 class="mb-0">Payment Method</h6>
                                                       </div>
                                                       <div class="col-sm-9 text">
                                                            {{$od->OPAYMETHOD}}
                                                       </div>
                                                  </div>
                                                  <hr>


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