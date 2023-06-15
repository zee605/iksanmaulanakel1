<?php
class Vmodel extends CI_Model {
    public $tblfaskes='tblfaskes'; 
    public $tbluser='tbluser';
    public $tbladmin='tbladmin';
    // nampilin data table faskes
    public function tampil_data(){
        return $this->db->get($this->tblfaskes);
    }
    // nampilin data admin
    public function tampil_data_admin(){
        return $this->db->get($this->tbladmin);
    }
    // nampilin data table user
    public function tampil_data_user(){
        return $this->db->get($this->tbluser);
    }
    // nampilin data tabel faskes (berdasarkan nomor nya)
    public function tampil_datafaskes($nilai){
        $query = $this->db->get_where('tblfaskes', array('kodefaskes' => $nilai)); // Mengambil data dari tabel 'faskes' berdasarkan ID
        return $query->row(); //
        // $query = $this->db->get();
        // return $query->result_array();
    }
    // input/add data (use in user+admin)
    public function input_data($data,$table){
        
            $this->db->insert($table,$data);
        
    } 
    // update data (kuota vaksin)
    function update_datakuota($where,$table,$data){
            $this->db->where($where);
            $this->db->update($table,$data);
    }
    // nampilin data user (berdasarkan nik) (use in user+admin)
    public function tampil_datauser_drinik($nik){
        $query = $this->db->get_where('tbluser', array('nik' => $nik)); // Mengambil data dari tabel 'users' berdasarkan ID
        return $query->row(); //
        // $query = $this->db->get();
        // return $query->result_array();
    } 
    // admin
    // delete data (faskes)
    public function deleteItemFaskes($nilai){
        $this->db->where('kodefaskes',$nilai);
        $this->db->delete('tblfaskes'); 
    }
    // delete data (user)
    public function deleteItemUser($nilai){
        $this->db->where('nik',$nilai);
        $this->db->delete('tbluser'); 
    }
    // tampil data faskes dari nomorfaskes
    public function tampil_datafaskes_darinofak($nofak){
        $query = $this->db->get_where('tblfaskes', array('kodefaskes' => $nofak)); // Mengambil data dari tabel 'users' berdasarkan ID
        return $query->row(); //
    }
    // update data table (table faskes+user)
    function update_datatable($where,$table,$data){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    
}