<?php
class model_transaksi extends ci_model
{
    function simpan_barang()
    {
        $namaTamu           =  $this->input->post('tamu');
        $nama_barang        =  $this->input->post('barang');
        $qty                =  $this->input->post('qty');  
        $idbarang    = $this->db->get_where('barang', array('nama_barang'=>$nama_barang))->row_array();
        $idkategori  = $this->db->get_where('kategori_barang', array('kategori_id'=>$idbarang['kategori_id']))->row_array();
        $data               = array(
                                'kategori_id'   => $idbarang['kategori_id'],
                                'nama_barang'   => $idbarang['nama_barang'],
                                'qty'           => $qty,
                                'nama_tamu'     => $namaTamu,
                                'harga'         => $idkategori['harga'],
                                'status'        => '0');
        $this->db->insert('transaksi_detail',$data);
    }

    function tampilkan_detail_transaksi()
    {       
        $query  ="SELECT td.t_detail_id, td.qty, td.harga, kb.nama_kategori, td.nama_barang, td.nama_tamu
                FROM transaksi_detail as td, kategori_barang as kb
                WHERE kb.kategori_id = td.kategori_id and td.status='0'";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('t_detail_id',$id);
        $this->db->delete('transaksi_detail');
    }
    
    function M_selesai_belanja($data)
    {
        $this->db->insert('transaksi',$data);
        $last_id=  $this->db->query("select transaksi_id from transaksi order by transaksi_id desc")->row_array(); //tbl transaksi
        $this->db->query("update transaksi_detail set transaksi_id='".$last_id['transaksi_id']."' where status='0'");//tbl transaksi_detail isi data transaksi_id
        //$bayar = $this->db->get_where('transaksi_detail' ,array('t_detail_id'=>$ss['t_detail_id']))->row_array();
        
        //$datas  = array('status'=>'0');
        
        //$this->db->update('transaksi_detail', $datas);

       //$this->db->query("update transaksi_detail set status='".$bayar['t_detail_id']."'where status='0'"); //tbl transaksi_detail set 1
    }

    // function deleteUser($userId, $userInfo)
    // {
    //     $this->db->where('userId', $userId);
    //     $this->db->update('tbl_users', $userInfo);
        
    //     return $this->db->affected_rows();
    // }

    function M_selesai_bayar($Lunas, $statusTrue)
    {
        $this->db->where('status', $Lunas);
        $this->db->update('transaksi_detail', $statusTrue);    
        return $this->db->affected_rows();
    }
    
    
    function laporan_default()
    {
        $query="SELECT t.tanggal_transaksi,o.nama_lengkap,sum(td.harga*td.qty) as total
                FROM transaksi as t,transaksi_detail as td,operator as o
                WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id
                group by t.transaksi_id";
        return $this->db->query($query);
    }
    
    function laporan_periode($tanggal1,$tanggal2)
    {
        $query="SELECT t.tanggal_transaksi,o.nama_lengkap,sum(td.harga*td.qty) as total
                FROM transaksi as t,transaksi_detail as td,operator as o
                WHERE td.transaksi_id=t.transaksi_id and o.operator_id=t.operator_id 
                and t.tanggal_transaksi between '$tanggal1' and '$tanggal2'
                group by t.transaksi_id";
        return $this->db->query($query);
    }
}