 <!-- Area Chart -->
 <div class="col-xl-12 col-lg-7">
     <div class="card shadow mb-4">
         <!-- Card Header - Dropdown -->
         <div
             class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Form Sederhana</h6>
             <div class="dropdown no-arrow">
                 <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                     aria-labelledby="dropdownMenuLink">
                     <div class="dropdown-header">Dropdown Header:</div>
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something else here</a>
                 </div>
             </div>
         </div>
         <!-- Card Body -->
         <div class="card-body">


             <form class="user">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="text" class="form-control form-control-user" id="exampleFirstName"
                             placeholder="First Name">
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control form-control-user" id="exampleLastName"
                             placeholder="Last Name">
                     </div>
                 </div>
                 <div class="form-group">
                     <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                         placeholder="Email Address">
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="password" class="form-control form-control-user"
                             id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-sm-6">
                         <input type="password" class="form-control form-control-user"
                             id="exampleRepeatPassword" placeholder="Repeat Password">
                     </div>
                 </div>
                 <a href="login.html" class="btn btn-primary ">
                     Register Account
                 </a>
                 <hr>
                 <a href="index.html" class="btn btn-google ">
                     <i class="fab fa-google fa-fw"></i> Register with Google
                 </a>
                 <a href="index.html" class="btn btn-facebook">
                     <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                 </a>
             </form>
             <hr>



             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>Name</th>
                         <th>Position</th>
                         <th>Office</th>
                         <th>Age</th>
                         <th>Start date</th>
                         <th>Salary</th>
                     </tr>
                 </thead>
                 <tfoot>
                     <tr>
                         <th>Name</th>
                         <th>Position</th>
                         <th>Office</th>
                         <th>Age</th>
                         <th>Start date</th>
                         <th>Salary</th>
                     </tr>
                 </tfoot>
                 <tbody>
                     <tr>
                         <td>Tiger Nixon</td>
                         <td>System Architect</td>
                         <td>Edinburgh</td>
                         <td>61</td>
                         <td>2011/04/25</td>
                         <td>$320,800</td>
                     </tr>
                     <tr>
                         <td>Garrett Winters</td>
                         <td>Accountant</td>
                         <td>Tokyo</td>
                         <td>63</td>
                         <td>2011/07/25</td>
                         <td>$170,750</td>
                     </tr>
                     <tr>
                         <td>Ashton Cox</td>
                         <td>Junior Technical Author</td>
                         <td>San Francisco</td>
                         <td>66</td>
                         <td>2009/01/12</td>
                         <td>$86,000</td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>