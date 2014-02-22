
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
          <?php tre("[link: {actor}] and [link: {target}] are now friends", array(
              "link"=> '<a href="" style="font-weight:bold">{$0}</a>',
              "actor" => array("object" => array("name" => "John Smith", "gender" => "male"), "attribute" => "name"),
              "target" => array("object" => array("name" => "Jane Smith", "gender" => "female"), "attribute" => "name"),
          )) ?>
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
            <?php tre("[link: {actor}] added [link: {count|| photo}] of {target}", array(
                "link"=> '<a href="" style="font-weight:bold">{$0}</a>',
                "actor" => array("object" => array("name" => "John Smith", "gender" => "male"), "attribute" => "name"),
                "target" => array("object" => array("name" => "Jane Smith", "gender" => "female"), "attribute" => "name"),
                "count" => 6
            )) ?>
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
            <?php tre("[link: {actor}] commented on a photo uploaded by [link: {target}]", array(
                "link"=> '<a href="" style="font-weight:bold">{$0}</a>',
                "actor" => array("object" => array("name" => "John Smith", "gender" => "male"), "attribute" => "name"),
                "target" => array("object" => array("name" => "Jane Smith", "gender" => "female"), "attribute" => "name")
            )) ?>
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
            <?php tre("[link: {actor}] liked a comment from [link: {target}]", array(
                "link"=> '<a href="" style="font-weight:bold">{$0}</a>',
                "actor" => array("object" => array("name" => "John Smith", "gender" => "male"), "attribute" => "name"),
                "target" => array("object" => array("name" => "Jane Smith", "gender" => "female"), "attribute" => "name")
            )) ?>

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
        <strong><a href="#"><?php tre("{count || Upcoming Birthdays}", array("count" => 3)) ?></a></strong>
      </div>
      <div class="well friends">
        <h6><?php tre("Find Friends") ?></h6>
        <input class="form-control" placeholder="<?php trle("Enter an email address") ?>" />
      </div>
    </div>
  </div>

  <br><br><br><br><br>

</div> <!-- /container -->

<?php include('includes/footer.php') ?>

