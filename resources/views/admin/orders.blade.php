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

    <div class="container">

      <h1>Orders</h1>
      <form action="{{url('search')}}" method="GET">

         @csrf
          <input type="text" name="search" style="color:black;">
          <input type="submit" value="Search" class="btn btn-danger">
      </form>

      <table>

        <tr align="center" style="background-color:black;">

          <td style="padding: 30px;">Name</td>
          <td style="padding: 30px;">Phone</td>
          <td style="padding: 30px;">Address</td>
          <td style="padding: 30px;">Food_Name</td>
          <td style="padding: 30px;">Price</td>
          <td style="padding: 30px;">Quantity</td>
          <td style="padding: 30px;">Total_Price</td>
        </tr>

        @foreach($data as $data)



        <tr align="center" style="background-color:#FB6355;">

          <td>{{$data->name}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->address}}</td>
          <td>{{$data->foodname}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->quantity}}</td>
          <td>{{$data->price*$data->quantity}}</td>
          <td></td>
        </tr>

        @endforeach
      </table>
    </div>



</div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>