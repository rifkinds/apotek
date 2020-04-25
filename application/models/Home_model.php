<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  public function getObat($kode_obat = FALSE){
    if($kode_obat == FALSE){
      $query = $this->db->query('SELECT * FROM obat');
      return $query->result();
    }
    
    $query = $this->db->query("SELECT * FROM obat WHERE kode_obat = '". $kode_obat ."'");
    return $query->row();
  }
  
  public function getAkun($id_admin = FALSE){
    if($id_admin == FALSE){
      $query = $this->db->query('SELECT * FROM admin');
      return $query->result();
    }
    
    $query = $this->db->query("SELECT * FROM admin WHERE id_admin = '". $id_admin ."'");
    return $query->row();
  }

  public function getReview($id_review = FALSE){
    if($id_review == FALSE){
      $query = $this->db->query('SELECT * FROM review');
      return $query->result();
    }
    
    $query = $this->db->query("SELECT * FROM review WHERE id_review = '". $id_review ."'");
    return $query->row();
  }

  public function checkKodeByKode($kode){
    $query = "SELECT * FROM pemesanan WHERE kode_pesan = '". $kode ."'";
    return $this->db->query($query);
  }

  public function checkKode($kode, $id){
    $query = "SELECT * FROM pemesanan WHERE kode_pesan = '". $kode ."' AND id_pemesan = '". $id ."'";
    return $this->db->query($query);
  }

  public function updateStatusPemesanan($kode){
    $tanggal = date('Y-m-d');
    $query = "UPDATE pemesanan SET status = 'L', konfirmasi = '". $tanggal ."' WHERE kode_pesan = '". $kode ."'";
    if($this->db->query($query))
      return true;
    else
      return false;
  }

  public function getUserInfo($id){
    $q = "SELECT * FROM pembeli WHERE id = '". $id ."'";
    $query = $this->db->query($q);
    return $query->row();
  }

  public function getPemesanan(){
    $q = "SELECT * FROM pemesanan";
    $query = $this->db->query($q);
    return $query->result();
  }

  public function getInfoPemesanan($kode){
    // SELECT a.nama, b.harga, b.tanggal, b.status
    // FROM pemesanan b
    // INNER JOIN pembeli a
    //   ON b.id_pemesan = a.id
    // WHERE b.kode_pesan = '1234567';

    $q = "SELECT a.nama, b.harga, b.tanggal, b.status
          FROM pemesanan b
          INNER JOIN pembeli a
            ON b.id_pemesan = a.id
          WHERE b.kode_pesan = '". $kode ."'";

    $query = $this->db->query($q);
    return $query->row();
  }

  public function getStatusPemesananByKode($kode, $id){
    $q = "SELECT * FROM pemesanan WHERE kode_pesan = '". $kode ."' AND id_pemesan = '". $id ."'";
    $query = $this->db->query($q);
    return $query->row();
  }

  public function getDetailPemesanan($kode){
    // SELECT o.nama, d.jumlah, o.harga, (d.jumlah * o.harga) AS subtotal
    // FROM detail_pemesanan d
    // INNER JOIN obat o
    //   ON d.kode_obat = o.kode_obat
    // WHERE d.kode_pesan = '12345';

    $q = "SELECT o.nama, d.jumlah, o.harga, (d.jumlah * o.harga) AS subtotal
          FROM detail_pemesanan d
          INNER JOIN obat o
            ON d.kode_obat = o.kode_obat
          WHERE d.kode_pesan = '". $kode ."'";

    $query = $this->db->query($q);
    return $query->result();
  }

  public function insertReview(){
    $id_review = $this->input->post('id_review');
    $nm_review = $this->input->post('nm_review');
    $nama = $this->input->post('nama');
    $kode_obat  = $this->input->post('kode_obat');
    $isi = $this->input->post('isi');

    $q = "INSERT INTO review VALUES
          ('$id_review', '$nm_review', '$nama', '$kode_obat', '$isi')";

    if($this->db->query($q))
      return true;
    else
      return false;
  }

  public function deleteReview($id_review){
    $q = "DELETE FROM review WHERE id_review = '$id_review'";
    if($this->db->query($q))
      return true;
    else
      return false;
  }

  public function updateReview($id_review){
    $id_review = $this->input->post('id_review');
    $nm_review = $this->input->post('nm_review');
    $nama = $this->input->post('nama');
    $kode_obat  = $this->input->post('kode_obat');
    $isi = $this->input->post('isi');

    $q ="UPDATE review SET id_review = $id_review, nm_review = '$nm_review', nama = '$nama', kode_obat = '$kode_obat', isi = '$isi'
         WHERE id_review = $id_review";
    if($this->db->query($q))
      return true;
    else
      return false;
  }

}
