<?php
require_once "admin/config/connect.php";
require_once "admin/functions/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>TA Tech Blog</title>

	<!-- Meta -->
	<meta name="description" content="Blog Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">

	<?php
	require_once('includes/head.php');
	?>
</head>


<body>

	<header class="header text-center">
		<?php
		require_once('includes/sideprofilebar.php')
		?>
	</header>

	<div class="main-wrapper">

		<article class="blog-post px-3 py-5 p-md-5">
			<div class="container">
				<header class="blog-post-header">
					<h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
					<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
				</header>

				<!-- blog post -->
				<div class="blog-post-body">
					<figure class="blog-banner">
						<a href="https://made4dev.com"><img class="img-fluid" src="assets/images/blog/blog-post-banner.jpg" alt="image"></a>
						<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
					</figure>
<?php 
loadBlogPost($_GET['id']);
?>
				</div>
				<!-- blogpost end -->

				<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.php">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>

				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
						/**
						 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
						 *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
						 *  PLATFORM OR CMS.
						 *  
						 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
						 *  https://disqus.com/admin/universalcode/#configuration-variables
						 */
						/*
						var disqus_config = function () {
						    // Replace PAGE_URL with your page's canonical URL variable
						    this.page.url = PAGE_URL;  
						    
						    // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						    this.page.identifier = PAGE_IDENTIFIER; 
						};
						*/

						(function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
							var d = document,
								s = d.createElement('script');

							// IMPORTANT: Replace 3wmthemes with your forum shortname!
							s.src = 'https://3wmthemes.disqus.com/embed.js';

							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>
						Please enable JavaScript to view the
						<a href="https://disqus.com/?ref_noscript" rel="nofollow">
							comments powered by Disqus.
						</a>
					</noscript>
				</div>
				<!--//blog-comments-section-->

			</div>
			<!--//container-->
		</article>

		<section class="promo-section theme-bg-light py-5 text-center">
			<div class="container">
				<h2 class="title">Promo Section Heading</h2>
				<p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
				<figure class="promo-figure">
					<a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a>
				</figure>
			</div>
			<!--//container-->
		</section>
		<!--//promo-section-->

		<footer class="footer text-center py-2 theme-bg-dark">
			<?php
			require_once('includes/footer.php');
			?>
		</footer>

	</div>
	<!--//main-wrapper-->


	<!-- Javascript -->
	<?php
	require_once('includes/js.php');
	?>
	<!-- Page Specific JS -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/blog.js"></script>

	<?php
	//require_once('includes/styleswitch.php')
	?>

</body>

</html>