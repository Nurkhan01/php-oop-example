<?php
include_once 'Avatar.php';
require_once __ROOT__ . '/common/Message.php.php';
class User extends Avatar implements Message
{
  private $id;
  private $last_name;
  private $first_name;
  private $user_name;

  public $userArray = [
    ['id' => 1, 'last_name' => 'Zhaksylyk', 'first_name' => 'Nurkhan', 'username' => 'zhaksylyk.n'],
    ['id' => 2, 'last_name' => 'Zhidebay', 'first_name' => 'Islambek', 'username' => 'zhidebay.i']
  ];

  public function __construct()
  {
    $get_arguments = func_get_args();
    $number_of_arguments = func_num_args();

    if (method_exists($this, $method_name = '__construct' . $number_of_arguments)) {
      call_user_func_array(array($this, $method_name), $get_arguments);
    }
  }

  public function __construct0()
  {
  }

  public function __construct3($last_name, $first_name, $user_name)
  {
    $this->id = 3;
    $this->last_name = $last_name;
    $this->first_name = $first_name;
    $this->user_name = $user_name;
  }

  public function getUserIds()
  {
    $ids = [];
    foreach ($this->userArray as $user){
      array_push($ids, $user['id']);
    }
  }

  public function getUsers()
  {
    return $this->userArray;
  }

  public static function getUserById($id)
  {
    return ['id' => 1, 'last_name' => 'Zhaksylyk', 'first_name' => 'Nurkhan', 'username' => 'zhaksylyk.n'];
  }

  public function addUser()
  {
    array_push($this->userArray, ['id' => 3, 'last_name' => $this->last_name, 'first_name' => $this->first_name, 'username' => $this->user_name]);
    return $this->userArray;
  }

  public function getUserDataWithAvatar(){
    $newUserArray = [];
    foreach ($this->userArray as $user){
      array_push($newUserArray, [
        'id' => $user['id'], 'last_name' => $user['last_name'], 'first_name' => $user['first_name'], 'username' => $user['username'], 'avatar' => $this->getAvatarData()
      ]);
    }
    return $newUserArray;
  }

//  public function typesOfAvatar()
//  {
//    $ourTypes = ['cartoon', 'game'];
//    return $ourTypes;
//  }
  function send($message)
  {
    // TODO: Implement send() method.
    return 'email successfully send';
  }
}