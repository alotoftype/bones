<?

/*Template Name: HomePage Template */

?>


<? get_header(); ?>
<nav>
    <ul>
        <li><a href="#about">about</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="#news">news</a></li>
    </ul>
</nav>
<section>
    <?
    if(have_rows('homepage_cta')):
    ?>

        <?php
        while(have_rows('homepage_cta')): the_row();
        ?>
            <? $img = get_sub_field('image') ?>
         <div>
             <img src="<? echo $img['url']?>"
                  alt=""><? the_sub_field('message'); the_sub_field('button') ?>
         </div>
        <? endwhile; ?>
        
     <?else: ?>


     <?endif; ?>

</section>
<section id="about">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem commodi dicta distinctio facere fuga ipsum iste labore libero maiores minus neque nostrum, odio omnis provident quidem saepe suscipit unde.</p>
</section>
<section id="services">
    <h2>Services</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci aperiam distinctio dolores esse est illo ipsa iure laudantium mollitia neque odio odit porro, provident quod ratione, reiciendis voluptatem.</p>
</section>
<section id="contact">
    <h2>Contact</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cum debitis et facilis illo illum, labore magni obcaecati optio praesentium rem repellat rerum vel veniam voluptatibus! Asperiores, perspiciatis, repellendus? Non!</p>
</section>
<section id="news">
    <h2>news</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet, aspernatur. Facilis, fugiat, placeat. Dolorem doloribus facere iste laborum nemo nobis placeat quis tenetur! Dicta doloremque hic placeat quaerat voluptatem.</p>
</section>


<? get_footer(); ?>