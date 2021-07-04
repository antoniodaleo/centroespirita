<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	
	function __construct(){
		parent::__construct();

		$this->load->library(array('form_validation', 'session'));
		$this->load->helper('form');
	}

	public function Contato()
	{
		$data['title'] = "Mãos de Luz | Contato";
		$data['description'] = "Entre em contato conosco com o Mãos de Luz.";
		$data['formErrors'] = null;

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('assunto', 'Assunto', 'trim|required|min_length[5]',array('required' => 'O campo Mensagem tem que conter pelo menos 05 caractéres.'));
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required|min_length[20]',array('required' => 'O campo Mensagem tem que conter pelo menos 20 caractéres.'));


		if($this->form_validation->run() == FALSE) {
			$data['formErrors'] = validation_errors();
		} else{
			$formData = $this->input->post();
			$emailStatus = $this->SendEmailToAdmin($formData['email'],$formData['nome'],"gcmlcaridade@gmail.com","GCML",$formData['assunto'],$formData['mensagem'],$formData['email'],$formData['nome']);
			if($emailStatus){
				$this->session->set_flashdata('success_msg','Contato enviado com sucesso!');				
			}else{
				$data['formErrors'] = "Desculpe! não foi possível enviar o seu contato. Tente novamente mais tarde.";
			}

		}

		$this->load->view('commons/header',$data);
		$this->load->view('pages/contato');
		$this->load->view('commons/footer');
	}
	
    private function SendEmailToAdmin($from, $fromName, $to, $toName, $subject, $message, $reply = null, $replyName = null, $attach = null)
    {
        $this->load->library('email');
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $config['protocol'] = 'sendmail';
        $config['smtp_host'] = 'ssl://sendmail.gmail.com';
        $config['smtp_user'] = 'gcmlcaridade1234';
        $config['smtp_pass'] = 'gcml1234*';
        $config['newline'] = '\r\n';
        $config["smtp_port"] = '25';
        $this->email->initialize($config);
        $this->email->from($from, $fromName);
        $this->email->to($to, $toName);
        if($reply)
        $this->email->reply_to($reply, $replyName);
        if($attach)
        $this->email->attach($attach);
        $this->email->subject($subject);
        $this->email->message($message);
        if($this->email->send())
        return true;
        else
        return false;
    }
}