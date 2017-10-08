<section class="firstsection " id="firstclass">

    <!-- section Title -->
    <h1 class="text-center sectiontitle">خدمات مُتاحة حاليا </h1>
    <hr class="style14">
    <h4 class="text-center sectiondescription container">
        خدماتنا سابقة الذكر و أكثر متاحة حتى قبل إطلاق الموقع ، فإن اردت دائما بعض الخدمات المميزة لمشروعك على وجه السرعة ، فيمكنك إختيار احدى الخدمات المتاحة حاليا و التي يمكن تقديمها ، و مراسلتنا بها على رسائل الصفحة على الفسيبوك و سنتواصل معك بشكل أفضل لتوفير خدمتك ، من بين خدماتنا :
    </h4>
    <!-- ./Section -->





    <div class="container eighthclass">

    <?php
    // Query for specific Tags :
    $post_tag = "خدمات";
    $the_query = new WP_Query( 'category_name='.$post_tag );


    if(have_posts()) // Check Posts
    {
    while ($the_query -> have_posts()){ // Loop throw posts
    $the_query ->  the_post(); // The post  ?>

        <div class="col-md-6">
            <div class="row the-service card card-1">
                <div class="col-md-6">
                   <div class="img-responsive the-service-img"><?php the_post_thumbnail() ?></div>
                </div>
                <div class="col-md-6 top-services-title">
                    <h3><?php the_title() ?> </h3>
                    <p><?php the_excerpt() ?> </p>
                </div>
            </div>
        </div>

        <?php
}
}

?>
    </div>
