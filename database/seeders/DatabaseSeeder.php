<?php

namespace Database\Seeders;

use App\Models\Belt;
use Illuminate\Database\Seeder;
use App\Models\Registration;
use App\Models\User;
use App\Models\Nilaisiswa;
use App\Models\Schedule;
use App\Models\Coach;
use App\Models\Day;
use App\Models\Socialsharing;
use App\Models\History;
use App\Models\Dojang;
use App\Models\Religion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // User::create([
        //     'name' => 'Aji',
        //     'email' => 'aji@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'febi',
        //     'email' => 'febi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Registration::factory(5)->create();

        Registration::create([
            'user_id' => 1,
            'nama' => 'Mohammad Fajar Alfarizy',
            'no_tlp' => '081230019040',
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '03-06-1999',
            'jkel' => 'Laki-laki',
            'umur' => '22',
            'agama' => 'Islam',
            'alamat' => 'Jakarta, Indonesia',
            'tmpt_latihan' => 'Buahati Islamic School 1',
            'sabuk' => 'DAN III',
            'rw_penyakit' => 'Asma',
            'beratbadan' => '75',
            'sertifikat' => ''
        ]);

        Registration::create([
            'user_id' => 2,
            'nama' => 'Febrianti Fatikasari',
            'no_tlp' => '081230019050',
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '21-02-1999',
            'jkel' => 'Perempuan',
            'umur' => '22',
            'agama' => 'Islam',
            'alamat' => 'Jakarta, Indonesia',
            'tmpt_latihan' => 'Buahati Islamic School 2',
            'sabuk' => 'DAN II',
            'rw_penyakit' => '-',
            'beratbadan' => '75',
            'sertifikat' => ''
        ]);

        Registration::create([
            'user_id' => 3,
            'nama' => 'Kevin Samuel',
            'no_tlp' => '081230011213',
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '21-02-1999',
            'jkel' => 'Laki-laki',
            'umur' => '22',
            'agama' => 'Katolik',
            'alamat' => 'Jakarta, Indonesia',
            'tmpt_latihan' => 'Sekolah BHK',
            'sabuk' => 'DAN I',
            'rw_penyakit' => '-',
            'beratbadan' => '75',
            'sertifikat' => ''
        ]);


        Nilaisiswa::create([
            'registration_id' => 1,
            'user_id' => 1,
            'nama' => 'Mohammad Fajar Alfarizy',
            'kelas' => '1A',
            'kyorugi' => 99,
            'poomsae' => 99,
            'kyukpa' => 99,
            'naikke' => 'Sabuk Hijau (Geup 7)'
        ]);

        Nilaisiswa::create([
            'registration_id' => 1,
            'nama' => 'Mohammad Fajar Alfarizy',
            'user_id' => 1,
            'kelas' => '1A',
            'kyorugi' => 88,
            'poomsae' => 88,
            'kyukpa' => 88,
            'naikke' => 'Sabuk Hijau Strip (Geup 6)'
        ]);

        Nilaisiswa::create([
            'registration_id' => 2,
            'user_id' => 2,
            'nama' => 'Febrianti Fatikasari',
            'kelas' => '2A',
            'kyorugi' => 88,
            'poomsae' => 79,
            'kyukpa' => 99,
            'naikke' => 'Sabuk Kuning (Geup 9)'
        ]);

        Nilaisiswa::create([
            'registration_id' => 2,
            'user_id' => 2,
            'nama' => 'Febrianti Fatikasari',
            'kelas' => '2A',
            'kyorugi' => 89,
            'poomsae' => 90,
            'kyukpa' => 98,
            'naikke' => 'Sabuk Kuning Strip (Geup 8)'
        ]);

        Schedule::factory(5)->create();

        // Schedule::create([
        //     'nama_pelatih' => 'Mohammad Fajar Alfarizy',
        //     'nama_sekolah' => 'Buahati Islamic School',
        //     'alamat_sekolah' => 'Jakarta, Indonesia',
        //     'hari' => 'Senin',
        //     'jam' => '07.00'
        // ]);

        // Schedule::create([
        //     'nama_pelatih' => 'Febrianti Fatikasari',
        //     'nama_sekolah' => 'Global Islamic School',
        //     'alamat_sekolah' => 'Jakarta, Indonesia',
        //     'hari' => 'Minggu',
        //     'jam' => '16.00'
        // ]);

        Coach::create([
            'nama' => 'Mohammad Fajar Alfarizy',
            'umur' => 22,
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '03-06-1999',
            'jkel' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jakarta, Indonesia',
            'no_tlp' => '081230019040',
            'sabuk' => 'DAN IX',
            'aboutme' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut provident consequuntur beatae facilis incidunt voluptates non mollitia alias, reprehenderit delectus.'
        ]);

        Coach::create([
            'nama' => 'Febrianti Fatikasari',
            'umur' => 22,
            'tmpt_lahir' => 'Jakarta',
            'tgl_lahir' => '21-02-1999',
            'jkel' => 'Perempuan',
            'agama' => 'Islam',
            'alamat' => 'Jakarta, Indonesia',
            'no_tlp' => '081230019050',
            'sabuk' => 'DAN IV',
            'aboutme' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repudiandae nulla, consequatur possimus voluptate ab inventore eum impedit molestiae quod numquam cum quaerat in illo voluptatum hic? Mollitia, dolorum et?'
        ]);

        History::create([
            'title' => 'Sejarah Taekwondo',
            'body' => '<p>Taekwondo adalah suatu ungkapan fisik dari kehendak manusia untuk survival dan suatu aktivitas untuk memenuhi keinginan rohani dari seorang laki-laki. Pada dasarnya semua tindakan di (dalam) taekwondo dikembangkan dari naluri manusia untuk pertahanan diri diperkuat dengan unsur yang positif, dan pada akhirnya menjangkau status yang absolut untuk mengalahkan ego dan tiba pada suatu kesempurnaan, dengan demikian memberi olahraga suatu phylosophicaldimensi. </p>
            <p>Taekwondo mempunyai sejarah yang sangat panjang seiring dengan perjalanan sejarah bangsa Korea. Sebutan taekwondo sendiri baru dikenal sejak tahun 1954, merupakan modifikasi dan penyempurnaan dari berbagai beladiri tradisional Korea.</p>
            <p>Seiring dengan kemerdekaan Korea dari penjajahan Jepang, konsep baru tentang kebudayaan dan tradisi mulai bangkit. Banyak para ahli seni beladiri mendirikan sekolah/perguruan beladiri. Dengan meningkatnya populasi dan hubungan kerjasama yang baik antar perguruan beladiri, akhirnya diputuskan menyatukan berbagai nama seni beladiri Korea dengan sebutan : Taekwondo, pada tahun 1954. Pada tanggal,16 September 1961 sempat berubah menjadi Taesoodonamun kembali menjadi Taekwondo dengan organisasi nasionalnya bernama Korea Taekwondo Association(KTA).</p>
            <p>Pada tanggal 5 Agustus 1965, dan menjadi anggota Korean Sport Council, dan pada era tahun 1965 sampai 1970-an, KTA banyak menyelenggarakan berbagai acara pertandingan dan demonstrasi untuk berbagai kalangan pada skala nasional.</p>
            <p>Taekwondo berkembang dan menyebar diberbagai kalangan, hingga diakui sebagai disiplin/program resmi oleh pertahanan nasional Korea, menjadi olahraga wajib bagi tentara dan polisi. Tentara Korea yang berpartisipasi dalam perang Vietnam dibekali keahlian Taekwondo, saat itulah Taekwondo mendapatkan perhatian besar dunia. Nilai lebih ini menjadikan Taekwondo dinyatakan sebagaiolahraga nasional di Korea.</p>
            <p>Pada tahun 1972, Kukkiwon didirikan, sebagai markas besar Taekwondo, hal ini menjadi penting bagi pengembangan Taekwondo ke seluruh dunia. Kejuaran dunia yang pertama diadakan pada tahun 1973 di Kukkiwon, Seoul, Korea Selatan dan hingga sampai saat ini kejuaraan dunia rutin dilaksanakan setiap 2 tahun sekali.</p>
            <p>Untuk meningkatkan kualitas Instruktur Taekwondo di seluruh dunia, Kukkiwon membuka Taekwondo Academy, mulai tahun 1998 telah membuka Program pelatihannya bagi instrukturTaekwondo dari seluruh dunia. Kukkiwon, sebagai markas besar Taekwondo Dunia, pusat penelitian dan pengembangan Taekwondo, pelatihan para instruktur, dan sekretariat promosi ujian tingkat internasional.</p>
            <p>Pada tanggal, 28 Mei 1973 didirikan The World Taekwondo Federation( WTF ), dan sekarang mempunyai 156 negara anggota, Taekwondo telah dipraktekkan oleh lebih dari 50 juta orang di seluruh penjuru dunia, dan angka ini masih terus bertambah seiring perkembangan Taekwondo yang makin maju dan populer, hingga sampai ke Indonesia dan berkembang sekitar tahun 1970.</p>
            <p>Taekwondo telah dipertandingkan diberbagai pertandingan baik nasional maupun internasional di seluruh dunia, dan telah dipertandingkan sebagai ekshibisi pada Olympic Games 1988 Seoul dan telah dipertandingkan sebagai cabang olahraga resmi di Olympic Games 2000 Sydney. Pada Olympic Games di Athena tahun 2004 para atlet Indonesia belum bisa menyumbangkan medali, dan harus belajar banyak untuk mewujudkan medali di pesta olahraga tersebut.</p>',
            'pengarang' => '<footer class="blockquote-footer">D. Tirtawirya, “Perkembangan Dan Peranan Taekwondodalam Pembinaan Manusia Indonesia,” <cite title="Source Title">J. Olahraga Prestasi, vol. 1, no. 2, p. 115607, 2005</cite></footer>'
        ]);

        Socialsharing::factory(10)->create();

        Socialsharing::factory(5)->create();
        // Socialsharing::create([
        //     'nama' => 'Febrianti Fatikasari',
        //     'pesan' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius maxime libero excepturi a at veritatis blanditiis praesentium doloribus, placeat consequatur incidunt laborum soluta atque! Velit tempore ducimus maxime veritatis nam temporibus, officiis suscipit reiciendis molestias ratione dolorum asperiores ad praesentium optio necessitatibus labore iusto nesciunt! Dolore, earum? Animi, assumenda vero!'
        // ]);

        // Socialsharing::create([
        //     'nama' => 'Mohammad Fajar Alfarizy',
        //     'pesan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quas voluptates officia. Tempora tempore, quas incidunt, exercitationem velit atque porro quasi non ipsam fugit itaque, rem sed architecto impedit? Nulla voluptates eum expedita iste accusamus obcaecati consequuntur fugiat facilis eveniet rerum voluptate consequatur nobis minima et mollitia, sit animi perferendis!'
        // ]);

        Dojang::create([
            'nama_dojang' => 'Buahati Islamic School 1',
            'alamat_dojang' => 'Jl. Baing No.99, RT.11/RW.4, Kp. Tengah, Kec. Kramatjati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13540',
            'keterangan' => 'Buahati Islamic School merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'Buahati Islamic School 2',
            'alamat_dojang' => 'Jl. Gorda No.74 RT.7/RW.6, Lubang Buaya, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13810',
            'keterangan' => 'Buahati Islamic School merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'Buahati Islamic School Karawang',
            'alamat_dojang' => 'Jl. Lingkar Tanjungpura, Palumbonsari, Kec. Karawang Timur, Kabupaten Karawang, Jawa Barat 41314',
            'keterangan' => 'Buahati Islamic School merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => "SDSIT As-Sa'Adah",
            'alamat_dojang' => 'Jl. Jaha No.17a, RT.12/RW.1, Kalisari, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13790',
            'keterangan' => "SDSIT As-Sa'Adah merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif."
        ]);
        Dojang::create([
            'nama_dojang' => 'Insan Mandiri Islamic School',
            'alamat_dojang' => 'Jl. Kenanga 1 No.36, RT.4/RW.2, Kalisari, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13790',
            'keterangan' => 'Insan Mandiri Islamic School merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => "SD Al-Qur'an An-Nur",
            'alamat_dojang' => 'Jl. Caman Raya No.1, RT.001/RW.011, Jatibening, Kec. Pondokgede, Kota Bks, Jawa Barat 17412',
            'keterangan' => "SD Al-Qur'an An-Nur merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif."
        ]);
        Dojang::create([
            'nama_dojang' => 'SDIT Hidayatullah',
            'alamat_dojang' => 'Jl. Cilangkap Baru No.99, RT.4/RW.1, Cilangkap, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13870',
            'keterangan' => 'SDIT Hidayatullah merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'SDIT Global Mandani',
            'alamat_dojang' => 'Jl. Sumur Binong No.29, RT.002/RW.012, Jatirangga, Kec. Jatisampurna, Kota Bks, Jawa Barat 17434',
            'keterangan' => 'SDIT Global Mandani merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'MI Flowing Quran',
            'alamat_dojang' => 'Jl. Amd XII No.1, RT.4/RW.2, Makasar, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13570',
            'keterangan' => 'MI Flowing Quran merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'MIN 13 Jakarta',
            'alamat_dojang' => 'Jl. Al - Bariyah No.35, RT.11/RW.4, Kp. Tengah, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13540',
            'keterangan' => 'MIN 13 Jakarta merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'MI Nailufar',
            'alamat_dojang' => 'Perumahan Setu Indah Jl Setu Indah Raya, RT.7/RW.4, Setu, Cipayung, East Jakarta City, Jakarta 13880',
            'keterangan' => 'MI Nailufar merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'SMPIT At-Taufiq',
            'alamat_dojang' => 'Jl. Putri Tunggal No.14, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 16454',
            'keterangan' => 'SMPIT At-Taufiq merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'SDIT Hasanah Quranic',
            'alamat_dojang' => 'Jl. Kp. Padurenan No.03, RT.001/RW.010, Jatiluhur, Kec. Jatiasih, Kota Bks, Jawa Barat 16340',
            'keterangan' => 'SDIT Hasanah Quranic merupakan Sekolah Islam dengan pola pembelajaran yang islami dan menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);
        Dojang::create([
            'nama_dojang' => 'Sekolah BHK',
            'alamat_dojang' => 'Jl. Nagrak, Kec. Gn. Putri, Bogor, Jawa Barat 16968',
            'keterangan' => 'Sekolah BHK merupakan Sekolah Islam dengan pola pembelajaran yang menyenangkan. Character building (pembentukan karakter) mendapat perhatian khusus untk mengembangkan kepribadian melalui pembiasaan ibadah dan prilaku positif.'
        ]);

        Religion::create([
            'religion' => 'Islam'
        ]);
        Religion::create([
            'religion' => 'Protestan'
        ]);
        Religion::create([
            'religion' => 'Katolik'
        ]);
        Religion::create([
            'religion' => 'Hindu'
        ]);
        Religion::create([
            'religion' => 'Buddha'
        ]);
        Religion::create([
            'religion' => 'Kong Hu Cu'
        ]);

        Belt::create([
            'belt' => 'Sabuk Putih (Geup 10)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Kuning (Geup 9)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Kuning Strip (Geup 8)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Hijau (Geup 7)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Hijau Strip (Geup 6)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Biru (Geup 5)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Biru Strip (Geup 4)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Merah (Geup 3)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Merah Strip I (Geup 2)'
        ]);
        Belt::create([
            'belt' => 'Sabuk Merah Strip II (Geup 1)'
        ]);
        Belt::create([
            'belt' => 'DAN I'
        ]);
        Belt::create([
            'belt' => 'DAN II'
        ]);
        Belt::create([
            'belt' => 'DAN III'
        ]);
        Belt::create([
            'belt' => 'DAN IV'
        ]);
        Belt::create([
            'belt' => 'DAN V'
        ]);
        Belt::create([
            'belt' => 'DAN VI'
        ]);
        Belt::create([
            'belt' => 'DAN VII'
        ]);
        Belt::create([
            'belt' => 'DAN VIII'
        ]);
        Belt::create([
            'belt' => 'DAN IX'
        ]);

        Day::create([
            'day' => 'Senin'
        ]);
        Day::create([
            'day' => 'Selasa'
        ]);
        Day::create([
            'day' => 'Rabu'
        ]);
        Day::create([
            'day' => 'Kamis'
        ]);
        Day::create([
            'day' => "Jum'at"
        ]);
        Day::create([
            'day' => 'Sabtu'
        ]);
        Day::create([
            'day' => 'Minggu'
        ]);
    }
}
