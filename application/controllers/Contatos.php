<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 30/08/2018
 * Time: 10:31
 */

class Contatos extends CI_Controller{

    public function index(){
        $contato['action'] = base_url('contatos/inserir');
        $data['content'] = $this->load->view('contatos/index', $contato, true);
        $this->load->view('main/index', $data);
    }

    public function listaContatos(){
        $this->load->model('ContatosModel', 'model');
        $contatos['lista'] = $this->model->selectAll();
        $data['content'] = $this->load->view('contatos/lista', $contatos, true);
        $this->load->view('main/index', $data);
    }

    public function inserir(){
        $this->load->model('ContatosModel', 'model');
        $this->model->insertContent();
        redirect(base_url('contatos/listaContatos'));
    }

    public function edicao($id){
        $this->load->model('ContatosModel', 'model');
        $contato = $this->model->select($id);
        $contato['action'] = base_url('contatos/atualizar/'.$id);
        $data['content'] = $this->load->view('contatos/index', $contato, true);
        $this->load->view('main/index', $data);
    }

    public function atualizar($id){
        $this->load->model('ContatosModel', 'model');
        $this->model->updateContent($id);
        redirect(base_url('contatos/listaContatos'));
    }

    public function deletar($id){
        $this->load->model('ContatosModel', 'model');
        $this->model->deleteContent($id);
        redirect(base_url('contatos/listaContatos'));
    }
}