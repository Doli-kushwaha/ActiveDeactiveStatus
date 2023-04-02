<?php 

/**
 * 
 */
class Status_Controller extends CI_Controller
{
	
	

public function index(){
	$data['usersdata'] = $this->db->get('user')->result_array();
	$this->load->view('admin/table_view',$data);
}


      public function active_status_user($id){
  $data['status'] = 0 ;
  $this->db->where('uid', $id);
  $result = $this->db->update('user',$data);
  if ($result == 1) {
                $this->session->set_flashdata('success', "Status has been change successfully");
            $this->session->set_flashdata('success', 'Status has been change successfully');
                
            } else {
              $this->session->set_flashdata('danger', 'Status not update successfully');
               $this->session->set_flashdata('danger', 'Status not update successfully');
                // echo"failed";
            }
            redirect('admin');
        }



public function deactiv_status_user($id){
  $data['status'] = 1 ;
  $this->db->where('uid',$id);
  $result = $this->db->update('user',$data);
  if ($result == 1) {
               $this->session->set_flashdata('success', "Status has been change successfully");
              $this->session->set_flashdata('success', 'Status has been change successfully');
            } else {
             $this->session->set_flashdata('danger', 'Status not update successfully');
               $this->session->set_flashdata('danger', 'Status not update successfully');
                // echo"failed";
            }
              redirect('admin/index');
        }












}



?>