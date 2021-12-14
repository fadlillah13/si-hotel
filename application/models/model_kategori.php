<?php
class Model_kategori extends CI_Model{
    
    function tampil_data()
  {
    $query= "SELECT b.barang_id, b.nama_barang, kb.nama_kategori, kb.harga
            FROM barang as b, kategori_barang as kb
            WHERE b.kategori_id=kb.kategori_id"; 
     return $this->db->query($query);
  } 
    
  function tampilkan_data()
  {    
    return $this->db->get('kategori_barang');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from kategori_barang");
  }     
     
    function post(){
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori'),
           'harga' => $this->input->post('harga')
                    );
        $this->db->insert('kategori_barang',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori'),
           'harga'  =>  $this->input->post('harga')
                    );
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('kategori_barang',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('kategori_id'=>$id);
        return $this->db->get_where('kategori_barang',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('kategori_id',$id);
        $this->db->delete('kategori_barang');
    }
}