<?= $this->extend('layouts/main')?>
<?= $this->section('content')?>
  <h1><?= $title ?></h1>
  <a href="/ci4/public/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
  <a href="/ci4/public/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">Edit</a>
<?= $this->endSection()?>
