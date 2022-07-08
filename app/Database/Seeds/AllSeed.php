<?php namespace App\Database\Seeds;
  
class AllSeed extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('Faskes');
        $this->call('JenisFaskes');
        $this->call('Kecamatan');
        $this->call('Komentar');
        $this->call('Nilai');
        $this->call('User');
    }
} 