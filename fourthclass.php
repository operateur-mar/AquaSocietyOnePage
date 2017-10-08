

<section class="firstsection">

    <!-- section Title -->
    <h1 class="text-center sectiontitle">معرض أعمالنا</h1>
    <hr class="style14">
    <h4 class="text-center sectiondescription container">
        نستعرض عليك هنا بعضا من أهم الأعمال التي قمنا بها ، و التي أنجزناها سواء من باب إستعراضها او من تلبية لطلبات عملاء سابقين ، نقدمها لك و نستعرضها عليك
        حتى تتعرف علينا أكثر و تأخذ فكرة عن مدى جودة أعمالنا ، إستمتع :
    </h4>
    <!-- ./Section -->


    <!-- Start -->
    <div class="container">
        <div class="row">
    <?php
    // Query for specific Tags :
    $post_tag = "أعمال";
    $the_query = new WP_Query( 'category_name='.$post_tag );


    if(have_posts()) // Check Posts
    {
        while ($the_query -> have_posts()){ // Loop throw posts
            $the_query ->  the_post(); // The post  ?>

            <div class="col-sm-4">
                <div class="wrapper">
                   <div class="img-responsive"> <?php the_post_thumbnail()  ?></div>
                    <div class="darken"></div>
                    <div class="centered">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="date"><?php the_tags('',' | ') ; ?></p>
                    </div>
                </div>
            </div>
    <?php
        }
    }

    ?>
        </div>
    </div>






    <!-- ./ End -->





</section>