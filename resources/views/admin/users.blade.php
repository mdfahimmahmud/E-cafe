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

      <table bgcolor="grey" border="3px">

        <tr>

          <th style="padding: 40px;">Name</th>
          <th style="padding: 40px;">Email</th>
          <th style="padding: 40px;">Action</th>
        </tr>

        @foreach($data as $data)

        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>

          @if($data->usertype=='0')

          <td> <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

          @else

          <td> <a  class="btn btn-light" >Not Allowed</a></td>
          @endif




        </tr>

        @endforeach
      </table>
    </div>



  </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>