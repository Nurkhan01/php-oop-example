<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/model/User.php';

class UserController
{
  public function getUsers()
  {
    $user = new User();
    echo '<pre>';
    print_r($user->getUsers());
    echo '</pre>';
  }

  public function getUserById($id)
  {
    echo '<pre>';
    print_r(User::getUserById($id));
    echo '</pre>';
  }

  public function addUser()
  {
    $user = new User('Ergeshov', 'Bekzat', 'ergeshov.b');
    echo '<pre>';
    print_r($user->addUser());
    echo '</pre>';
  }

  public function getUserIds()
  {
    $user = new User();
    $user->getUserIds();
  }

  public function getFullUserData()
  {
    $user = new User();
    echo '<pre>';
    print_r($user->getUserDataWithAvatar());
    echo '</pre>';
  }

  public function getTypesOfAvatar(){
    $user = new User();
    echo '<pre>';
    print_r($user->typesOfAvatar());
    echo '</pre>';
  }
}

$userController = new UserController();
$userController->addUser();
$userController->getUsers();
$userController->getUserById(1);
$userController->getFullUserData();
$userController->getTypesOfAvatar();