<?php namespace App\Models;
// use CodeIgniter\Database\ConnectionInterface as DatabaseConnectionInterface;
use CodeIgniter\Database\ConnectionInterface;

class CustomModel{
  protected $db;
  public function __construct(ConnectionInterface &$db){
    $this->db = & $db;
  }
  function all()
  {
    return $this->db->table('posts')->get()->getResult();
  }
  function where()
  {
     $this->db->table('posts')
                    ->where(['post_id >' => 1])
                    ->where(['post_id <' => 11])
                    ->where(['post_id !=' => 4])
                    ->orderBy('post_id', 'ACS')
                    ->get()
                    ->getRow();
  }
  function join()
  {
    $this->db->table('posts')
    ->where(['post_id >' ,1])
    ->where(['post_id <' ,11])
    ->join(['users', 'post.post_author' ])
    ->get()
    ->getRow();
  }
  function getPosts(){
    $builder = $this->db->table('posts');
    $builder -> join('users', 'posts.post_author = users.user_id');
    $posts  = $builder-> get()->getResult();
    return $posts;
  }

}
