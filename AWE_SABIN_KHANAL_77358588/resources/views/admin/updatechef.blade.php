<x-app-layout>
 
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    

   <base href="/public">


    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")

      
    <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf

      <div>
        <lable>Chef Name</lable>
        <input style="color:blue" type="text" name="name" value="{{$data->name}}">
      </div>

      <div>
        <lable>Speciality</lable>
        <input style="color:blue" type="text" name="speciality" value="{{$data->speciality}}">
      </div>

      <div>
        <lable>Old Image</lable>
        <img height="200" width="200" src="/chefimage/{{$data->image}}">
      </div>

      <div>
        <lable>New Image</lable>
        <input type="file" name="image">
      </div>

      <div>
        
        <input style="color:blue" type="submit" value="Update Chef" required>
      </div>

    </form>

  </div>
       
    @include("admin.adminscript")
   
   
   
  </body>
</html>