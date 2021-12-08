<div class="discs_container py-5">
  <div class="container d-flex justify-content-around">
    <!-- <?php include __DIR__ . '/cards.php';?> -->
    
    <div class="card mb-3 p-3 text-center" style="width: 15rem;" v-for="disc in discsData">
      <img :src="'assets/' + disc.imgSrc" class="card-img-top" alt="card cover">
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">{{disc.title}}</h5>
        <p class="card-text mb-0">{{disc.author}}</p>
        <p class="card-text">{{disc.year}}</p>
      </div>
    </div>

  </div>
</div>