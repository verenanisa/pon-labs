<!-- Schema Tabel Masyarakat -->
$table->id();
$table->unsignedInteger('nik');->unique();
$table->char('nama',100);
$table->string('nama_pengguna');->unique();
$table->enum('jenis_kelamin',['laki-laki','perempuan']);
$table->enum('agama',['islam','kristen','katolik','budha','hindu']);
$table->date('tanggal_lahir');
$table->string('tempat_lahir');
$table->string('alamat');
$table->string('sandi');
$table->enum('pendidikan_akhir',['tidak bersekolah','sd','smp','sma','s1','s2','s3']);
$table->string('email')->unique();
$table->string('nomor_telepon');
$table->string('pekerjaan');
$table->string('ektp');
$table->string('kk');
$table->string('foto');
$table->timestamps();

<!-- Schema Tabel Petugas -->
$table->id();
$table->unsignedInteger('nip');->unique();
$table->char('nama',100);
$table->string('nama_pengguna');->unique();
$table->enum('jenis_kelamin',['laki-laki','perempuan']);
$table->enum('agama',['islam','kristen','katolik','budha','hindu']);
$table->date('tanggal_lahir');
$table->string('tempat_lahir');
$table->string('alamat');
$table->string('sandi');
$table->enum('pendidikan_akhir',['tidak bersekolah','sd','smp','sma','s1','s2','s3']);
$table->string('email')->unique();
$table->string('nomor_telepon');
$table->string('foto');
<!-- Schema Tabel Pengajuan Pembuatan SKTM -->
$table->id('nomor_pengajuan');
$table->unsignedInteger('nik');->unique();
$table->string('surat_pengantar_rtrw')
$table->string('swafoto_ktp');
$table->timestamps('tanggal_pengajuan');
keterangan
status
<!-- Schema Tabel  Pengajuan Perbaikan KTP-->
nomor_pengajuan
nik
surat_pengantar_rtrw
akta_kelahiran
surat_nikah
ijazah_skkerja
skpemuka_agama
swafoto_ktp
tanggal_pengajuan
waktu_pengajuan
keterangan
status
<!-- Schema Tabel Perbaikan KK -->
nomor_pengajuan
nik
surat_pengantar_rtrw
akta_kelahiran
surat_nikah
ijazah_skkerja
skpemuka_agama
swafoto_ktp
tanggal_pengajuan
waktu_pengajuan
keterangan
status

<!-- Schema Tabel Berita -->
$table->id();
$table->string('judul_berita');
$table->text('excerpt');
$table->text('isi_berita');
$table->timestamp('tanggal_publikasi')->nullable();
$table->string('foto_berita');
$table->timestamps();

<!-- Schema Tabel Pengumuman -->
$table->id();
$table->string('judul_pengumuman');
$table->string('foto_pengumuman');
$table->timestamps('waktu_unggah');