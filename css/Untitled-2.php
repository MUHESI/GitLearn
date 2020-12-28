<?php 
    require('navbar.php');
    require('admin/includes/function.php');
?>

    <!-- ********** Hero Area Start ********** -->
        <?php //include('admin/contenu_Index/hero_area.php');?>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="justify-content-center">    
                <!-- ============= Post Content Area Start ============= -->
                <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                    <div class="world-catagory-area">

                        <!-- ====================================================================
                        ========================= DEBUT SECTION 'A'==============================-->
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8 ">
                                    <!-- NOUVELLES CRSDI  -->
                                <div class="sidebar-widget-area">
                                    <h5 class="title">Nouvelles</h5>
                                    <!-- <div class="widget-content"></div> -->
                                            <?php include('A_Tp_carousel/coura.php');?>
                                    <!-- </div> -->
                                </div>
                                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.9s">
                                    <div class="sidebar-widget-area SideWidget_Area">
                                        <div class="sidebar-widget-area" id="aboutus"> 
                                            <h5 class="title">Textes explicatifs</h5>
                                            <div>
                                                <?php include('admin/contenu_Index/about_crsdi.php');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--  -->
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 ">
                                <div> <!-- IMAGE DU JOUR-->
                                        <?php include('admin/contenu_Index/image_du_jour.php');?>
                                </div>
                            </div>
            </div>
                        <div class="textinImg-glogal">
                            <div class="textinImg">
                                <h3>CRSDI  </h3>
                                Bon nombre des peuples africains ont su conserver la passivité (inaction) dans sa version la plus radical possible, c'est-à-dire, un déterminisme absolu. Plusieurs exemples peuvent illustrer cette affirmation. Notamment, le fatalisme religieux que certaines doctrines du pays considèrent comme étant le pilier central de leurs formulations. Cette attitude passive face à l’avenir est un héritage du fatalisme religieux, ainsi Saint Augustin avait l’habitude de dire : « Dieu sait tout et a tout programmé d’avance »<br />                               
                                « Si une espèce, quelle qu’elle soit, ne se modifie pas et ne se perfectionne pas aussi vite que ses concurrents, elle doit être exterminée. »
                            </div>
                        </div>

                        <div class="text-border-global sidebar-widget-area SideWidget_Area">
                            <div class="text-border">
                                <div class="text-border-titre">
                                    <h4> Philosophie CRSDI </h4>
                                    <!-- <h5> titre deux qui décrit : </h5> -->
                                </div>
                                <p>
                                    La clairvoyance de quelques dirigeants et leurs éventuel courage politique ne suffisent pas pour cristalliser les idées en actions. Ils doivent affronter non seulement l’inertie de tous ceux qui pensent comme eux mais n’osent pas le dire, mais aussi l’opposition de tous ceux qui pensent le contraire que ce soit par conviction, par intérêt ou par souci d’allégeance à un clan, et enfin la résistance passive de la masse de ceux qui souhaitent que rien ne change. Comment, dans ces conditions, espérer a un changement qui viendrait d’en haut ? C’est d’en bas qu’il faut agir, expérimenter et innover.
                                </p>
                            </div>
                        </div>

                        <div class="row"></div>
                    <!-- ====================================================================
                    ========================= FIN SECTION 'A'=============================-->
                    <div class="world-latest-articles">
                        <div class="row"></div>
                        
                                <div class="title">
                                    <h5 id="livelabo">Axes d'intervention </h5>
                                </div>
                                    <?php  //require('admin/contenu_index/servises.php');?>
                                     <?php require('services.php');?>                          

                        <!-- Load More btn -->
                        <div class="row">
                            <div class="col-12">
                                <div class="load-more-btn mt-50 text-center">
                                    <a href="#" class="btn world-btn">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php require('footer.php');?>