<?php 
/* SLIDER CUSTOM FIELD FOR HOMEPAGE */
$images = get_field('slider_photos');
$count=0;
$count1=0;

if($images) : ?>



<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      	<?php foreach( $images as $image ): ?>
        <li data-target="#carousel" data-slide-to="<?php echo $count; ?>" <?php if($count==0) : ?>class="active"<?php endif; ?>></li>      
        <?php 
		$count++;
        endforeach; ?>
      </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<?php foreach( $images as $image ): ?>
            <div class="item<?php if($count1==0) : echo ' active'; endif; ?>">
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>                
            </div><!-- item -->
        <?php 
        $count1++;        
        endforeach; 		
        ?>       
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fleche-gauche-carousel" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fleche-droite-carousel" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif; ?>
