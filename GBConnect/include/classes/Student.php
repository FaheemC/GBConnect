<?php

/**
 * Created by PhpStorm.
 * User: Maziar
 * Date: 11/20/2016
 * Time: 11:55 PM
 */
class Student extends mysqli
{
    private $id = 0;
    private $name ;
    private $studen_id;
    private $active;

    public function __construct($id=0,$name='',$student_id=0,$active=false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->studen_id = $student_id;
        $this->active = $active;
        parent::mysqli('localhost','root','','schoolDb');
    }

    public function __set($name, $value)
    {
        if(isset($this->$name))
            $this->$name = $value;

    }

    public function __get($name)
    {
        if(isset($this->$name))
            return $this->$name;
    }

    public function findById($id)
    {
        $result = $this->query('select * from students where id = ' . $id);
        list($this->id, $this->name,$this->age,$this->active) = $result->fetch_array();
    }

    public function save(){
        if($this->id) {
            $stmt = $this->prepare('update students set name=? , student_id =? , active = ? where id = ?');
            $stmt->bind_param('sddd', $this->name, $this->student_id, $this->active, $this->id);
        }
        else {
            $stmt = $this->prepare('insert into students values(null,?,?,?)');
            var_dump($this->toString());
            $stmt->bind_param('sdd',$this->name,$this->studen_id,$this->active);

        }
        $stmt->execute();
        printf("Error: %s.\n", $stmt->error);
    }

    public function delete(){
        $query = 'DELETE FROM students where id = ?';
        $stmt = $this->prepare($query);
        $stmt->bind_param('d',$this->id);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    public function toString(){
        return $this->id . ', ' . $this->name . ', ' . $this->studen_id . ', ' . $this->active
;    }
}

/*
$s = new Student('new maziar',14,true);
$s->age = 10;
$s->save();
echo $s->age;
var_dump($s);

$a = new Student();
$a->findById(5);
$a->age=100;
$a->save();
var_dump($a);
*/
