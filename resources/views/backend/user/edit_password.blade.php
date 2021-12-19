 @extends('admin.admin_master')
 @section('admin')
 <div class="content-wrapper">
     <div class="container-full">
         <section class="content">

             <!-- Basic Forms -->
             <div class="box">
                 <div class="box-header with-border">
                     <h4 class="box-title">Change Password</h4>
                     <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                 </div>
                 <div class="box-body">
                     <div class="row">
                         <div class="col">
                             <form method="post" action="{{route('password.update')}}">
                                 @csrf
                                 <div class="row">
                                     <div class="col-12">

                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="form-group">
                                                     <h5>Current Password <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="password" name="oldpassword" id="current_password" class="form-control" >
                                                         @error('oldpassword')
                                                         <span class="text-danger">{{$message}}</span>
                                                         @enderror
                                                     </div>
                                                 </div>



                                                 <div class="form-group">
                                                     <h5>New Password <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="password" name="password" class="form-control" >
                                                         @error('password')
                                                         <span class="text-danger">{{$message}}</span>
                                                         @enderror
                                                     </div>

                                                 </div>

                                                 <div class="form-group">
                                                     <h5>Confirem Password <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                                         @error('password_confirmation')
                                                         <span class="text-danger">{{$message}}</span>
                                                         @enderror
                                                     </div>

                                                 </div>

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