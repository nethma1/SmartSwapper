<div class="row" style="margin-top: 20px;">
		<div class="col-md-3 col-sm-6 col-xs-12">
			 <div class="panel panel-default">
			    <div class="panel-heading"><b>FILTER LISTINGS</b></div>
			    <div class="panel-body">
			    	<form>
					  <div class="form-group">
					    <label for="filterByType1">Filter By</label>
					    <input type="text" class="form-control" id="filterByType1">
					  </div>
					  <div class="form-group">
					    <label for="filterByType2">Filter By</label>
					    <input type="text" class="form-control" id="filterByType2">
					  </div>
					  
					  <button type="submit" class="btn btn-primary col-md-12">Search</button>
					</form>
			    </div>
			 </div>
		</div>
		<div class="col-md-9 col-sm-6 col-xs-12">
			<div class="panel panel-default">
			    <div class="panel-heading"><b>Auction Notices</b></div>
			    <div class="panel-body">

			    	<h2><?=$title?></h2>
					<?php foreach ($event_gallery as $post) : ?>
						
						<div class="blog-content">
						<h3><?php echo $post['title']; ?></h3>
						<div class="row" id="notice">
							<div class="col-md-3 col-sm-3 col-xs-12">
								<img class="post-thumb img-thumbnail" src="<?php echo site_url();?>assets/images/<?php echo $post['post_image'];?>">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<small class="post_date">Posted on: <?php echo $post['created_time']; ?></small><br><br>
								<?php echo word_limiter($post['body'],100); ?>
								<br><br>  
								<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
							</div>
						</div>	
						</div>

					<?php endforeach; ?>

			    </div>
			 </div>
		</div>
	</div>
</div>
</div>