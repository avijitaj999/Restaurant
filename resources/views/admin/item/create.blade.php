<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #121212;
            color: #ffffff;
        }
        
        h2 {
            color: #ffffff;
        }
        
        form {
            background: #333333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #ffffff;
        }
        
        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #444444;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #555555;
            color: #ffffff;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
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

        
          <h1 style="color:azure; align-items:center; justify-content:center; display:flex;">Add Item</h1>
          <form action="{{url('add_item')}}" method="post"  enctype="multipart/form-data">
            @csrf

        <!-- Name Input Field -->
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <!-- Price Input Field -->
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <!-- Default Select Option -->
        <label for="category">Category:</label>
        <select id="category" name="category">
            @foreach ($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
            
         

        <!-- Details Text Area -->
        <label for="details">Details:</label><br>
        <textarea id="details" name="details" rows="4" cols="50" required></textarea><br><br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
          
      </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.slider.js')
  </body>
</html>