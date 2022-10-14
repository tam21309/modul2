<?php
class Dancer {
    public $name;
    public $gender;
    public function __construct($name, $gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}
$maleQueue = new SplQueue();
$maleQueue->enqueue(new Dancer('B.thang', 'male') );
$maleQueue->enqueue(new Dancer('H.nhan', 'male') );
$maleQueue->enqueue(new Dancer('X.thang', 'male') );
$maleQueue->enqueue(new Dancer('P.tam', 'male') );

$femaleQueue = new SplQueue();
$femaleQueue->enqueue(new Dancer('T.tam', 'female'));
$femaleQueue->enqueue(new Dancer('N.anh', 'female'));
$femaleQueue->enqueue(new Dancer('P.thao', 'female'));
$femaleQueue->enqueue(new Dancer('H.tham', 'female'));

$maleQueue->rewind();
$femaleQueue->rewind();

$pairs = [];
$female_waiting = [];
$male_waiting = [];
while( $maleQueue->valid() || $femaleQueue->valid()){
    if( $maleQueue->valid() && $femaleQueue->valid()){
        $pairs[] = [
            'male' => $maleQueue->current(),
            'female' => $femaleQueue->current(),
        ];
        $maleQueue->next();
        $femaleQueue->next();
    }else if(!$femaleQueue->valid()){
        $female_waiting[] = $femaleQueue->current();
        $femaleQueue->next();
    }else if(!$maleQueue->valid()){
        $male_waiting[] = $maleQueue->current();
        $maleQueue->next();
    }
}

echo '<pre>';
print_r($pairs);
print_r($female_waiting);
print_r($male_waiting);
die();