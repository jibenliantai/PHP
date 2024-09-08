<?php
    class Company {
        protected $companyName;
        protected $address;
        protected $phone;

        public function __construct($companyName, $address, $phone) {
            $this->companyName = $companyName;
            $this->address = $address;
            $this->phone = $phone;
        }

        public function displayCompany(){
            echo '会社名：'.$this ->companyName."\n";
            echo '住所：'.$this ->address."\n";
            echo '電話番号：'.$this ->phone."\n";
        }
    }
    class Department extends Company {
        private $departmentName;
        private $name;

        public function __construct($companyName, $address, $phone,$departmentName, $name) {
            parent::__construct($companyName, $address, $phone);
            $this->departmentName = $departmentName;
            $this->name = $name;
        }

        public function displayDepartment(){
            echo '部署名：'.$this->departmentName."\n";
            echo '部長：'.$this->name."\n";
        }
    }
    $departments = array(
        new Department('サンプルA','市ヶ谷','080-1234-5678','人事','高田'),
        new Department('サンプルB','池袋','090-1234-5678','総務','田中'),
        new Department('サンプルC','新宿','070-1234-5678','営業','高橋'),
    );
    foreach ($departments as $department){
        $department->displayCompany();
        $department->displayDepartment();
        echo "\n";
    };
?>
