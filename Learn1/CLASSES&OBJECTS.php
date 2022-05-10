<?php
# public
class Vegetable {
  // Properties
  var $name;

  // Methods
  public function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
}
$tomato = new Vegetable();
$tomato->set_name('Tomato');
echo $tomato->get_name();
echo "<br>";

# protected
class Person
{
    var $name;
    protected function set_name($data)
    {
        $this->name=$data;
    }
    function get_name()
    {
        return $this->name;
    }

}
class Friend extends Person
{
    var $msg;
    function set_msg($msg){
        $this->msg=$msg;
    }
    function spk()
    {
        echo $this->msg;
    }
    function set_name_public($name)
    {
        $this->set_name($name);
    }
}
$tony=new Friend();
$tony->set_name_public("Tony");
$tony->set_msg("Hai Buddy");
echo $tony->get_name();
echo "<br>";
echo $tony->spk();


?>