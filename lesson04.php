<?php
// 基本クラス Person（人物）
class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "こんにちは、私は{$this->name}、{$this->age}歳です。<br>";
    }
}

// Teacher クラス（教師） - Personを継承
class Teacher extends Person {
    private $subject;

    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function introduce() {
        echo "私は{$this->name}です、{$this->subject}を教えています。<br>";
    }
}

// Student クラス（学生） - Personを継承
class Student extends Person {
    private $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function introduce() {
        echo "私は{$this->name}です、学生IDは{$this->studentId}です。<br>";
    }
}

// テストコード
$teacher = new Teacher("山田先生", 40, "数学");
$student = new Student("田中太郎", 18, "S123456");

$teacher->introduce();  // -> 私は山田先生です、数学を教えています。
$student->introduce();  // -> 私は田中太郎です、学生IDはS123456です。
?>

