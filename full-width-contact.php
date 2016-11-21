<?php
/*
Template name: Full-Width-Contact-THIG
*/
?>

<?php get_header(); ?>

<!-- Begin Section Container -->


<?php if (have_posts()) :
	while (have_posts()) : the_post();
	if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
	<?php } ?>
		<?php
	endwhile;
endif; ?>

            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post(); ?>


    </div>

    <div class="fullwidth-content">
		<h1 class="contact-heading"><?php the_title(); ?></h1>
        <?php the_content();
            }
        } ?>
        <!-- End Loop -->
    </div>

	<div class="container">
		<section class="mini-contact-info col-md-7">
			<h2 class="visuallyhidden">Contact Information and Summary</h2>
			<div class="mini-contact-info-left col-xs-6">
				<p>
					Tower Hill Insurance Group
				</p>
				<p>
					Post Office Box 147018
				</p>
				<p>
					Gainesville, FL 32614-7018
				</p>
			</div>

			<div class="mini-contact-info-right col-xs-6">
				<p>
					<a href="tel:8003423407">800.342.3407</a> Customer Service & Claims
				</p>
				<p>
					<a href="tel:3523328800">352.332.8800</a> Phone
				</p>
				<p>
					352.332.9999 Fax
				</p>
			</div>

			<div class="mini-border">

			</div>

			<div class="main-contact-content">
				<p>
					Do you have a question that you can’t find an answer to on our website? Perhaps you want to submit feedback to us on your experience with our site or service. Please use our form below to submit your comments to Tower Hill.
				</p>
				<p>
					Your questions and feedback are important to us. Please let us know how we can serve you better.
				</p>
				<p>
					Please DO NOT report an insurance claim through the form below. Instead, call Tower Hill Claims Services at <a href="tel:8003423407">800.342.3407</a> or <a href="https://insuredlogin.thig.com/login">file a claim online</a>.
				</p>
				<p>
					For billing and payment assistance, please call our Customer Service Center at <a href="tel:8003423407">800.342.3407</a>. For coverage questions or to make a change to your policy, please call your insurance agent listed on the top center of your policy’s Declarations Page.
				</p>
				<p>
					For payment information on your flood insurance policy, please call <a href="tel:8778266920">877.826.6920</a>. Any flood-related questions, endorsement requests or claims reports should be directed to your insurance agent.
				</p>
				<p>
					To report suspected insurance fraud directly to Tower Hill Insurance Group, please call <a href="tel:8662656590">866.265.6590</a>. You may also contact the Florida Department of Financial Services (FLDFS) Consumer Helpline at <a href="tel:8003422762">800.342.2762</a> or visit the <a href="http://www.myfloridacfo.com/Division/DIFS/" target="_blank">FLDFS Division of Insurance Fraud</a> to file a fraud report on-line.
				</p>
			</div>

		</section>

		<section class="col-md-5">
			<h2 class="visuallyhidden">Contact Form</h2>
			<?php  if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }?>
		</section>

		<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.941083223021!2d-82.42211468451224!3d29.663483982022587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e8bc9d40f8da39%3A0x162daaa5e2fbc185!2sTower+Hill+Insurance+Group!5e0!3m2!1sen!2sus!4v1477666732891" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>

<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
