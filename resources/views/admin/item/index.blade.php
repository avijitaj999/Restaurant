<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')
   <!-- <style>
    .div_deg {
        margin: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .table_deg {
        width: 100%;
        border-collapse: collapse;
    }

    .table_deg th,
    .table_deg td {
        padding: 8px 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table_deg th {
        background-color: red;
        color: #333;
    }

    .table_deg tbody tr:nth-child(even) {
        background-color: 	#7cf;
    }

    .table_deg tbody tr:hover {
        background-color: #c8dbe1;
    }

    .table_deg td:last-child {
        text-align: center;
    }
</style> -->
<style>/* CSS for Dark Themed Table */
body {
    background-color: #121212;
    color: #ffffff;
    font-family: 'Arial', sans-serif;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 1em;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #1f1f1f;
}

thead tr {
    background-color: #333333;
    color: #ffffff;
    text-align: left;
}

th, td {
    padding: 12px 15px;
    border: 1px solid #444444;
}

tbody tr {
    border-bottom: 1px solid #444444;
}

tbody tr:nth-of-type(even) {
    background-color: #2c2c2c;
}

tbody tr:nth-of-type(odd) {
    background-color: #1f1f1f;
}

tbody tr:hover {
    background-color: #3a3a3a;
    cursor: pointer;
}

tbody td {
    position: relative;
}

tbody td:before {
    content: "";
    position: absolute;
    left: 0;
    width: 5px;
    height: 100%;
    background-color: #009879;
    transform: scaleY(0);
    transition: transform 0.2s ease-in-out;
}

tbody tr:hover td:before {
    transform: scaleY(1);
}

@media (max-width: 600px) {
    table {
        border: 0;
    }

    table thead {
        display: none;
    }

    table tbody tr {
        display: block;
        margin-bottom: .625em;
    }

    table tbody tr:nth-of-type(even),
    table tbody tr:nth-of-type(odd),
    table tbody tr:hover {
        background-color: transparent;
    }

    table tbody tr td {
        display: block;
        text-align: right;
        font-size: .8em;
        border-bottom: 1px solid #444444;
    }

    table tbody tr td:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
    }

    table tbody tr td:last-child {
        border-bottom: 0;
    }
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

        
          <h1 style="color:azure; align-items:center; justify-content:center; display:flex;">All Item</h1>
<div class="div_d">
<a class="btn btn-success" style="margin-left: 10px;" href="{{url('create')}}">Add Item</a>
</div>
</form>
</div>
<div class="div_deg">
    <table class="table_deg">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->details }}</td>
                    <td><a class="btn btn-deanger" onclick="confirmation(event)" href="{{url('delete_item',$item->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
          
      </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.slider.js')
  </body>
</html>