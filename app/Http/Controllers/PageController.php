<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function dataFilm()
    {
        return [
            ['judul' => 'Love, Chunibyo & Other Delusions', 'genre' => 'Comedy', 'harga' => 35000, 'deskripsi' => 'Anime yang menceritakan kehidupaan seseorang yang ingin memulai hidup baru di bangku SMA sebagai siswa biasa tidak seperti masa lalunya yang merasa kalau dia itu adalah seorang "Dark Flame Master", akan tetapi dia bertemu dengan sesama siswa baru yang ternyata masih memiliki kepribadian yang sama seperti dia yang masa lalu.', 'gambar' => 'Love, Chunibyo & Other Delusions.jpg'],
            ['judul' => 'Tamako Love Story', 'genre' => 'Romance', 'harga' => 35000, 'deskripsi' => 'Seiring berlalunya musim, akhir tahun ketiga dan terakhir Mochizou Ooji semakin dekat. Ia bercita-cita untuk belajar di universitas di Tokyo, namun dengan harus meninggalkan orang-orang tercinta—termasuk gebetan masa kecilnya yang dicintai, Tamako Kitashirakawa. Karena tidak ada rencana seperti itu untuk masa depan, Tamako hanya akan tinggal di kota untuk bekerja di toko mochi sederhana milik keluarganya.', 'gambar' => 'Tamako Love Story.jpg'],
            ['judul' => "Frieren:Beyond Journey's End", 'genre' => 'Adventure', 'harga' => 50000, 'deskripsi' => 'Selama pencarian selama satu dekade untuk mengalahkan Raja Iblis, anggota kelompok pahlawan—Himmel sendiri, pendeta Heiter, prajurit kurcaci Eisen, dan penyihir elf Frieren—membangun ikatan melalui petualangan dan pertempuran, menciptakan kenangan berharga yang tak terlupakan bagi sebagian besar dari mereka.', 'gambar' => 'Frieren.jpg'],
            ['judul' => 'Kaguya-Sama:Love Is War-The First Kiss That Never Ends', 'genre' => 'Romance', 'harga' => 45000, 'deskripsi' => 'Setelah ciuman pertama mereka, Kaguya Shinomiya dan Miyuki Shirogane tidak yakin bagaimana posisi hubungan mereka. Ketidakpastian yang mengganggu apakah mereka bisa dianggap pasangan resmi memicu masalah baru saat Kaguya dan Shirogane berjuang untuk merapikan perasaan mereka.', 'gambar' => 'Love Is War.jpg'],
            ['judul' => 'Vinland Saga', 'genre' => 'Adventure', 'harga' => 40000, 'deskripsi' => 'Thorfinn muda tumbuh dengan mendengarkan kisah para pelaut tua yang telah menjelajahi lautan dan mencapai tempat legenda, Vinland. Dikatakan bahwa tempat itu hangat dan subur, tempat di mana tidak perlu bertarung—sama sekali tidak seperti desa beku di Islandia tempat dia lahir, dan tentu saja tidak seperti kehidupannya saat ini sebagai tentara bayaran. Perang sekarang adalah rumahnya. Meski ayahnya pernah berkata, "Kamu tidak punya musuh, tidak ada yang punya. Tidak ada seorang pun yang boleh disakiti," saat ia tumbuh, Thorfinn tahu bahwa kenyataannya tidak jauh dari itu.', 'gambar' => 'Vinland Saga.jpg'],
            ['judul' => 'Gintama: The Final', 'genre' => 'Comedy', 'harga' => 50000, 'deskripsi' => 'Dua tahun telah berlalu setelah invasi Tendoshuu ke Terminal Pusat O-Edo. Sejak saat itu, Yorozuya berpisah jalan. Melihat kembalinya Utsuro, Gintoki Sakata mulai mensurvei garis ley Bumi untuk mencari jejak Altana milik pria itu. Setelah bertemu dengan sisa-sisa Tendoshuu—yang terus berusaha mencari keabadian—Gintoki kembali ke Edo.', 'gambar' => 'Gintama.jpg'],
            ['judul' => 'Chainsaw Man Movie: Reze-hen', 'genre' => 'Action', 'harga' => 50000, 'deskripsi' => 'Meski menghadapi tantangan langsung setelah menjadi pemburu iblis di Biro Keamanan Publik, Denji dengan cepat beradaptasi dengan kehidupan dan tanggung jawab barunya. Saat kekacauan dari cobaan pertama Denji dengan Keamanan Publik mereda, pemburu iblis elit Makima memutuskan untuk mengajak Denji berkencan. Meskipun kencan itu memperkuat rasa sayangnya pada Makima dan dia bersumpah tidak akan jatuh cinta pada orang lain, Denji segera mendapati dirinya dalam situasi sulit ketika dia bertemu dengan seorang pekerja kafe yang tampak polos bernama Reze.', 'gambar' => 'Chainsaw.jpg'],
            ['judul' => 'Mob Psycho 100', 'genre' => 'Action', 'harga' => 40000, 'deskripsi' => 'Shigeo "Mob" Kageyama, siswa kelas delapan, telah menggali sumber kemampuan psikis batinnya sejak usia muda. Namun kekuatan itu dengan cepat menjadi beban ketika dia menyadari potensi bahaya dalam kemampuannya. Memilih untuk menekan kekuatannya, satu-satunya kegunaan Mob saat ini adalah untuk mengesankan gebetan lamanya, Tsubomi, yang segera bosan dengan trik yang sama.', 'gambar' => 'Mob Psycho.jpg']
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'username' => $request->query('username', 'Tamu'),
            'jumlahFilm' => count($this->dataFilm()),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        return view('pengelolaan', [
            'username' => $request->query('username', 'Tamu'),
            'film' => $this->dataFilm(),
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username', 'Tamu'),
            'toko' => [
                'nama' => 'Bawang Nobar',
                'alamat' => 'Jember, Lobby Fasilkom',
                'tentang' => 'Tempat sewa kaset Anime ataupun nonton bareng ditempat.',
            ],
        ]);
    }
}