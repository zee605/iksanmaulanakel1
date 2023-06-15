<?php
class Vcontroller extends CI_Controller {
// user
    public function __construct() {
        parent::__construct();
        $this->load->model('Vmodel');
        $this->load->helper('url');
    }
// halaman pertama
    public function index() {
        $data['datafaskes']=$this->Vmodel->tampil_data()->result();
        $this->load->view('users/Vview',$data);
    }
// halaman kedua
    public function page_kedua($nilai) {
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datafaskes'] = $this->Vmodel->tampil_datafaskes($nilai); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/Vpage2',$data);
    }
// halaman daftar
    public function page_daftar($nilai){
        // takut kepake buat validasi langsung sisa kuota db 
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datafaskes'] = $this->Vmodel->tampil_datafaskes($nilai); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/Vdaftar',$data);
    }
// halaman gagal daftar
    public function page_gagal(){
        $this->load->view('users/authent/gagal');
    }
// halaman berhasil daftar
    public function page_sukses($nik){
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datauser'] = $this->Vmodel->tampil_datauser_drinik($nik); // Mengambil data pengguna berdasarkan ID
        $this->load->view('users/authent/sukses',$data);
    }
// proses daftar(pada tabel user dan update kuota pada tabel faskes)
    public function tambah_data(){
        $nik=$this->input->post('nik');
		$nama = $this->input->post('nama');
        $tl=$this->input->post('tl');
        $jk=$this->input->post('jk');
        $tal=$this->input->post('tal'); 
        $nt=$this->input->post('nt');
        $nw=$this->input->post('nw');
        $email=$this->input->post('email');
        $pekerjaan=$this->input->post('pekerjaan');
        $vk=$this->input->post('vk');
        $nf=$this->input->post('nf');
        $sk=$this->input->post('sk');

        if($nik==null || $nama==null || $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null|| $nama==null ){
            redirect('Vcontroller/page_gagal');
            return;
            
        }
         
        else{
		$data = array(
			'nik' => $nik,
            'nama' => $nama,
			'tempatlahir' => $tl,
            'jeniskelamin' => $jk,
            'tanggallahir' => $tal,
            'notelp' => $nt,
            'nowa' => $nw,
            'email' => $email,
            'pekerjaan' => $pekerjaan,
            'vaksinke' => $vk,
            'namafaskes' => $nf,
       	);
        // ini buat db sisakuota
           $where=array('namafaskes'=>$nf);
           $updatekuota=array('sisakuota'=>$sk);

        // $data berisi array data dan sampingnya nama table
		$this->Vmodel->input_data($data,'tbluser');
        $this->Vmodel->update_datakuota($where,'tblfaskes', $updatekuota);
        redirect("Vcontroller/page_sukses/$nik"); //*
    }
    }
     // admin
// halaman login admin
    public function page_admin_login(){
        // konsep associative array
        $data['dataadmin']=$this->Vmodel->tampil_data_admin()->result();
        $this->load->view('admin/Vadminlogin',$data);
        }
// validasi login
    public function validasi(){
        $uadmin=$this->input->post('uadmin');
        $pwadmin =$this->input->post('pwadmin');
        $name=$this->input->post('name');
        $pw=$this->input->post('pw');
        if($uadmin==$name&&$pwadmin==$pw){
            redirect("Vcontroller/page_admin");
        }
            redirect("Vcontroller/page_gagal");
    }
// halaman admin
     public function page_admin(){
        // konsep associative array
        $data['datafaskes']=$this->Vmodel->tampil_data()->result();
        $data['datauser']=$this->Vmodel->tampil_data_user()->result();  
        $this->load->view('admin/Vadmin',$data);
        }
// halaman tambah data faskes
    public function page_add_faskes(){
        $this->load->view('admin/formadd/Vaddfaskes');
    }
// proses tambah data faskes
    public function add_faskes(){
        $kf=$this->input->post('kf');
        $nf = $this->input->post('nf');
        $af=$this->input->post('af');
        $np=$this->input->post('np');
        $tanggal=$this->input->post('tanggal'); 
        $jv=$this->input->post('jv');
        $sk=$this->input->post('sk');
        
        $data = array(
            'kodefaskes'=>$kf,
            'namafaskes' => $nf,
            'alamatfaskes' => $af,
            'namapic' => $np,
            'date' => $tanggal,
            'jenisvaksin' => $jv,
            'sisakuota' => $sk,
        );
        $this->Vmodel->input_data($data,'tblfaskes');
        redirect("Vcontroller/page_admin"); 
        
    }

// halaman edit faskes(tabel faskes)
    public function page_edit_faskes($nilai){
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datafaskes'] = $this->Vmodel->tampil_datafaskes_darinofak($nilai); // Mengambil data pengguna berdasarkan ID 
        $this->load->view('admin/formedit/Veditfaskes',$data);
    }
// proses hapus (tabel faskes)
    public function delete_data_faskes($nilai){
        $this->Vmodel->deleteItemFaskes($nilai);
        redirect("Vcontroller/page_admin");     
    }
// proses update data faskes (tabel faskes)
    public function update_data_faskes(){
        $kf=$this->input->post('kf');
        $nf = $this->input->post('nf');
        $af=$this->input->post('af');
        $np=$this->input->post('np');
        $tanggal=$this->input->post('tanggal'); 
        $jv=$this->input->post('jv');
        $sk=$this->input->post('sk');
        
        $data = array(
            'namafaskes' => $nf,
            'alamatfaskes' => $af,
            'namapic' => $np,
            'date' => $tanggal,
            'jenisvaksin' => $jv,
            'sisakuota' => $sk,
        );
        // ini buat db sisakuota
        $where=array('kodefaskes'=>$kf);
        $this->Vmodel->update_datatable($where,'tblfaskes',$data);
        redirect("Vcontroller/page_admin");


    }
    
// halaman edit user (tabel user)
    public function page_edit_user($nik){
        $this->load->model('Vmodel'); // Memuat model 'User_model'
        $data['datauser'] = $this->Vmodel->tampil_datauser_drinik($nik); // Mengambil data pengguna berdasarkan ID 
        $this->load->view('admin/formedit/Vedituser',$data);
    }    
// proses hapus (tabel user) 
    public function delete_data_user($nilai){
        $this->Vmodel->deleteItemUser($nilai);
        redirect("Vcontroller/page_admin");     
    }
// proses update data user (tabel user)
    public function update_data_user(){
        $nik=$this->input->post('nik');
		$nama = $this->input->post('nama');
        $tl=$this->input->post('tl');
        $jk=$this->input->post('jk');
        $tal=$this->input->post('tal'); 
        $nt=$this->input->post('nt');
        $nw=$this->input->post('nw');
        $email=$this->input->post('email');
        $pekerjaan=$this->input->post('pekerjaan');
        $vk=$this->input->post('vk');

        $data = array(
            'nama' => $nama,
			'tempatlahir' => $tl,
            'jeniskelamin' => $jk,
            'tanggallahir' => $tal,
            'notelp' => $nt,
            'nowa' => $nw,
            'email' => $email,
            'pekerjaan' => $pekerjaan,
            'vaksinke' => $vk
       	);
        // ini buat db sisakuota
        $where=array('nik'=>$nik);
        $this->Vmodel->update_datatable($where,'tbluser',$data);
        redirect("Vcontroller/page_admin");


    }
}    

   



