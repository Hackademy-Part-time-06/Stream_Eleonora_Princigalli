<x-main>
  <x-carosello/>

  <!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Page Heading
      <small>Secondary Text</small>
    </h1>
  
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        @foreach ($movies as $movie)
          
        
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">ciao</a>
              <li>{{$movie->name}}</li>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
              aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt,
              dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
          @endforeach
        </div>
      </div>
    
    
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  
  </div>
  <!-- /.container -->
</x-main>
