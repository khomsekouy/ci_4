
<?= $this->extend('layouts/main')?>
<?= $this->section('content')?>

<h1><?=$title?></h1>
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2">
      <form method="post">
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="post_title" class="form-control" value="<?= $post['post_title']?>">
          </div>
          <div class="form-group">
            <label for="">Content</label>
            <textarea id="post_content" class="form-control" name="post_content" rows="3" cols="80"><?= $post['post_content']?></textarea>
          </div>
          <div class="form-group">
            <button type="" name="" class="btn btn-success btn-sm">Update</button>
          </div>
      </form>
    </div>
  </div>
<?= $this->endSection()?>
