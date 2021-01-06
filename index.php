<?php
//Array Practice

//Array Value
$os = [
    "Windows" => [
        7,
        8,
        8.1,
        10
    ],
    "Macintosh",
    "Ubuntu" => [
        7,
        8,
        8.1,
        10
    ],
    "Debian" => [
        7,
        8,
        8.1,
        10
    ],
    "Centos" => [
        7,
        8,
        8.1,
        10
    ],
    "Redhat" => [
        7,
        8,
        8.1,
        10
    ],
    "Yes",
    "Hmm" => [
        "Beans",
        "Garri"
    ]
];

// Saving in output 1
// $output = [];

// function looparray($data, &$new){ //Pointing a refrence to $ouput array
//         foreach ($data as $key => $value) {
//                 if(is_array($value)){
//                     looparray($value, $new);
//                     continue; //skip the current key and move to the next one
//                 }
//                 //else
//                 $new[] = $value;
//     }
// }

// looparray($os, $output);
// echo var_dump($output);

function looparray($data){ 
        static $output = [];
        foreach ($data as $key => $value) {
                if(is_array($value)){
                    looparray($value);
                    continue; //skip the current key and move to the next one
                }
                //else
                $output[] = $value;
            }
        return $output;
}

$output = looparray($os);
echo var_dump($output);
return;

//Other Practice
    echo "<pre>";
    print_r(["Adeleye Ayodeji", "Tunde Badmus", 1]);
    print_r(array("Adeleye Ayodeji", "Tunde Badmus", 1));
    //Object
    $object = (object)["name" => "Adeleye Adeleye", "friend" => "Tunde Badmus","age" => 23];
    print_r($object);
    //Stdclass
    $Stdclass = new Stdclass();
    $Stdclass->name = "Adeleye Adeleye";
    $Stdclass->friend = "Tunde Badmus";
    $Stdclass->age = 23;
    print_r($Stdclass);
    echo "</pre>";
    //Testing OOP
    class Testing {
        static public $job;
        //Not neccessary again
        public function __construct(string $var = null, int $age = null, string $job = null) {
            $this->var = $var;
            $this->age = $age;
            self::$job = $job;
            echo " <br><br>Construct method success <br>";
        }

        public function index($new = null)
        {
            $this->var = $new == null ? $this->var : $new;
            return "Hello ". $this->var." age is ".$this->age." and Job is ".self::$job. "<br>";
        }
        public function index1($new = null)
        {
            $this->var = $new == null ? $this->var : $new;
            return "Hello ". $this->var." age is ".$this->age." and Job is ".self::$job. "<br>";
        }
        public function index2($new = null)
        {
            $this->var = $new == null ? $this->var : $new;
            return "Hello ". $this->var." age is ".$this->age." and Job is ".self::$job. "<br>";
        }
        public function index3($new = null)
        {
            $this->var = $new == null ? $this->var : $new;
            return "Hello ". $this->var." age is ".$this->age." and Job is ".self::$job. "<br>";
        }

        public function __destruct()
        {
            echo " <br><br>Destruct method success";
        }
    }

    $test = new Testing("Adeleye Ayodeji", 23, "Coder");
    $test->var = "Tunde";
    $test::$job = "Programmer";
    echo $test->index();
    echo $test->index1();
    echo $test->index2();
    echo $test->index3();