 @extends('admin.admin_master')
 @section('admin')
 <div class="content-wrapper">
     <div class="container-full">
         <section class="content">

             <!-- Basic Forms -->
             <div class="box">
                 <div class="box-header with-border">
                     <h4 class="box-title">Add User</h4>
                     <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                 </div>
                 <div class="box-body">
                     <div class="row">
                         <div class="col">
                             <form method="post" action="{{route('users.store')}}">
                                 @csrf
                                 <div class="row">
                                     <div class="col-12">
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <h5>User Role <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <select name="usertype" id="usertype" required="" class="form-control">
                                                             <option value="" selected="" disabled="">Select Role</option>
                                                             <option value="Admin">Admin</option>
                                                             <option value="User">User</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- End col-6  -->
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <h5>User Name <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="text" name="name" class="form-control" required="">
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- End col-6  -->
                                         </div>
                                         <!-- End ROW -->

                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="row">
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <h5>User Email <span class="text-danger">*</span></h5>
                                                             <div class="controls">
                                                                 <input type="email" name="email" class="form-control" required="">
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- End col-6  -->
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <h5>User Password <span class="text-danger">*</span></h5>
                                                             <div class="controls">
                                                                 <input type="password" name="password" class="form-control" required="">
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- End col-6  -->
                                                 </div>
                                                 <!-- End ROW -->
                                             </div>


                                             <div class="text-xs-right">
                                                 <input type="submit" class="btn btn-rounded btn-info mb-5" vlaue="Submit">
                                             </div>
                             </form>

                         </div>
                         <!-- /.col -->
                     </div>
                     <!-- /.row -->

                 </div>

             </div>

         </section>
     </div>
 </div>




 @endsection