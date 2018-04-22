<?php  defined('BASEPATH') OR exit('No direct script access allowed');
class UploadFile_M extends CI_Model {
    /****************************************************/
    /*****for upload file from teacher assignment**********/
    function addFile ($data,$n){
                if(!empty($data)){
                $config['upload_path'] = 'assets/upload/';
                $config['allowed_types'] = 'xlsx|xls|csv';
               // $config['file_name'] = $_FILES['photo']['name'];
                $config['file_name'] = $n;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $photo = $uploadData['file_name'];
                }else{
                     $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                   // return false;
                }
            }else{
                    echo "dataEmpty";
               // return false;
            }
        return true;
        }   
}
?>