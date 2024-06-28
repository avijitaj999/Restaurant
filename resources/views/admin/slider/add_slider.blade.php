<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')
   <style>
   .div_deg {
    background-color: #333;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.div_deg label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.div_deg input[type="text"],
.div_deg input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #555;
    border-radius: 5px;
    background-color: #444;
    color: #fff;
}

.div_deg input[type="text"]::placeholder,
.div_deg input[type="file"]::placeholder {
    color: #bbb;
}

.div_deg input[type="text"]:focus,
.div_deg input[type="file"]:focus {
    border-color: #888;
    outline: none;
}

.div_deg .btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.div_deg .btn-success:hover {
    background-color: #218838;
}

.div_deg form div {
    margin-bottom: 15px;
}

.div_deg form div:last-of-type {
    margin-bottom: 0;
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

          <h1 style=" text-align: center; display: flex; justify-content: center; color:aliceblue; ">ADD SLIDER</h1>


          <div class="div_deg">
        <form action="{{ url('upload_slider') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Slider Title</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="subtitle">Slider Sub-Title</label>
                <input type="text" name="subtitle" id="subtitle" required>
            </div>
            <div>
                <label for="image">Slider Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div style="display: flex; justify-content: center; align-items: center;">
                <input class="btn btn-success" style="margin-left: 30px;" type="submit" value="Add Slider">
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