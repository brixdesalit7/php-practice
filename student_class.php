<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student {
        public $name;
        public $section;
        public $grade;
        
        function __construct($name, $section, $grade) {
            $this->name = $name;
            $this->section = $section;
            $this->grade = $grade;
        }
    }
    $students = [
        new Student('Bryxx', 'Emerald', '1'),
        new Student('Andre', 'Emerald', '2'),
        new Student('John', 'Emerald', '3'),
        new Student('Doe', 'Emerald', '4')
    ];

    echo $students[3]->name;
    echo '<br>';
    echo $students[3]->section;
    echo '<br>';
    echo $students[3]->grade;
    ?>
</body>
</html>