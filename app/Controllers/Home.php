<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function profil()
    {
        return view('profil');
    }

    public function pendidikan()
    {
        return view('pendidikan');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function spcp()
    {
        return view('spcp');
    }

    public function detail_berita($id)
    {
        // data dummy, bisa dikembangkan pake Database
        $dataBerita = [
            1 => [
                'judul' => 'IPDN Untuk Negeri, Aceh Mari Bangkit Bersama',
                'tgl'   => '03 February 2026',
                'img'   => base_url('assets/img/Acehipdn.jpeg'),
                'isi'   => 'Aceh (03/02/2026), Genap 1 bulan sudah misi kemanusiaan praja IPDN dan ASN Kemendagri membantu masyarakat Aceh Tamiang membangun kembali sistem birokrasi pasca bencana banjir bandang berlangsung. Sejumlah 861 orang praja dan 273 ASN Kemendagri ditambah 2 orang Wakil Rektor IPDN dengan total 1.136 orang yang terbentuk dalam Satuan Tugas Pemulihan Bencana Aceh hadir membantu masyarakat disana untuk pemulihan wilayah. Total 38 gedung di Komplek Kantor Pemerintahan Aceh Tamiang yang terdiri atas 32 kantor dinas pemerintahan, 3 sekolah dan 3 gedung serbaguna serta 42 hektar lahan berhasil dibersihkan untuk dapat difungsikan kembali oleh masyarakat sekitar.

                        Mendagri Tito Karnavian yang hadir di Aceh untuk memimpin upacara penutupan kegiatan misi kemanusiaan ini mengatakan, tujuan utama kehadiran praja IPDN difokuskan pada kegiatan pembersihan dan revitalisasi kantor-kantor layanan publik yang terdampak. “Penugasan ini bukan hanya misi kemanusiaan semata, tapi juga bentuk nyata dari pelatihan kepemimpinan yang merupakan bagian dari kurikulum IPDN. Mereka berhadapan langsung dengan masalah yang riil dilapangan”, ujarnya. Dari 18 Kabupaten/Kota terdampak bencana banjir, praja dan ASN Kemendagri fokus membantu di 6 lokasi yakni Aceh Tengah, Aceh Tamiang, Aceh Timur, Aceh Utara, Bireun dan Pidie Jaya.

                        Menurutnya, pemulihan pemerintahan merupakan indikator utama kebangkitan suatu daerah pasca bencana, ”Jadi praja terlebih dahulu fokus membersihkan kantor-kantor dinas pemerintahan. Kita fokus pada kantor sekaligus membangkitkan semangat rekan-rekan ASN untuk bekerja kembali, karena pemerintahan yang pulih akan menguatkan kordinasi, pengambilan keputusan dan pelayanan publik yang nantinya akan juga membantu memulihkan ekonomi”, tuturnya. Itulah yang meinisiasi Kemendagri untuk mengirimkan sejumlah praja dan ASN Kemendagri yang mempunyai spesialisasi di bidang pemerintahan ke Aceh. Tak hanya itu, Kemendagri juga memberikan bantuan berupa alat kerja diantaranya 52 laptop, 52 modem internet, 52 printer dan 2.535 stel pakaian pdh khaki untuk pegawai Pemkab disana.

                        Rektor IPDN, Dr. Halilul Khairi., M.Si, menuturkan praja dan ASN Kemendagri juga membantu dalam hal pendampingan percepatan penetapan APBD, pengelolaan barang milik daerah dan pendampingan pengelolaan administrasi perkantoran. Selain itu, disela-sela pembersihan, praja juga turut serta membantu trauma healing anak-anak korban bencana di Aceh Tamiang. “Selain bersih-bersih, praja juga membantu trauma healing warga khususnya anak-anak disana dengan cara mengajak bermain, membacakan cerita, membangun komunikasi yang tenang dan menyenangkan bersama warga disana disana”, ujar Rektor IPDN, Dr. Halilul Khairi., M.Si. Pendampingan ini bertujuan memulihkan mental anak-anak, sehingga tidak hanya bangunannya saja yang dibersihkan oleh praja tapi mental anaknya pun turut dipulihkan.
                        Selanjutnya IPDN-Kemendagri akan mengirimkan kembali sejumlah 779 orang yang terdiri atas 726 praja dan 53 ASN IPDN ke 12 Kecamatan dan 216 Gampong di Aceh Tamiang yang mulai bertugas pada tanggal 6 Februari s.d. 6 Maret 2026. “Satgas gelombang II ini difokuskan untuk melakukan pemulihan dini dengan membersihkan dan memfungsikan kembali fasilitas umum”, ujar Halilul.'
            ],
            2 => [
                'judul' => 'Calon Praja Pratama IPDN Angkatan XXXVI Siap Melaksanakan DIKSARMENDISPRA Selama 12 Hari',
                'tgl'   => '15 October 2025',
                'img'   => base_url('assets/img/pengukuhan.jpeg'),
                'isi'   => 'Jatinangor (30/09/2025), Bukan menjadi pejabat, calon praja IPDN dididik untuk menjadi pelayanan masyarakat. Hal ini disampaikan Rektor IPDN, Dr. Halilul Khairi., M,Si saat membuka kegiatan Pendidikan Dasar Mental dan Disiplin Praja (DIKSARMENDISPRA) IPDN Angkatan XXXVI di Lapangan Abdi Praja, IPDN Kampus Jatinangor. Kegiatan yang dilaksanakan setiap tahun ini bukan hanya sekedar acara ceremonial, Halilul menekankan bahwa kegiatan ini merupakan kegiatan yang bertujuan untuk menanamkan nilai-nilai dasar sebagai pelayanan masyarakat.
                        Kegiatan yang diikuti oleh calon praja pratama akan berlangsung selama 12 hari. “Semua calon praja yang berada disini memiliki status yang sama yakni calon pelayanan masyarakat. Oleh sebab itu, kalian (calon praja) harus memahami dan menerapkan hakikat pelayanan. Melayani masyarakat yakni membuat masyarakat menjadi berdaya dan sejahtera”, ujarnya.
                        Selama Diksarmendispra, para calon praja diajarkan peraturan baris-berbaris, pembentukan mental, peraturan urusan dinas dalam, tata krama praja, peraturan penghormatan, tata upacara, ketentuan defile dan lain sebagainya. “Mereka disini dibentuk karakternya agar memiliki sikap dan perilaku yang tegas dan humanis yang tentunya seimbang dengan knowledge dan kondisi jasmani yang mumpuni”, ujarnya.
                        Masih menurutnya, kampus IPDN dapat dikatakan mewah atau besar jika mereka dapat menanamkan kepada praja untuk dapat paham betul hati nurani rakyat. Praja IPDN ini merupakan cerminan, gambaran utuh dari kehebatan IPDN. Maka praja IPDN harus memiliki sikap yang tangguh, pantang menyerah, disiplin tinggi dan selalu taat pada peraturan baik pada saat pendidikan maupun setelah lulus dari pendidikan. “Kalian harus cerdas, berhati nurani dan yang paling penting pintar menyelesaikan atau mencari solusi dari masalah-masalah publik. Belajar dengan baik di kampus ini, sehingga kelak kalian menjadi abdi masyarakat yang benar-benar ada untuk masyarakat”. Tutur Halilul.'
            ],
            3 => [
                'judul' => 'Calon Praja Pratama IPDN Angkatan XXXVI Siap Melaksanakan DIKSARMENDISPRA Selama 12 Hari',
                'tgl'   => '30 September 2025',
                'img'   => base_url('assets/img/prestasi.jpeg'),
                'isi'   => 'Jatinangor (15/10/2025), Sejumlah 1.058 putra/i bangsa terpilih yang telah berhasil bersaing dengan 31.321 pendaftar IPDN kini resmi dilantik menjadi Praja Pratama IPDN Angkatan XXXVI Tahun 2025. Upacara pengukuhan praja pratama ini dipimpin langsung oleh Menteri Dalam Negeri yang diwakilkan oleh Wakil Menteri Dalam Negeri, Akhmad Wiyagus. Praja Pratama yang dikukuhkan tahun ini terdiri atas 745 putra dan 313 putri. Wamendagri dalam sambutannya kembali mengingatkan dan menegaskan kepada praja pratama untuk menolak dan menjauhi tindakan kekerasan, “Tindakan tegas akan diberikan kepada siapapun yang terbukti melakukan kekerasan”, ujarnya.

                        Selain larangan tindakan kekerasan, Wamendagri juga menekankan terkait semangat kebersamaan, gotong royong dan toleransi, “Kalian akan menjadi aktor pemersatu, perekat persatuan dan kesatuan Bangsa Indonesia, oleh karena itu jaga etika, norma dan perilaku kalian”, tuturnya. Beliau juga memberikan arahan kepada IPDN untuk meningkatkan penguasaan teknologi informasi, penguasaan bahasa asing dan fokus untuk meraih program studi lanjutan ke luar negeri melalui jalur LPDP.

                        Praja pratama Angkatan XXXVI yang diberi nama “Harsha Ksatrya” yang berarti ksatria yang gembira atau pelindung kebahagiaan ini sebelumnya telah mengikuti tahapan awal pembinaan. Menurut Rektor IPDN, Dr. Halilul Khairi., M.Si setelah lolos seleksi, mereka langsung melaksanakan kegiatan Pengenalan Kehidupan Kampus Dan Budaya Akademik (PKKBA) dan Pendidikan Dasar Mental dan Disiplin Praja (DIKSARMENDISPRA) sebagai pemahaman awal kehidupan kampus dan pembentukan mental, sikap dan kepribadian praja. “Nantinya adik-adik praja ini akan memulai awal perkuliahan pada tanggal 20 Oktober 2025 dan disini lah nantinya akan kami bentuk dan bekali mereka dengan nilai-nilai Asthabrata yang menjadi dasar dan semangat pengabdian pamong praja”, ujarnya.'
            ]
        ];

        // Kirim data berdasarkan ID yang diklik
        $data['berita'] = $dataBerita[$id];
        return view('detail_berita', $data);
    }
}
