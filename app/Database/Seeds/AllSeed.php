<?php namespace App\Database\Seeds;
  
class AllSeed extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('User');
        $this->call('Nilai');
        $this->call('JenisFaskes');
        $this->call('Kecamatan');
        $this->call('Faskes');
        $this->call('Komentar');
    }
} 