
<?= $this->extend('layouts/main')?>
<?= $this->section('content')?>

<h1><?=$title?></h1>
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2">
      <form class="ci4/public/blog/new" method="post">
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="post_title" value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Content</label>
            <textarea id="post_content" class="form-control" name="post_content" rows="3" cols="80"></textarea>
          </div>
          <div class="form-group">
            <button type="" name="" class="btn btn-success btn-sm">Creat</button>
          </div>
      </form>
    </div>
  </div>
<?= $this->endSection()?>
