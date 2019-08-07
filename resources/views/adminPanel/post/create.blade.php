
@extends('adminPanel.layouts.master')



@section('post_create')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">مطلب جدید</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>
            <button class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
            <div class="dropdown float-right mr-2 hidden-sm-down">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2019</a> <a class="dropdown-item" href="#">March 2019</a> <a class="dropdown-item" href="#">April 2019</a> </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="mb-0 text-white">ایجاد مطلب جدید</h4>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{route('adminPanel.post.save')}}"  >
                        <div class="form-body">
                            <h3 class="card-title">اطلاعات</h3>
                            <hr>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">عنوان</label>
                                        <input type="text" id="post_title" name="post_title" class="form-control" placeholder="عنوان مطلب">
                                        <small class="form-control-feedback"> عنوان مطلب </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">دسته بندی</label>
                                        <select class="form-control custom-select" data-placeholder="انتخاب دسته بندی" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                </div>
                            </div>
                                <!--/span-->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">برچسب ها</label>
                                        <input type="text" id="post_title" name="post_title" class="form-control" placeholder="برچسب ها">
                                        <small class="form-control-feedback">برچسب </small> </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>محتوا</label>
                                        
                                        <textarea id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                                        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                        <script>
                                          var options = {
                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                          };
                                        </script>
                                           <script>
                                            CKEDITOR.replace('description', options);
                                        </script>

                                    </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <a id="pic" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> انتخاب تصویر
                                  </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="filepath">
                              </div>
                              <img id="holder" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                    </div>
            
               
                </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-inverse">لغو کردن</button>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>

@endsection