<?php
echo view('admin/common/headerLink');
?>
<nav class="navbar navbar-expand-md fixed-top bg-white">
  <div class="container-fluid">
    <span class="navbar-text me-3">
	<button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
	<i class="fas fa-bars"></i>
	</button>
    </span>
    <a class="navbar-brand" href="#"><i class="fas fa-book-open me-2"></i> Question Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-user"></i>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Hello ,
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header">
<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">

<div class="row">
<div class="col-md-12">
<ul class="nav nav-pills flex-column mb-sm-auto mb-0 " id="menu">
<li class="nav-item">
<a href="#" class="nav-link align-middle px-0">
<i class="fas fa-home"></i> <span class="ms-1 d-none2 d-sm-inline2">Home</span>
</a>
</li>
<li>
<a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
<i class="fas fa-tachometer-alt"></i> <span class="ms-1 ">Dashboard</span> </a>
<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
<li class="w-100">
<a href="#" class="nav-link"> <span>Item</span> 1 </a>
</li>
<li>
<a href="#" class="nav-link"> <span class="d-none2 d-sm-inline2">Item</span> 2 </a>
</li>
</ul>
</li>
<li>
<a href="#" class="nav-link px-0 align-middle">
<i class="fs-4 bi-table"></i> <span class="ms-1">Orders</span></a>
</li>

<li class="justify-content-between">
<a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
<i class="fs-4 bi-grid"></i> <span class="ms-1">Products</span> 
<i class="fas fa-caret-down"></i>
</a>
<ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
<li class="w-100">
<a href="#" class="nav-link"> <span>Product</span> 1</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 2</a>
</li>
<li>
<a href="#" class="nav-link"> <span >Product</span> 3</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 4</a>
</li>
</ul>
</li>

<li class="justify-content-between">
<a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
<i class="fs-4 bi-grid"></i> <span class="ms-1">Products</span> 
<i class="fas fa-caret-down"></i>
</a>
<ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
<li class="w-100">
<a href="#" class="nav-link"> <span>Product</span> 1</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 2</a>
</li>
<li>
<a href="#" class="nav-link"> <span >Product</span> 3</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 4</a>
</li>
</ul>
</li>


<li class="justify-content-between">
<a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
<i class="fs-4 bi-grid"></i> <span class="ms-1">Products</span> 
<i class="fas fa-caret-down"></i>
</a>
<ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
<li class="w-100">
<a href="#" class="nav-link"> <span>Product</span> 1</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 2</a>
</li>
<li>
<a href="#" class="nav-link"> <span >Product</span> 3</a>
</li>
<li>
<a href="#" class="nav-link"> <span>Product</span> 4</a>
</li>
</ul>
</li>

</ul>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="spaceBlock d-block"></div>
<section class="content">
<div class="container-fluid">
<div class="row align-self-start justify-content-start">
<div class="col-md-12 mb-2">
<p class="h4">Dashboard</p>
</div>
<div class="col-md-3">
<div class="card bg-white border border-danger shadow-sm">
<div class="card-body">
<div class="d-flex">
<div class="me-auto p-2 bd-highlight">
<p class="text-muted text-uppercase  fs-12 fw-bold">Today Revenue</p>
<p class="mb-0">12,909</p>
</div>

<div class="p-2 bd-highlight"><i class="fas fa-2x fa-indian-rupee-sign"></i></div>
  
<div class="flex-grew-1 d-none">
<p class="text-muted text-uppercase  fs-12 fw-bold">Today Revenue</p>
<p class="mb-0">12,909</p>
</div>
<div class="align-self-center d-none flex-shrink-0"><i class="fas fa-rupee-sign"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="clearfix"></div>
<footer class="container-fluid footer">
<div class="row p-3 bg-white align-self-start justify-content-start">
<div class="col-md-6 col-5"><a href="#">GOACON</a> © <?php echo date("Y");?>.</div>
<div class="col-md-6 col-7">Powered by&nbsp;<a href="http://nectron.in/" target="_blank">Nectron Technology</a></div>
</div>
</footer>



<section  id="wrapper" class="d-none">
<div  class="navbar-custom shadow-sm">
<div  class="container-fluid">
<div class="row align-items-center justify-content-around">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
</div>
</div>

<div class="left-side-menu shadow-sm">
<div class="container-fluid">
</div>
</div>

<div class="content-page">
<div class="content">
<div class="container-fluid">
</div>
</div>

<footer class="footer">
<div class="container-fluid">
</div>
</footer>
</div>
</section>
<style>
body
{
	background-color: #f4f7fc;
}
#wrapper
{
    height: 100%;
    overflow: hidden;
    width: 100%;
}
.navbar-custom {
    background-color: var(--white);
    padding: 0 10px 0 0;
    position: fixed;
    left: 0;
    right: 0;
    height: 70px;
    z-index: 1001;
}
.left-side-menu {
    width: 250px;
    background: var(--white);
    border-right: 1px solid var(--bs-gray-100);
    bottom: 0;
    padding: 20px 0;
    position: fixed;
    transition: all .1s ease-out;
    top: 70px;
}
.content-page {
    margin-left: 250px;
    overflow: hidden;
    padding: 0 15px 65px;
    min-height: 80vh;
    margin-top: 70px;
}
</style>

<section class="container-fluid d-none">
<div class="row">
<div class="col-md-3 p-0">
<div class="card">
<div class="card-body p-2">
<div class="row">
<div class="col-md-12 fixed-top">
<p class="h4 text-center"><i class="fas fa-book-open me-2"></i>Question Bank</p>
</div>
</div>
</div>
</div>  
</div>
<div class="col-md-9 p-0">
<div class="card">
<div class="card-body p-2">

<div class="row">
<div class="col-md-12">
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
<div class="container-fluid">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarScroll">
<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Link
</a>
<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link disabled">Link</a>
</li>
</ul>
<form class="d-flex">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>
</nav>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
<?php
echo view('admin/common/footerLink');
?>