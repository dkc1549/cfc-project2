<nav class="container navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('blogs.index')}}">BMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route("blogs.index")}}">Home</a>
        <a class="nav-link" href="{{route('blogs.create')}}">Create</a>
        <a class="nav-link" href="#">Contact Us</a>
      </div>
    </div>
  </div>
</nav>