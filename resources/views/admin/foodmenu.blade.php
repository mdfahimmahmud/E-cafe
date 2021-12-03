<x-app-layout>
 
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">


    @include('admin.navbar')

    <div style="position: relative; top:60px; right:-150px;">

   

      <form action="{{url('uploadfood')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div >

          <label for="">Title</label>
          <input style="color:black;"  type="text" placeholder="title" name="title" required>
        </div>

        <div>

          <label  for="">Price</label>
          <input style="color:black;" type="number" placeholder="price" name="price" required>
        </div>

        <div>

          <label for="">Image</label>
          <input type="file"  name="image" required>
        </div>

         <div>

          <label  for="">Description</label>
          <input style="color:black;" type="text" placeholder="description" name="description" required>
        </div>
        <div>

          <input style="color:black;" type="submit" value="save" >
        </div>



      </form>

    


      <div>

        <table bgcolor="black">

          <tr>

            <th style="padding: 30px;">Food Name</th>
            <th style="padding: 30px;">Price</th>
            <th style="padding: 30px;">Description</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px;">Action</th>
          </tr>

          @foreach($data as $data)

          <tr align="center">

            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img style="height: 100px;width:100px;" src="/foodimage/{{$data->image}}" alt=""></td>
            <td><a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
            <td><a  class="btn btn-success" href="{{url('/updateview',$data->id)}}">Update</a></td>
          </tr>

          @endforeach
        </table>



      </div>
    </div>

    </div>









    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>