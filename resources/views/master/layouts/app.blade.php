<!doctype html>
<html lang="en" dir="ltr">

<!-- NRTindex.html by NRT, Mon, 31 Dec 2018 06:25:12 GMT -->
<head>
    @include('master.layouts.head')
</head>
@include('master.layouts.header')

@include('master.layouts.sidebar')
<div class="app-content  my-3 my-md-5">
  <div class="side-app">
    <div class="page-header">
	      <h4 class="page-title">Dashboard</h4>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="#">Home</a></li>
	        <li class="breadcrumb-item active" aria-current="page">IT Dashboard</li>
	      </ol>
    </div>

@section('main-content')

@show
</div>
</div>


@include('master.layouts.footer')

@stack('script')
	</body>
<!-- NRTindex.html by NRT, Mon, 31 Dec 2018 06:26:03 GMT -->
</html>
