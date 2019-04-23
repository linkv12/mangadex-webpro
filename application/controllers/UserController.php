<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserController extends CI_Controller {
	public function Register()
	{
        // Nomor 4
        // Jika Password dan Re-Enter Password sama, maka:
        if($this->input->post('pass') === $this->input->post('re_pass')){
            // Panggil fungsi Register pada model User
						if($this->User->Register()) {
                // Jika Berhasil Register
                // Buat Flashdata dan arahkan kembali ke Landing
								//echo "Called register in UserController";
								$this->session->set_flashdata('SuccessReg', 'success');
								redirect('/Landing', 'refresh');
            } else {
                // Jika gagal
                // Buat Flashdata dan arahkan kembali ke Landing/Register
								$this->session->set_flashdata('FailReg', 'fail');
								redirect('/Landing/Register', 'refresh');
            }
        } else {
            // Jika Password berbeda
            // Buat flashdata
            // Arahkan kembali ke Landing/Register
						$this->session->set_flashdata('FailReg', 'fail');
						#echo $_SESSION['fail'];
						redirect('/Landing/Register', 'refresh');
        }
    }
    public function Signin() {
        // Nomor 7
        // Panggil fungsi findUser
        // Jika User ditemukan
				$data = $this->User->findUser();
        if($data['username'] !== NULL){
            // Jika rememberme dicentang
						#echo "data found in database</br>";
            if(isset($_POST['remember-me']) && $_POST['remember-me'] === 'on') {
							#echo "remember-me please</br>";
                // Buatkan cookie dengan isi username
                // Arahkan kembali ke Landing'
								$cookies =array('name' => 'logged',
							 								 'value' => $data['Username'],
														 	 'expire' => 3600);
								set_cookie($cookies);
								//echo $_POST['remember-me'];
								redirect ('/Temp_Landing', 'refresh');
            } else {
							#echo "dont remember-me</br>";
                // Buatkan session dengan isi username
                // Arahkan kembali ke Landing
								$data2 = $this->User->geUserData($data['username']);
								$this->session->set_userdata(array('successLogin' => $data['username'],
																									 'idScanGroup' => $data2['idScanGroup']));
								#echo $this->session->userdata('successLogin');
								redirect('/Temp_Landing', 'refresh');
            }
        } else {
            // Jika data tidak ditemukan
            // maka buat flashdata yang menandakan data tidak ditemukan
						#echo "data not found illegal</br>";
						$this->session->set_flashdata('falselogin', 'nodata');
						#echo $this->session->userdata('falselogin');
						redirect('/Landing/load_test_sign_in', 'refresh');
        }
    }
    public function Logout() {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie(logged);
            redirect('Temp_Landing/index', 'refresh');
        } else {
            session_destroy();
            redirect('Temp_Landing/index', 'refresh');
        }
    }
}
