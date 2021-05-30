<?php namespace App\Models;

use CodeIgniter\Model;
class BlogModel extends Model
{

  protected $table = 'posts';
  protected $primaryKey = 'post_id';

  // protected $returnType = 'array';
  // protected $userSoftDeletes = true;

  protected $allowedFields = ['post_title','post_content'];

  protected $useTimestamps = true;
  protected $createdField = 'post_created_at';
  protected $updatedField = 'post_updated_at ';
  // protected $deletedField = 'delete_at';

  // protected $validationRules = [];
  // protected $validationMessages = [];
  // protected $skipValidation = false;
  protected $beforeInsert = ['checkName'];
  public function checkName(array $data)
  {
    $newTitle = $data['data']['post_title'].'Extra Features';
    $data['data']['post_title'] = $newTitle;
    return $data;
  }
  // public function hashPassword(array $data)
  // {
  //   $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
  //   return $data;
  // }
}
