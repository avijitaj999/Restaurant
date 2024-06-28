<!DOCTYPE html>
<html>
  <head> 
   @include('admin.slider.css')

   

   <style>
    .div_deg{


        margin-top: 60px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color:white;  
    }
    .de-t{
        border: 2px solid greenyellow;

    }
    th{
        background-color: skyblue;
        color: aliceblue;
        font-size: 19px;
        font-weight: bold;
        padding: 12px;
    }
    td{
        border: 1px solid blue;
        text-align: center;
        
  
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
            <h1 style=" text-align: center; display: flex; justify-content: center; color:aliceblue; ">All Slider</h1>

          <div class="div_deg">

            <table class="de-t">


            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>


@foreach($Slider as $sliders)

            <tr >

            <td >{{$sliders->title}}</td>
            <td >{!!Str::words($sliders->subtitle,5)!!}</td>
            <td><img height="100px" width="100px" src="slider/{{$sliders->image}}" alt=""></td>

            <td ><a class="btn btn-success" href="{{url('edit_slider', $sliders->id)}}">Edit</a></td>

            <td><a class="btn btn-deanger" onclick="confirmation(event)" href="{{url('delete_slider',$sliders->id)}}">Delete</a></td>
            </tr>
      @endforeach
            </table>

     


          </div>

         <div class="div_deg"> {{$Slider->onEachSide(1)-> links()}}</div>
      </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.slider.js')
  </body>
</html>