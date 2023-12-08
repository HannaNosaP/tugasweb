<?php include 'header.php'; ?>
   <div class="jumbotron jumbotron-fluid" id="Home">
    <div class="container text-center">
        <img class="rounded-circle" width="300" height="300" src="data:image/png;base64,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" alt="">
      <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>




<div class="container text-center" id="about">

    <div class="row">
        <div class="col">
            <h1>about</h1>
        </div>
    </div>

    <div class="row">
        <div class="col text-justify">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, debitis! Et maxime, cum labore, praesentium exercitationem similique nisi sunt ea rerum numquam vero quod, qui quibusdam officiis esse doloremque sequi.</p>
        </div>
        <div class="col text-justify">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, at! Sit error, esse quaerat culpa soluta, dolore fugit fugiat aliquam porro laborum eos, explicabo harum optio recusandae quas illo excepturi?</p>
        </div>
    </div>

    
</div>
<div class="card-deck m-5">
    <div class="card">
      <img class="card-img-top" src="https://www.dior.com/couture/ecommerce/media/catalog/product/M/H/1684143933_M9242UWHC_M900_E01_ZHC.jpg" alt="Card image cap" width="600" height="600">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://www.dior.com/couture/ecommerce/media/catalog/product/C/D/1696020315_M1296ZEMF_M933_E01_GH.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://www.dior.com/couture/ecommerce/media/catalog/product/M/j/1686224722_M0455CTZQ_M928_E01_GH.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'footer.php'; ?>