 @extends('admin.admin_master')
 @section('admin')
 <div class="content-wrapper">
     <div class="container-full">
         <section class="content">

             <!-- Basic Forms -->
             <div class="box">
                 <div class="box-header with-border">
                     <h4 class="box-title">Add Fee Category</h4>
                     <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                 </div>
                 <div class="box-body">
                     <div class="row">
                         <div class="col">
                             <form method="post" action="{{route('store.fee.category')}}">
                                 @csrf
                                 <div class="row">
                                     <div class="col-12">

                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="form-group">
                                                     <h5>Student Fee Category Name <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="text" name="name" class="form-control">
                                                         @error('name')
                                                         <span class="text-danger">{{$message}}</span>
                                                         @enderror
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- End ROW -->
                                         </div>


                                         <div class="text-xs-right">
                                             <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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