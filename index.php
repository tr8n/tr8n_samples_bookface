
<?php include('includes/header.php') ?>

<?php include('includes/nav.php') ?>

<div class="container">


  <div class="row">
    <div class="col-sm-2">
      <ul class="nav nav-sidebar">
        <li class="nav-header"><?php tre("Favorites") ?></li>
        <li><a href="#"><?php tre("Newsfeed") ?></a></li>
        <li><a href="#"><?php tre("Messages") ?></a></li>
        <li><a href="#"><?php tre("Photos") ?></a></li>
        <li><a href="#"><?php tre("Events") ?></a></li>
        <li class="nav-header"><?php tre("Friends") ?></li>
        <li><a href="#"><?php tre("Close Friends") ?></a></li>
        <li><a href="#"><?php tre("Family") ?></a></li>
        <li><a href="#"><?php tre("Coworkers") ?></a></li>
      </ul>
    </div>
    <div class="col-sm-7">

      <form >
        <div class="form-group">
          <label><strong><?php tre("Update Status") ?></strong></label>
          <input type="email" class="form-control" placeholder="What's on your mind">
        </div>
      </form>
      <hr>

      <div class="media">
        <a class="pull-left" href="#">
          <div class="media-object media-img"></div>
        </a>
        <div class="media-body">
          <div><small class="text-muted">January 1, 2014</small></div>
          <a href="#"><strong>John Smith</strong></a> and <a href="#"><strong>Jane Smith</strong></a> are now friends.
          <div class="media-actions">
            <a href="#"><strong><?php tre("Like") ?></strong></a> |
            <a href="#"><strong><?php tre("Comment") ?></strong></a>
          </div>
          <div class="media">
            <div class="media-body media-reply">
              <input type="text" class="form-control" placeholder="Write a reply">
              <small><?php tre("Press enter to post") ?></small>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <a class="pull-left" href="#">
          <div class="media-object media-img"></div>
        </a>
        <div class="media-body">
          <div><small class="text-muted">January 1, 2014</small></div>
          <a href="#"><strong>John Smith</strong></a> added 6 photos of Jane Smith
          <div class="media-actions">
            <a href="#"><strong><?php tre("Like") ?></strong></a> |
            <a href="#"><strong><?php tre("Comment") ?></strong></a>
          </div>
          <div class="media">
            <div class="media-body media-reply">
              <input type="text" class="form-control" placeholder="Write a reply">
              <small><?php tre("Press enter to post") ?></small>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <a class="pull-left" href="#">
          <div class="media-object media-img"></div>
        </a>
        <div class="media-body">
          <div><small class="text-muted">January 1, 2014</small></div>
          <a href="#"><strong>Jane Smith</strong></a> commented on a photo uploaded by <a href="#"><strong>John Smith</strong></a>
          <div class="media-actions">
            <a href="#"><strong><?php tre("Like") ?></strong></a> |
            <a href="#"><strong><?php tre("Comment") ?></strong></a>
          </div>
          <div class="media">
            <div class="media-body media-reply">
              <input type="text" class="form-control" placeholder="Write a reply">
              <small><?php tre("Press enter to post") ?></small>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <a class="pull-left" href="#">
          <div class="media-object media-img"></div>
        </a>
        <div class="media-body">
          <div><small class="text-muted">January 1, 2014</small></div>
          <a href="#"><strong>John Smith</strong></a> liked a comment from <a href="#"><strong>Jane Smith</strong></a>
          <div class="media-actions">
            <a href="#"><strong><?php tre("Like") ?></strong></a> |
            <a href="#"><strong><?php tre("Comment") ?></strong></a>
          </div>
          <div class="media">
            <div class="media-body media-reply">
              <input type="text" class="form-control" placeholder="Write a reply">
              <small><?php tre("Press enter to post") ?></small>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div class="col-sm-3">
      <br>
      <div>
        <strong><a href="#"><?php tre("3 Upcoming Birthdays") ?></a></strong>
      </div>
      <div class="well friends">
        <h6><?php tre("Find Friends") ?></h6>
        <input class="form-control" placeholder="Enter an email address" />
      </div>
    </div>
  </div>

  <br><br><br><br><br>




</div> <!-- /container -->

<?php include('includes/footer.php') ?>

