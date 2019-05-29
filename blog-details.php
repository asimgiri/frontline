<?php include 'includes/header.php'; ?>


<!-- Start Page Head -->
<section class="page-head">
 <div class="overlay"></div>
 <div class="container">
     <div class="row">
         <div class="col-md-12 text-center">
             <ul class="breadcrumb">
							 <li><a href="index.php">Home</a><span>/</span></li>
							 <li><a href="blog.php">Blog</a><span>/</span></li>
               <li class="active">Blog Details</li>
             </ul>
         </div>
     </div>
 </div>
</section>
<!-- End Page Head -->

<!-- Start Single Blog Page Section -->
<section class="single-blog blogs bg-white">
		<div class="container">
			<div class="row">
				<!-- Start Single Blog -->
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="blog-box">
								<div class="blog-img">
									<img src="images/blog/blog-single-bg.jpg" class="img-fluid" alt="">
								</div>
								<div class="blog-details">
									<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </h3>
									<ul class="list-inline meta">
										<li>
											<a href="#"><i class="fa fa-user"></i>  John Doe
											</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-calendar"></i> 1 Jun 2018
											</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-comment-o"></i> 25 comments
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-eye"> </i> 37 Views
											</a>
										</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sint optio commodi eius qui tempora, rerum repellendus
										ut. Natus, assumenda accusamus dignissimos debitis possimus facere excepturi officia? Quam, possimus, laborum.
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi officiis minima, neque. Ipsa eveniet rerum reiciendis
										nobis quisquam nesciunt non, fuga id accusantium unde laudantium numquam repellendus modi minima explicabo! Lorem
										ipsum dolor sit amet, consectetur adipisicing elit. Amet repellendus sint accusantium eos nobis rem? Temporibus
										cum aperiam repellat optio, corporis adipisci ea! Numquam labore laudantium consectetur in cumque voluptatibus!
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo odio modi itaque, eius recusandae corporis, esse
										in facilis? A harum quaerat ducimus laborum est aliquid odit eum, unde nam velit.</p>
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempora expedita voluptate sapiente accusamus
											tenetur qui, labore, omnis, quisquam similique sequi! Impedit dolores fuga aspernatur culpa tempore commodi voluptatem
											porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis eveniet reprehenderit nobis culpa!
										Animi perspiciatis dolor, nobis explicabo quibusdam soluta. Optio pariatur, ab rerum exercitationem repellat cum,
										laudantium sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit obcaecati magnam quaerat nihil
										aperiam beatae, accusamus, porro dolorum animi aliquid blanditiis itaque quidem et illum, soluta atque non nobis
										alias.</p>
								</div>
								<div class="comments-container">
									<h3>Comments</h3>
									<ul class="list-unstyled comments-list">
										<li>
											<div class="avatar">
												<img src="images/blog/avatar-04.jpg" class="img-fluid" alt="">
											</div>
											<div class="comment">
												<h4>John Doe
													<span>8 July 2017 at 5:02 am</span>
												</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci
													nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
											</div>
										</li>
										<li>
											<div class="avatar">
												<img src="images/blog/avatar-02.jpg" class="img-fluid" alt="">
											</div>
											<div class="comment">
												<h4>John Doe
													<span>8 July 2017 at 5:02 am</span>
												</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci
													nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
											</div>
											<ul class="list-unstyled comments-list chiled">
												<li>
													<div class="avatar">
														<img src="images/blog/avatar-03.jpg" class="img-fluid" alt="">
													</div>
													<div class="comment">
														<h4>John Doe
															<span>8 July 2017 at 5:02 am</span>
														</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci
															nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="avatar">
												<img src="images/blog/avatar-04.jpg" class="img-fluid" alt="">
											</div>
											<div class="comment">
												<h4>John Doe
													<span>8 July 2017 at 5:02 am</span>
												</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci
													nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="comments-form">
									<h3>Leave Your Comments</h3>
									<form method='post'>
										<input type='hidden' name='form-name' value='form 1' />
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<input class="form-control" type="text" id="yourname" placeholder="Enter Your Name" required>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<input type="email" class="form-control" id="youremail" placeholder="Enter Your Email" required>
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" id="yourmessage" rows="6" placeholder="Enter Your Comment" required></textarea>
										</div>

										<button type="submit" class="btn btn-default center-block">Post Comment</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Blog -->
				<!-- Start Sidebar -->
				<div class="col-md-4">
					<div class="sidebar">
						<form action='#' method='post'>
							<input type='hidden' name='form-name' value='form 2' />
							<div class="search-form">
								<input class="form-control" type="text" placeholder="Type to Search">
								<button class="btn btn-default" type="submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</form>
						<div class="categories-widget sidebar-widget">
							<h4>Categories</h4>
							<div class="accordion" id="accordionExample">
								<div class="card">
									<div class="card-header" id="headingOne">
										<h2 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<p>Travel</p>
											</button>
										</h2>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">

											<ul class="sub categori">
												<li><a href="#">Uncategorized</a></li>
												<li><a href="#">Design</a></li>
												<li><a href="#">Software</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h2 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<p>Lifestyle</p>
											</button>
										</h2>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">

											<ul class="sub categori">
												<li><a href="#">Uncategorized</a></li>
												<li><a href="#">Design</a></li>
												<li><a href="#">Software</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<h2 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<p>Design</p>
											</button>
										</h2>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											<ul class="sub categori">
												<li><a href="#">Uncategorized</a></li>
												<li><a href="#">Design</a></li>
												<li><a href="#">Software</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="recent-posts-widget sidebar-widget">
							<h4>Recent Post</h4>
							<ul class="list-unstyled">
								<li>
									<div class="recent-post-img">
										<a href="#">
											<img src="images/blog/side1.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="recent-post-description">
										<h3>
												<a href="#">Lorem ipsum dolor sit amet consectetur. adipisicing elit Inventore itaque.</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="recent-post-img">
										<a href="#">
											<img src="images/blog/side2.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="recent-post-description">
										<h3>
												<a href="#">Lorem ipsum dolor sit amet consectetur. adipisicing elit Inventore itaque.</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="recent-post-img">
										<a href="#">
											<img src="images/blog/side3.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="recent-post-description">
										<h3>
												<a href="#">Lorem ipsum dolor sit amet consectetur. adipisicing elit Inventore itaque.</a>
										</h3>
									</div>
								</li>
								<li>
									<div class="recent-post-img">
										<a href="#">
											<img src="images/blog/side4.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="recent-post-description">
										<h3>
											<a href="#">Lorem ipsum dolor sit amet consectetur. adipisicing elit Inventore itaque.</a>
										</h3>
									</div>
								</li>
							</ul>
						</div>
						<div class="archives-widget sidebar-widget">
							<h4>Archives</h4>
							<ul class="list-unstyled">
								<li>
									<a href="#">July 2018</a>
								</li>
								<li>
									<a href="#">Dec 2018</a>
								</li>
							</ul>
						</div>
						<div class="tags-widget sidebar-widget">
							<h4>Tags</h4>
							<ul class="list-unstyled">
								<li>
									<a href="#">Travel</a>
								</li>
								<li>
									<a href="#">Lifestyle</a>
								</li>
								<li>
									<a href="#">Uncategorized</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
								<li>
									<a href="#">Software</a>
								</li>
							</ul>
						</div>
						<div class="meta-widget sidebar-widget">
							<h4>Meta</h4>
							<ul class="list-unstyled">
								<li>
									<a href="#">Log In</a>
								</li>
								<li>
									<a href="#">Entries RSS</a>
								</li>
								<li>
									<a href="#">Comments RSS</a>
								</li>
								<li>
									<a href="#">WordPress.Org</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Sidebar -->
			</div>
		</div>
	</section>
<!-- end blog section -->

<?php include 'includes/footer.php'; ?>
