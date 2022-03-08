<?php



class Member
{
  public $name;
  public $age;
  public $address;

  /**
   * 初期値の追加
   */
  public function __construct($name,$age,$address)
{
  $this->name = $name;
  $this->age = $age;
  $this->address = $address;
  
}

  // セッター：代入メソッド
  public function setName($n)
  {
    $this->name = $n;
  }
  // ゲッター：参照メソッド
  public function getName()
  {
    return $this->name;
  }
  // セッター：代入メソッド
  public function setAge($n)
  {
    $this->age = $n;
  }
  // ゲッター：参照メソッド
  public function getAge()
  {
    return $this->age;
  }
  // セッター：代入メソッド
  public function setAddress($n)
  {
    $this->address = $n;
  }
  // ゲッター：参照メソッド
  public function getAddress()
  {
    return $this->address;
  }

  // 実体化された時の各プロパティにアクセスして値を参照
  public function showInfo()
  {
    echo '<ul>';
    echo '<li>名前：' . $this->name . '</li>';
    echo '<li>年齢：' . $this->age . '</li>';
    echo '<li>住所：' . $this->address . '</li>';
    echo '</ul>';
  }
};



// $m3 = new Member();
// $m3->setName('kazu');
// $m3->setAge('32');
// $m3->setAddress('kanagawa');
// $m3->showInfo();
(new Member('kazu','32','kanagawa'))->showInfo();
