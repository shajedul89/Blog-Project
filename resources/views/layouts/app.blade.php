<!DOCTYPE html>
<html lang="en">

<head>

   @include('layouts.head')



</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
   @include('layouts.header')
    <!-- /Header -->

    <!-- Sidebar -->
   @include('layouts.menu')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

             @section('main-content')
             @show
    <!-- /Page Wrapper -->
        </div>
    </div>


<form id="logout_form" action="{{route('logout')}}" method="POST" class="d-none">
    @csrf

</form>


</div>

@include('layouts.partials.script')

</body>


</html>
