<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')
   <style>
    .div_deg{

        display: flex;
        justify-content: center;
        align-items: center;
    }
    label{
        display: inline-block;
        width: 200px;
        padding: 20px;
    }
   </style>
  </head>
  <body>
   @include('admin.slider.header')


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.slider.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

         <h1>Update Slider</h1>

     <div class="div_deg">


         
     <form action="{{ url('edit__slider', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $data->title }}">
    </div>

    <div>
        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle" value="{{ $data->subtitle }}">
    </div>

    <div>
        <label for="current_image">Current Image</label>
        <img width="150px" src="/slider/{{ $data->image }}" alt="">
    </div>

    <div>
        <label for="image">New Image</label>
        <input type="file" name="image">
    </div>

    <div>
        <input class="btn btn-success" type="submit" value="Update Slider">
    </div>
</form>


     </div>
          
      </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.slider.js')
  </body>
</html> 