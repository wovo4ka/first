<?php

abstract class Document
{
    abstract protected function setRegisterDate($date);
    abstract protected function setOwnerName($name);
    abstract protected function save();
}

class Passport extends Document
{
    protected function setDocumentNumber($number) {
        return "ConcreteClass1";
    }


    public function setRegisterDate($date) {
        print $this->getValue() . "\n";
    }


    public function setOwnerName($name) {
        print $this->getValue() . "\n";
    }


    public function save() {
        print $this->getValue() . "\n";
    }
}

class ForeignPassport extends Passport
{
    protected function addVizaData($data) {
        return "Дата добавлена";
    }
}

class User
{
    public function setName($name) {
        return $name;
    }

    public function setBirthDate($date) {
        return $date;
    }

    public function addDocument($document) {
        return $document;
    }

    public function save() {
        return "Сохранено!";
    }
}




/*

	$class1 = new ConcreteClass1;
	$class1->printOut();
	echo $class1->prefixValue('FOO_') ."\n";

	$class2 = new ConcreteClass2;
	$class2->printOut();
	echo $class2->prefixValue('FOO_') ."\n";

*/

$user = new User;
echo $user->setName('rfr45fddd1');
?>