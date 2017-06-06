
<?php
function del($tables){


if((int)$tables > 0){
          $this->info_model->delete($tables);
}

$data = $this->info_model->delete();
$data['query'] = $this->result_model->delete();

$this->load->view('info_view',$data);    
 }

 ?>