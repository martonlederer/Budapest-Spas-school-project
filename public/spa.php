<?php

  require '../src/inc/header.inc.php';

  try {

    $spa = new Spa($_GET['spa-name']);

  }catch (\Exception $e) {

    die($e->getMessage());

  }

 ?>

<div class="spa" style="background-image: url(../assets/img/thumbnails/<?php echo $spa->getThumbnail(); ?>);">

  <div class="container">

    <h1 class="spa-name"><?php echo $spa->getName() ?></h1>
    <h2><?php echo $spa->getAuthor() ?></h2>

    <p>Gratulálunk! Megtaláltátok a <?php echo $spa->getName() ?>-t! Olvassatok tovább egy-két érdekes információért! A következő állomást az oldal legalján láthatod.<br /><?php echo $spa->getText() ?></p>

    <h1 class="subtitle">Galéria</h1>

    <div class="galery">

      <?php for($i = 0; $i < count($spa->getGalery()); $i++) { ?>

      <img height="200" src="<?php echo $spa->getGalery()[$i] ?>" onclick="openGalery(<?php echo $i ?>)">

      <?php } ?>

    </div>

    <h1 class="subtitle">Következő állomás</h1>

    <p><?php echo $spa->getNextSpa() ?></p>

  </div>

</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">

    <div class="pswp__container">

      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>

    </div>

    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--share" title="Share"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <div class="pswp__preloader">

          <div class="pswp__preloader__icn">

            <div class="pswp__preloader__cut">

              <div class="pswp__preloader__donut"></div>

            </div>

          </div>

        </div>

      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">

        <div class="pswp__share-tooltip"></div>

      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

      <div class="pswp__caption">

        <div class="pswp__caption__center"></div>

      </div>

    </div>

  </div>

</div>

<script>

  let galeryItems = [

    <?php for($i = 0; $i < count($spa->getGalery()); $i++) { ?>

    {

        src: '<?php echo $spa->getGalery()[$i] ?>',
        w: 600,
        h: 400

    },

    <?php } ?>

  ];

</script>

<?php

   require '../src/inc/footer.inc.php';

 ?>
