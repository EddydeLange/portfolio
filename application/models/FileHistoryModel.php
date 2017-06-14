<?php
class fileHistoryModel extends CI_Model
{

    public function getFiles()
    {
        $this->load->database();
        $this->db->where('file_active', 0);
        $imports = $this->db->get('imports')->result();
        
        return $imports;
    }
    
    public function deleteFile($id)
    {
        $this->load->database(); 
        $this->db->delete('imports', array('id' => $id));        
    }
    
}
