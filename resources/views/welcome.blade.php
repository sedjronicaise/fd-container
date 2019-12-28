@extends('layouts.app')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1> @lang("Vente, Location <br>
                                    et Transport <br>
                                    de Conteneurs")
                                </h1>
                                <p>Entrer ici votre numéro de suivi <br>et vérifier votre colis 
                                   </p>
                                    <form action="/tracking" method="post">
                                        @csrf
                                        <div class="form-group d-flex">
                                            <input type="text" class="form-control" name="tracking_number" placeholder="Entrer votre numéro de suivi">
                                            <input type="submit" class="btn btn-primary text-white " value="Tracker votre colis">
                                        </div>
                                    </form>                               
                            </div>
                        </div>
                    </div>
                    <div class="pick_up_text">
                        <div class="pickup_text_iner">
                            <p>Planifiez et exécutez l'expédition de votre conteneur.</p>
                            <h3>Un grand réseau</h3>
                        </div>
                        <div class="pickup_text_arrow">
                            <img src="img/icon/right-arrow.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->
    
        <!-- about part start-->
        <section class="about_part section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about_part_img">
                            <h2>A propos</h2>
                            <img src="img/hero_bg_4.jpg" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about_part_text">
                            <div class="about_text_iner">
                                <p>Forte d'une expérience de plusieurs années dans le secteur des conteneurs. Nous sommes actifs au niveau international
                                    et transcontinental dans l'achat, la vente et la location de tous types de conteneurs maritimes, neufs et d'occasion.
                                </p>
                                <p>Nous pouvons offrir presque tous les types de conteneurs maritimes, frigorifique, stockages  neufs 
                                    ou usagés, dans différentes tailles et qualités. Notre équipe spécialisée garantit 
                                    la bonne exécution des réparations et des modifications de conteneurs. </p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- about part end-->
    
        
        <!--::resent deliveries start::-->
        <section class="deliveries_part section_padding my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="deliveries_tittle my-4">
                                <h2>Nos conteneurs</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="deliveries_slider owl-carousel">

                                <div class="single_deliveries">
                                    <img src="img/deliveries/8p.jfif" alt="">
                                    <div class="single_deliveries_text">
                                        <h3> Conteneur de stockage 8pieds</h3>
                                        <div class="single_deliveries_text_iner">
                                            <img src="img/deliveries_img.png" alt="">
                                            <p>Le conteneur 8 pieds a une capacité de chargement d’environ 6 000 kg et un poids à vide d’environ 740 kg
                                                - Etanche au vent et à l'eau (WWT) très compact
                                                utilisation flexible</p>
                                            <p>Dimensions extérieures: environ 2,44 x 2,20 x 2,26 m ; 
                                                dimensions intérieures: environ 2,27 x 2,10 x 2,05 m ;
                                                hauteur de conduite: environ 2,10 x 1 94 m ;
                                                Volume: environ 10 m³</p>
                                        </div>
                                    </div>
                                    <a href="/contact" class="btn_1 btn-sm my-2">Faire une demande</a>
                                </div>

                                <div class="single_deliveries">
                                    <img src="img/deliveries/10p3.png" alt="">
                                    <div class="single_deliveries_text">
                                        <h3>Conteneur frigorifique 10pieds</h3>
                                        <div class="single_deliveries_text_iner">
                                            <img src="img/deliveries_img.png" alt="">
                                            <p>Les conteneurs 10pieds sont seulement un peu plus grands que les conteneurs 8 pieds, 
                                                leur capacité de chargement est de 7000 kg. Le poids net est d'environ 870 kg</p>
                                            <p>dimensions extérieures: environ 3 x 2,44 x 2,59 m;
                                                dimensions intérieures: environ 2,80 x 2,33 x 2,37 m;
                                                hauteur de conduite: environ 2,33 x 2,28 m;
                                                Volume: environ 15 m³</p>
                                        </div>
                                    </div>
                                    <a href="/contact" class="btn_1 btn-sm my-2">Faire une demande</a>
                                </div>

                                <div class="single_deliveries">
                                    <img src="img/deliveries/20p3.jpg" alt="">
                                    <div class="single_deliveries_text">
                                        <h3>Conteneur standard 20 pieds</h3>
                                        <div class="single_deliveries_text_iner">
                                            <img src="img/deliveries_img.png" alt="">
                                            <p>Le conteneur standard de 20 pieds (fourgon),est l’un des plus connus des conteneurs standard à usage général (GP). 
                                            La capacité de chargement d'un standard 20 pied est d'environ 27 000 kg. 
                                            Le poids à vide est seulement d'environ 2 220 kg.</p>
                                            <p>Dimensions extérieures: environ 6,06 x 2,44 x 2,59 m ;
                                                dimensions intérieures: environ 5,85 x 2,33 x 2,37 m ; 
                                            hauteur libre: environ 2,33 x 2,28 m ;
                                            Volume: environ 33 m³</p>
                                        </div>
                                     </div>
                                     <a href="/contact" class="btn_1 btn-sm my-2">Faire une demande</a>
                                </div>

                                <div class="single_deliveries">
                                    <img src="img/deliveries/40p2.jfif" alt="">
                                    <div class="single_deliveries_text">
                                        <h3>Conteneur maritime 20 pieds</h3>
                                        <div class="single_deliveries_text_iner">
                                            <img src="img/deliveries_img.png" alt="">
                                            <p>Conteneur maritimes 40pieds: neuf ou utilisé en qualité A, B ou C. Nous offrons également des conteneurs 40 pieds
                                                dans la version grand cube et / ou palette large.</p>
                                            <p>Dimensions extérieures: environ 12,20 x 2,44 x 2,59 m;
                                                Dimensions intérieures: environ 11,95 x 2,33 x 2,37 m; 
                                                hauteur libre: environ 2,33 x 2,28 m;
                                                Volume: environ 66 m³</p>
                                        </div>
                                    </div>
                                    <a href="/contact" class="btn_1 btn-sm my-2">Faire une demande</a>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--::resent deliveries end::-->
        
    
        <!-- cta_part part start-->
        <section class="cta_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="cta_text">
                            <h2>Fast Delivery Containers</h2>
                            <p>Pratiquement tous les conteneurs peuvent être achetés et loués chez nous. Si nécessaire, 
                                nous les livrons sur site. Le transport par conteneur fait également partie de nos services. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta_part part end-->
    
        <!-- deliverie_process part start-->
        <section class="deliverie_process section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-sm-10">
                        <div class="section_tittle">
                            <h2>Conteneurs de bureau<br>
                                <span>Unités de conteneur</span>
                            </h2>
                            <p> Fast Delivery containers est votre adresse unique pour l'achat et la location de conteneurs maritimes. 
                                Nous offrons un service de conteneurs de A à Z et gardons tout sous notre propre gestion. 
                                De l'achat à la réparation et à la rénovation des conteneurs jusqu'à la livraison.</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <!-- deliverie_process part end-->
    
        <!--::regervation_part start::-->
        {{-- <section class="regervation_part section_padding">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-6">
                        <div class="regervation_part_iner">
                            <h2>Get A Quote</h2>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Email or phone" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Email or phone'">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="inputPassword5"
                                            placeholder="Dapurtare" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Dapurtare'">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="pnone" placeholder="Arrival"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Arrival'">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control" id="inputPassword6"
                                                placeholder="Cargo Description" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Cargo Description'">
                                        </div>
                                    </div>
                                    <div class="form-group time_icon col-md-12">
                                        <input type="text" class="form-control" id="inputPassword7"
                                            placeholder="Transportation Method" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Transportation Method'">
                                    </div>
                                </div>
                                <div class="regerv_btn">
                                    <a href="#" class="btn_1">GET A QUOTE</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="reservation_text">
                            <h2>Are You A Sender?</h2>
                            <p>abore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco
                                laboris nisi ut aliquip. Labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn_1">check now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--::regervation_part end::-->
    
        
       
      
@endsection