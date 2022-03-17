<?php
class Form {

    public  $archive_path='archivio/';

    public function __construct($path = ''){
       if(!empty($path)){ 
           $this->archive_path=$path;
       }
        if (!file_exists($this->archive_path)) {
            mkdir($this->archive_path, 0777, true);
        }
    }
    public function display(){
        $html='<form action="" method="post" enctype="multipart/form-data">';
        $html.='nome<input type="text" name="name" ><br>';
        $html.='<input type="file" name="file" ><br>';
        $html.='urgente<input type="checkbox" name="urgente"  ><br>';
        $html.='<input type="submit"  >';
        $html.='</form>';
        return $html;
    }
    public function save(){
        //print_r($_POST); die;
        $data['name'] = trim($_POST['name']);
        $data['urgente'] = empty($_POST['urgente']) ? false : true ;
        $data['file'] = $this->archive_path .uniqid() . $_FILES['file']['name'];
     

        if (move_uploaded_file($_FILES['file']['tmp_name'],  $data['file'])){
            return $this->_save($data);
        } else {
            return ['status'=>'KO', 'message'=>'unable to save uploaded file'];
        }

    }
    private function _save($data){
        $id =uniqid();
        $storage= $this->archive_path . $id . '.json';
        $json_data=json_encode($data);
        if (file_put_contents($storage,$json_data)){
            return  ['status'=>'OK', 'message'=>'', 'id'=> $id];
        } else {
            return  ['status'=>'KO', 'message'=>'unable to save data file'];
        }
    }
    public function list(){
        $html='<ul>';
        $files=glob($this->archive_path .'/*.json');
        foreach($files as $file){
            $data_json= file_get_contents($file);
            $data=json_decode($data_json,1);
            $html.='<li>' . $data['name']. '<a href="'.$data['file'].'" target="blank"> apri</a></li>';
        }
        $html.='<ul>';
        return $html;


    }
    public function list_by_id($id){
        $file = $this->archive_path . $id . '.json';
        $data_json= file_get_contents($file);
        $data=json_decode($data_json,1);

        $html=  $data['name']. '<a href="'.$data['file'].'" target="blank"> apri</a>';
        return $html;


    }

}