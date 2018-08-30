<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 30/08/2018
 * Time: 11:01
 */

class ContatosModel extends CI_Model {

    public function getDataForm(){
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $data['mensagem'] = $this->input->post('mensagem');
        return $data;
    }

    public function insertContent(){
        $data = $this->getDataForm();
        $this->db->insert('contato', $data);
    }

    public function deleteContent($id){
        $this->db->where('id', $id)->delete('contato');
    }

    public function updateContent($id){
        $data = $this->getDataForm();
        $this->db->where('id', $id);
        $this->db->update('contato', $data);
    }

    public function selectAll(){
        return $this->db->get('contato')->result_array();
    }

    public function select($id){
        return $this->db->where('id', $id)->get('contato')->result_array()[0];
    }
}