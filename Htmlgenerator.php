<?php
/*header css bootstrap*/
function sbt(){
    ?>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <?php
}
function endbt(){
    ?>
        <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <?php
}
/*table*/
function st($class="table table-bordered table-striped table-hover"){
    ?>
    <table class="<?=$class?>"><?php
}
array(

);
function thead($th=array("No","Nama")) {
    ?>
    <thead>
      <tr>
        <?php
        foreach ($th as $v) {
            echo "<th>".$v."</th>";
        }
        ?>
      </tr>
    </thead>
    <?php
}
function endt(){
    print "</table>";
}
/*button link*/
function abtn($link,$label,$class="btn btn-primary"){
    ?>
    <a class="<?=$class?>" href="<?=$link?>"><?=$label?></a>
    <?php
}
/*link*/
function a($link,$label,$follow="dofollow",$class="btn btn-primary"){
    ?>
    <a class="<?=$class?>" href="<?=$link?>" rel="<?=$follow?>"><?=$label?></a>
    <?php
}
/*button*/
function btn($type,$label,$class="btn btn-primary"){
    ?>
    <button type="<?=$type?>" class="<?=$class?>"><?=$label?></button>
    <?php
}
/*form input*/
function finput($name,$label,$class="form-control input-xlarge"){
    ?>
    <div class="control-group">
        <label class="control-label" for="<?=$name?>"><?=$label?></label>
        <div class="controls">
          <input type="text" class="<?=$class?>" id="<?=$name?>" name="<?=$name?>">
        </div>
    </div>
    <?php
}
/*form button*/
function fbtn($type,$label,$class="btn btn-primary"){
    ?>
    <div class="form-actions">
    <button type="<?=$type?>" class="<?=$class?>"><?=$label?></button>
    </div>
    <?php
}
/*form*/
function sform($type,$label,$class="btn btn-primary"){
    ?>
    <div class="form-actions">
    <button type="<?=$type?>" class="<?=$class?>"><?=$label?></button>
    </div>
    <form class="form-horizontal well">
    <?php
}
/*form search*/
function formsearch($label="Search",$action="",$method="post",$col="3"){
    ?>
    <form class="form-inline well" actiion="<?=$action?>" method="<?=$method?>">
        <div class="col-md-<?=$col?>">
          	<input type="text" class="form-control" placeholder="<?=$label?>" name="search">
        </div>
        <button type="submit" class="btn btn-default"><?=$label?></button>
    </form>
    <?php
}
/*form login inline*/
function formlogininline($label="Sign in",$action="",$method="post",$col="3"){
    ?>
    <form class="form-inline well" actiion="<?=$action?>" method="<?=$method?>", $token="">
    <input type="hidden" name="token" value="<?=$token?>">
        <div class="col-md-<?=$col?>">
          	<input type="text" class="form-control" placeholder="Email" name="username">
        </div>
        <div class="col-md-<?=$col?>">
        	<input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-default"><?=$label?></button>
    </form>
    <?php
}
/*form login*/
function formlogin($label="Sign in",$action="",$method="post",$token=""){
    ?>
    <form class="form-horizontal well" actiion="<?=$action?>" method="<?=$method?>">
    <input type="hidden" name="token" value="<?=$token?>">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="username">Username</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="username" name="username">
              <p class="text-danger " style="display:none">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="password" name="password">
              <p class="text-danger" style="display:none">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <!-- <label class="control-label" for="optionsCheckbox">Checkbox</label> -->
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1">
                Remember me
              </label>
            </div>
          </div>
         <br>
          <div class="form-actions pull-right">
            <button type="submit" class="btn btn-primary"><?=$label?></button>
          </div>
        </fieldset>
      </form>
    <?php
}

/*alert*/
function alert($type="success",$strong="Success!",$p="Indicates a successful or positive action."){
    ?>
    <div class="alert alert-<?=$type?>">
    <strong><?=$strong?></strong> <?=$p?>
    </div>
    <?php
}
/*panel*/
function panel($body="konten isi panel.",$type="default",$heading="",$footer=""){
    ?>
    <div class="panel panel-<?=$type?>">
    <?php
    if($heading !== ""){
        ?><div class="panel-heading"><?=$heading?></div><?php
    } ?>
    <div class="panel-body"><?=$body?></div>
    <?php
    if($footer !== ""){
        ?><div class="panel-footer"><?=$footer?></div><?php
    } ?>
    </div>
    <?php
}
/*gambar*/
function img($src,$type="responsive",$alt=""){
    if($alt == ""){
        $alt=$src;
    }
    ?>
    <img src="<?=$src?>" class="img-<?=$type?>" alt="<?=$src?>">
    <?php
}
/*seo head*/
function seo($title,$description,$follow="index, follow"){
    ?>
    <title><?=$title;?></title>
    <meta name="description" content="<?=$description;?>">
    <meta name="robots" content="<?=$follow;?>">
    <?php
}
