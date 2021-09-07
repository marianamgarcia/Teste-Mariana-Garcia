<?php
/**
* Template Name: Landing Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>


<?php
$slide_titulo = get_post_meta( $post->ID, '_slide_titulo', true);
$slide_texto = get_post_meta( $post->ID, '_slide_texto', true);
$featured_img_url = get_the_post_thumbnail_url( $post->ID, 'full');
$facebook = get_post_meta( $post->ID, '_facebook', true );
$youtube = get_post_meta( $post->ID, '_youtube', true );
$instagram = get_post_meta( $post->ID, '_instagram', true );
?>

<?php
include "header.php";
?>


<section class="pd-50">
    <div class="container">
        <div class="row">
                <div class="banner" style="background-image: url('<?php echo $featured_img_url;?>');">
                    <div class="banner-txt box">
                        <img class="mt-mb-30" src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                        <h1 class="h1-big"><?php echo $slide_titulo; ?></h1>
                        <p class="mt-mb-30"><?php echo $slide_texto; ?></p>
                        <img class="mt-mb-15-40" src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#"><br>
                        <button class="btn btn-primary btn-slide mb-50">Meu Portfólio</button>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="pd-180" id="sobre">
    <div class="container">
        <div class="row">
            <div class= "col-sm-12 col-lg-5 box-15 mt40">
                <div class="pd-right">
                    <p class="fz-14-gray" >Mariana Garcia</p><a name="sobre"></a>
                    <h1>Olá, vou adorar desenvolver projetos web com você :)</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                    <p class="fz-15-gray">Sou uma desenvolvedora que adora programar e aprender novas tecnologias. Nessa página você vai poder me conhecer um pouco melhor e quem sabe possamos fazer alguma parceria!</p>
                </div>
            </div>

            <div class="col-sm-12 col-lg-7 resp-center">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 box pd-25">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/imagens/html.png" alt="">
                        <h2 class="mt-20">HTML5 & CSS3</h2>
                        <p>Possuo conhecimentos já aplicados em projetos que envolveram HTML5 e CSS3 em suas versões atuais.</p>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 box pd-25">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/performance.png" alt="">
                        <h2 class="mt-20">Performance</h2>
                        <p>Sempre faço implementações para que os sites fiquem otimizados tanto para SEO como para a experiência do usuário.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-12 box pd-25">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/responsividade.png" alt="">
                        <h2 class="mt-20">Reponsividade</h2>
                        <p>É fundamental para páginas da Internet que estejam preparadas para oferecer uma boa experiência no celular.</p>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 box pd-25">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/produtividade.png" alt="">
                        <h2 class="mt-20">Produtividade</h2>
                        <p>Por ser uma pessoa organizada eu tenho uma agilidade e comunicação muito boa com os prazos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pd-180" id="portfolio">
    <div class="container">
        <div class="row"><a name="portfolio"></a>
            <?php 
                $args = array(  
                    'post_type' => 'trabalhos',
                    'post_status' => 'publish',
                    'posts_per_page' => 6
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="col-md-4 col-sm-12 text-center margin-auto p-0" id="Serviços">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                  }
                ?>
                
            </div>
            <?php 
                endwhile;
            ?>
        </div>
    </div>
</section>



<section class="pd-180" id="opinioes">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 resp-right box-10 mt0">
                <p>
                    "Um navio no porto é seguro, mas não é para isso que os navios existem. Navegue para o mar e faça coisas novas."
                </p>
                <p>- Grace Hopper, pioneira em <br> programação de computadores</p>
            </div>

            <div class="col-lg-4 box mt50">
                <p class="fz-14-gray">SERVIÇOS</p><a name="servicos"></a>
                <h1>Estes são os meus <br> serviços</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                <p class="fz-14-black">
                    &bull; Desenvolvimento de websites com elementor e wordpress com temas prontos <br><br>
                    &bull; Desenvolvimento de temas do zero para wordpress <br><br>
                    &bull; Programação em PHP e JavaScript <br><br>
                    &bull; Construção de páginas em HTML e CSS <br><br>
                    &bull; Gestão de hospedagem em hosting compartilhado<br><br>
                </p>
                <button class="btn btn-primary">Entrar em contato</button>
            </div>

            <div class="col-4">
            </div>
            
        </div>
    </div>
</section>

<section class="pd-180" id="clientes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center margin-auto box-10 mt0">
                <p class="fz-14-gray">OPINIÕES</p><a name="opinioes"></a>
                <h1>O quê nossos clientes têm a dizer</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container" id="contato">
        <div class="row">
            <div class="col-lg-4 col-sm-12 text-center margin-auto box">
                <img class="mt-50" src="<?php echo get_template_directory_uri(); ?>/imagens/depoimento-1.png" alt="">
                <p class="mt-25">"Quando algo é importante o suficiente, você realiza, mesmo que as chances não estejam a seu favor.."</p>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                <p class="fz-14-black">Elon Musk, Tesla e SpaceX</p>
            </div>

            <div class="col-lg-4 col-sm-12 text-center margin-auto box">
                <img class="mt-50" src="<?php echo get_template_directory_uri(); ?>/imagens/depoimento-2.png" alt="">
                <p class="mt-25" >"Uma marca para uma empresa é o mesmo que uma reputação para uma pessoa. Você ganha reputação ao tentar fazer bem coisas difíceis."</p>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                <p class="fz-14-black">Jeff Bezos, Amazon Inc.</p>
            </div>

            <div class="col-lg-4 col-sm-12 text-center margin-auto box">
                <img class="mt-50" src="<?php echo get_template_directory_uri(); ?>/imagens/depoimento-3.png" alt="">
                <p class="mt-25">“Medir o progresso da programação por linhas de código é como medir o progresso da construção de aeronaves em termos de peso.”</p>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                <p class="fz-14-black">Bill Gates, Microsoft.</p>
            </div>
        </div>
    </div>
</section>

<section class="pd-180">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 box">
                <p class="fz-14-gray">CLIENTES</p><a name="clientes"></a>
                <h1>Empresas que <br> utilizam o meu <br> serviço.</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
                <p class="fz-15-gray">Já trabalhei com clientes de diversos segmentos para projetos web,<br>tanto na parte de planejamento e proposta de solução, como na parte<br> de manutenção e suporte.<br></p>
            </div>

            <div class="col-lg-6 col-sm-12 resp-center">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 mt50">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-1.png" alt="#">
                    </div>
                
                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-2.png" alt="#">
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-3.png" alt="#">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-4.png" alt="#">
                    </div>
                
                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-5.png" alt="#">
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-6.png" alt="#">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-7.png" alt="#">
                    </div>
                
                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-8.png" alt="#">
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/empresa-9.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col text-center margin-auto box-10">
                <p class="fz-14-gray">CONTATO</p><a name="contato"></a>
                <h1>Entre em contato, vamos tomar um café juntos.</h1>
                <img class="mb-50" src="<?php echo get_template_directory_uri(); ?>/imagens/divisor.png" alt="#">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 box-10">
            <form class="formulario">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">E-mail:</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Assunto:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mensagem:</label>
                    <textarea class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
            
            </div>
            
            <div class="col-lg-8 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117032.81722316821!2d-46.80209884653597!3d-23.55854550507708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59d8e4fd9401%3A0xc1ffff5b8db1f32c!2sUnidade%20Av.%20Brasil%20Hospital%20Israelita%20Albert%20Einstein!5e0!3m2!1spt-BR!2sbr!4v1630788129038!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
        
    </div>
</section>


<?php include "footer.php";



