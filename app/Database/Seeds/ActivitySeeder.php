<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Peluncuran Kecepatan Fiber Optik Baru',
                'status' => '1',
                'end_date' => '2023-08-01 10:00:00',
                'description' => 'Bergabunglah dengan kami dalam acara peluncuran kecepatan fiber optik baru kami yang revolusioner. Temukan pengalaman internet super cepat dengan teknologi terkini.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131229407353241741/054221200_1659505274-DCI-TX_01.jpeg',
            ],
            [
                'title' => 'Workshop Keamanan Jaringan',
                'status' => '1',
                'end_date' => '2023-08-02 15:30:00',
                'description' => 'Sertai workshop keamanan jaringan kami dan pelajari praktik terbaik untuk melindungi data dan privasi Anda dalam dunia digital yang semakin kompleks.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131229925261725716/kemananJaringan.jpg',
            ],
            [
                'title' => 'Sesi Tanya Jawab Internet of Things (IoT)',
                'status' => '1',
                'end_date' => '2023-08-03 09:45:00',
                'description' => 'Ikuti sesi tanya jawab tentang Internet of Things (IoT) dan dapatkan wawasan tentang bagaimana teknologi ini dapat mengubah cara kita berinteraksi dengan perangkat di sekitar kita.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131230175913316462/IOT.webp',
            ],
            [
                'title' => 'Pengenalan Layanan Cloud Computing Terbaru',
                'status' => '0',
                'end_date' => '2023-08-04 14:15:00',
                'description' => 'Bergabunglah dalam acara pengenalan layanan cloud computing terbaru kami. Pelajari keuntungan dan fitur-fitur canggih yang akan membantu mempercepat bisnis Anda ke tingkat berikutnya.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131230383044821012/CLOUD.jpg',
            ],
            [
                'title' => 'Webinar Kecepatan Internet di Daerah',
                'status' => '0',
                'end_date' => '2023-08-05 11:30:00',
                'description' => 'Saksikan webinar tentang kecepatan internet di daerah Anda. Temukan bagaimana kami meningkatkan infrastruktur untuk memberikan kecepatan internet yang belum pernah Anda alami sebelumnya.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131231021220765726/INTERNET.png',
            ],
            [
                'title' => 'Sesi Demonstrasi Teknologi 5G',
                'status' => '0',
                'end_date' => '2023-08-06 16:45:00',
                'description' => 'Jangan lewatkan sesi demonstrasi teknologi 5G kami. Lihatlah dengan mata kepala sendiri kecepatan dan kinerja luar biasa dari jaringan 5G yang akan segera tersedia.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131231021220765726/INTERNET.png',
            ],
            [
                'title' => 'Diskusi Panel Keamanan Data Pribadi',
                'status' => '0',
                'end_date' => '2023-08-07 13:00:00',
                'description' => 'Bergabunglah dalam diskusi panel kami tentang keamanan data pribadi. Dapatkan perspektif dari para ahli tentang bagaimana melindungi privasi Anda dalam era digital yang terus berkembang.',
                'img_path' => 'https://cdn.discordapp.com/attachments/944243031954034739/1131231238208897064/data-security.png',
            ],
        ];       

        $this->db->table('activity')->insertBatch($data);

    }
}