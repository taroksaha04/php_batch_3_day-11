<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
       // $this->student = [10,20,'BITM',10.20,true,false];
        //echo $this->student[4];
//        foreach ($this->student as $item){
//            //echo $item.' ';
//
//        }
//        for showing index number with value

//        foreach ($this->student as $index => $student){
//            echo 'index no-'.$index. 'value -' .$student.'<br/>';
//        }


//        taking single student information & showing his information
//        $this->student = [
//            'name'  =>'Tarok',
//            'email' => 'tarok@gmail.com',
//            'mobile'=>'123456'
//        ];
//        echo $this->student['name'];


//        taking multiple student information & showing their information(Multidimensional array)
//        $this->student = [
//            0=>[
//            'name'  =>'Tarok',
//            'email' => 'tarok@gmail.com',
//            'mobile'=>'123456',
//        ],
//            1 => [
//            'name'  =>'Rahim',
//            'email' => 'Rahim@gmail.com',
//            'mobile'=>'456789'
//
//    ],
//    ];
//        for showing all array index information
        //foreach ($this->student as $key=>$item)
        {
            //  echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
        }


        //for showing only index 0 information

        //foreach ($this->student as $key=>$item)
        {
//            if($key==0){
//                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//                     break;
//                        }

        }

//        echo $this->student[0]['email'];
//        if i don't know the index nuber and key value without index(multidimentional array)

//        foreach($this->student as $key => $item)
//        {
//            foreach ($item as $value){
//                echo $value.' ';
//            }
//            echo '<br/>';
//
//        }


        $this->student = [
            0=>[
                'name'  =>'Tarok',
                'email' => 'tarok@gmail.com',
                'mobile'=>[
                     'mobile1' => '123456',
                     'mobile2' =>'245678'
                ],
            ],

            1 => [
                'name'  =>'Rahim',
                'email' => 'Rahim@gmail.com',
                'mobile'=>[
                    'mobile1' => '123456',
                     'mobile2' =>'245678'
                ],
            ],
            2=> 'BITM',
            3 => [
                'name'  =>'nabbu',
                'email' => 'nabbu@gmail.com',
                'mobile'=>[
                    'mobile1' => '123456',
                    'mobile2' =>'245678'
                ],

            ]
        ];
//              if any array index is a string here 2no index, and if phone number is multiple value
//        foreach($this->student as  $item)
//        {   if(is_array($item))
//            {
//                foreach ($item as $value){
//                    if(is_array($value))
//                    {
//                        foreach ($value as $v_value){
//                            echo $v_value;
//                        }
//                    }
//                    else
//                    {
//                        echo $value;
//                    }
//                }
//         else {
//             echo $item;
//    }
//            }
//
//
//            echo '<br/>';


//       }

//        if i need to see all the information of this array
        echo '<pre>';
       // print_r($this->student);
        var_dump($this->student);


    }


}