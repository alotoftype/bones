<?

/*Template Name: HomePage Template */

?>


<? get_header(); ?>
<nav class="second-nav container">
                 <div class="row">
    <ul class="list-inline col-md-12">
        <li><a href="#about">about</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="#news">news</a></li>
    </ul>
                     </div>
</nav>
<section class="container">

    <?
    if(have_rows('homepage_cta')):
    ?>
         <div class="owl-carousel">
        <?php
        while(have_rows('homepage_cta')): the_row();
        ?>
            <div class="row">
            <? $img = get_sub_field('image') ?>
         <div class="col-md-3">
             <img src="<? echo $img['url']?>" 
                  alt="" class="img-responsive">
         </div>
            <div class="col-md-9">
                <? the_sub_field('message'); ?> <a href="?the_sub_field('button') ?> " class="btn
                btn-primary">Button</a>
            </div>
                </div>  
        <? endwhile; ?>

     <?else: ?>


     <?endif; ?>
   </div>
</section>
<section id="about">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h2>About</h2>                                                                                                                               <? the_field('about') ?>
             </div

         </div>
     </div>


</section>
<section id="services">
    <div class="container">
        <div class="row">
             <div class="col-md-12">
            <h2>Services</h2>
           <? the_field('our_services') ?>
             </div>
        </div>
    </div>


</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact</h2>
            <? the_field('contact')?>
            </div>
        </div>
    </div>


</section>
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h2>news</h2>                                                                                                                                                                                                                                 
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet, aspernatur. Facilis, fugiat, placeat. Dolorem doloribus facere iste laborum nemo nobis placeat quis tenetur! Dicta doloremque hic placeat quaerat voluptatem.</p>
            </div>
    </div>
    </div>

</section>
           <

<? get_footer(); ?>