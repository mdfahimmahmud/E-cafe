<x-app-layout>
 
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>

    <div class="container-scroller">
    


    @include('admin.navbar')



    <div style="position: relative; top:60px; right:-150px;">

   

      <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div >

          <label for="">Title</label>
          <input style="color:black;"  type="text" value="{{$data->title}}" name="title" required>
        </div>

        <div>

          <label  for="">Price</label>
          <input style="color:black;" type="number" value="{{$data->price}}" name="price" required>
        </div>


         <div>

          <label  for="">Description</label>
          <input style="color:black;" type="text" value="{{$data->description}}" name="description" required>
        </div>
        
        <div>

          <label for="">Old Image</label>
          <img height="100px;" width="100px;" src="/foodimage/{{$data->image}}" alt="">
        </div>

        
        <div>

          <label for="">New Image</label>
          <input type="file"  name="image" required>
        </div>

        <div>

          <input style="color:black;" type="submit" value="save" >
        </div>



      </form>

    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>