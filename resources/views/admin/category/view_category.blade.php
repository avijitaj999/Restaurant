<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')
   <style type="text/css">
    input[type="text"]
    {
        width: 400px;
        height: 50px;
    }
    .div_d{

        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
.div_deg{
  display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
}
.table_deg{
  text-align: center;
  color: azure;
border: 2px solid burlywood;
th{
  background-color: red;
  padding: 15px;
  font-size: 20px;
  font-weight: bold;
}
td{
  color: aliceblue;
  padding: 10px;
}

/* Style for the table container */
.div_deg {
    overflow-x: auto; /* Ensures the table can be scrolled horizontally on smaller screens */
    margin: 20px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
}

/* Style for the table */
.table_deg {
    width: 100%;
    border-collapse: collapse; /* Ensures no double borders */
    margin: 20px 0;
    font-size: 1em;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

/* Style for table headers */
.table_deg thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.table_deg th,
.table_deg td {
    padding: 12px 15px; /* Adds padding to table cells */
    border: 1px solid #ddd; /* Adds a border to each cell */
}

/* Zebra striping for table rows */
.table_deg tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

/* Hover effect for table rows */
.table_deg tbody tr:hover {
    background-color: #ddd;
}

/* Responsive table - hide table header on small screens */
@media (max-width: 600px) {
    .table_deg thead {
        display: none; /* Hide table headers */
    }
    .table_deg, 
    .table_deg tbody, 
    .table_deg tr, 
    .table_deg td {
        display: block; /* Make the table elements block-level */
        width: 100%; /* Make table elements take full width */
    }
    .table_deg tr {
        margin-bottom: 15px; /* Add margin between table rows */
    }
    .table_deg td {
        text-align: right; /* Align text to the right */
        padding-left: 50%; /* Add padding to the left */
        position: relative; /* Set position to relative */
    }
    .table_deg td::before {
        content: attr(data-label); /* Set the content to data-label attribute */
        position: absolute; /* Position it absolutely */
        left: 0; /* Align it to the left */
        width: 50%; /* Set width to 50% */
        padding-left: 15px; /* Add padding to the left */
        font-weight: bold; /* Make the text bold */
        text-align: left; /* Align text to the left */
    }
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
            <h1 style="color:azure; align-items:center; justify-content:center; display:flex;">Add Category</h1>
<div class="div_d">
<form action="{{url('add_category')}}" method="post" >
  @csrf


<div>
    <input type="text" name="C_name" required>
    <input class="btn btn-success" type="submit" value="Add Category">
</div>
</form>
</div>
<div class="div_deg">
    <table class="table_deg">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
                <tr>
                    <td data-label="Name">{{ $datas->name }}</td>
                    <td data-label="Slug">{{ $datas->slug }}</td>
             <td>     <a class="btn btn-denger" onclick="confirmation(event)" href="{{url('delete_category', $datas->id)}}">Delete</a></td> 
                        
                    
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