<?php
class UsersModel extends CI_Model
{
    public function simpan()
    {
        $data = [
            'tgl' => $this->input->post('tgl', true),
            'pemohon' => $this->input->post('pemohon', true),
            'divisi' => $this->input->post('divisi', true),
            'tipe' => $this->input->post('tipe', true),
            'metode' => $this->input->post('metode', true),
            'no_rek' => $this->input->post('no_rek', true),
            'penerima' => $this->input->post('penerima', true),
            'keterangan' => $this->input->post('keterangan', true),
            'lampiran' => $this->input->post('lampiran', true)
        ];
        $this->db->insert('users', $data);
    }
}
