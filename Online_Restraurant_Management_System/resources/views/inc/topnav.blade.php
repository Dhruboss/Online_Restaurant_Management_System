<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #97FCC7;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TBC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">product</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->

<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light" style="background-color: #F5B041">
 <div class="container">
      <a class="navbar-brand" href="#">TBC</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> home </a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('product')}}"> product</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('login')}}"> login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('signup')}}"> Signup</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('logout')}}"> logout</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('customer.myorders')}}"> My Orders</a></li>
    </ul>
  <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{route('products.mycart')}}"> Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('products.emptycart')}}">Empty Cart</a></li>
        <li class="nav-item"><a style=" color: black" class="fa">&#xf090; login</a></li>
    </ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        navbar_width = document.querySelector('.navbar').offsetWidth;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
         document.body.style.paddingTop = '0';
      } 
  });
});
</script>