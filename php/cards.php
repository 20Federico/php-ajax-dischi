<?php
  include_once __DIR__ . '/../data/dischi.php';

  foreach ($discs as $disc) {
?>
<div class="card mb-3 p-3 text-center" style="width: 15rem;">
  <img src="<?php echo 'img/' . $disc['imgSrc'] ?>" class="card-img-top" alt="card cover">
  <div class="card-body">
    <h5 class="card-title fw-bold mb-4"><?php echo strtoupper($disc['title']) ?></h5>
    <p class="card-text mb-0"><?php echo $disc['author'] ?></p>
    <p class="card-text"><?php echo $disc['year'] ?></p>
  </div>
</div>
<?php
  }
?>