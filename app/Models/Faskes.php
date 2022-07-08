<?php

namespace App\Models;

use CodeIgniter\Model;

class Faskes extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'faskes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'alamat', 'latlong', 'jenis_faskes_id', 'deskripsi', 'skor_rating', 'foto1', 'foto2', 'foto3', 'kecamatan_id', 'website', 'jumlah_dokter', 'jumlah_pegawai'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getAllFaskes()
    {
        return $this->select('jenis_faskes.nama as nama_faskes, kecamatan.nama as nama_kecamatan, faskes.*')->join('jenis_faskes', 'faskes.jenis_faskes_id=jenis_faskes.id')->join('kecamatan', 'faskes.kecamatan_id=kecamatan.id')->findAll();
    }

    public function countAllFaskes()
    {
        return $this->countAll();
    }

    public function search($keyword)
    {
        return $this->select('jenis_faskes.nama as nama_faskes, kecamatan.nama as nama_kecamatan, faskes.*')->join('jenis_faskes', 'faskes.jenis_faskes_id=jenis_faskes.id')->join('kecamatan', 'faskes.kecamatan_id=kecamatan.id')->like('faskes.nama', $keyword)->get()->getResultArray();
    }
}
