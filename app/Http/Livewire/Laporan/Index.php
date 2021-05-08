<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;

use App\Models\{ Nilai, Karya, Sosial, Prestasi, Org_mhs as Org, Forum, Mentoring, Tahsin, Beasiswa };

use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\IOFactory;

class Index extends Component
{
    public function render()
    {
		$ui 		= new TemplateProcessor('exam.docx');
		$siswa  	= auth()->user();
		$semester	= request()->get('id');
		$forum   	= [];
		$sosial		= [];
		$karya  	= [];
		$org		= [];
		$prestasi	= [];
		$mentor		= [];
		$tahsin		= [];
		$beasiswa	= [];
		$nilai		= Nilai::where('semester_id', $semester)->where('users_id', $siswa->id)->first();
		
		foreach(Beasiswa::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($beasiswa,[
				'beasiswa_no' 	=> ($inc + 1),
				'beasiswa_nama' => $row->nama,
				'beasiswa_ket' 	=> $row->deskripsi
			]);
		}
		
		foreach(Mentoring::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($mentor,[
				'mentor_nama' 		=> $row->nama,
				'mentor_pertemuan' 	=> $row->jml_pertemuan,
				'mentor_kehadiran' 	=> $row->jml_kehadiran,
				'mentor_percen' 	=> $row->persen
			]);
		}
		
		foreach(Tahsin::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($tahsin,[
				'tahsin_level' 	=> $row->level,
				'tahsin_sk' 	=> $row->no_sk,
				'tahsin_nilai' 	=> $row->nilai
			]);
		}
		
		foreach(Karya::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($karya,[
				'karya_no' 		=> ($inc + 1),
				'karya_tgl' 	=> $row->tgl,
				'karya_judul' 	=> $row->judul,
				'karya_nama' 	=> $row->media,
				'karya_link' 	=> $row->link,
			]);
		}
		
		foreach(Prestasi::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($prestasi,[
				'prestasi_no' 			=> ($inc + 1),
				'prestasi_peringkat' 	=> $row->peringkat,
				'prestasi_nama' 		=> $row->nama,
				'prestasi_level' 		=> $row->level,
				'prestasi_penyelenggara'=> $row->penyelenggara_prestasi
			]);
		}
		
		foreach(Org::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($org, [
				'organisasi_no' 		=> ($inc + 1),
				'organisasi_nama' 		=> $row->nama,
				'organisasi_jabatan' 	=> $row->jabatan,
				'organisasi_masa' 		=> $row->masa_jabatan,
			]);
		}
		
		foreach(Sosial::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $inc => $row)
		{
			array_push($sosial, [
				'sosial_no' 			=> ($inc + 1),
				'sosial_tgl' 			=> $row->tgl,
				'sosial_nama' 			=> $row->nama,
				'sosial_penyelenggara'	=> $row->penyelanggara_sosial,
			]);
		}
		
		foreach(Forum::where('semester_id', $semester)->where('users_id', $siswa->id)->get() as $i => $row)
		{
			array_push($forum, [
				'forum_no' 		=> ($i + 1),
				'forum_tgl' 	=> $row->tgl,
				'forum_nama' 	=> $row->nama
			]);
		}
		
		
		$ui->setImageValue('pasfoto_siswa', [
			'path' => asset('storage').'/'.auth()->user()->profile_photo_path,
			'width' => 70,
			'height'=> 60,
			'ratio' => false
		]);
		
		$ui->setValues([
			'nama_siswa' 	=> $siswa->name,
			'nim_siswa'	 	=> $siswa->nim,
			'email_siswa'	=> $siswa->email,
			'alamat_siswa'  => $siswa->alamat,
			'telp_siswa' 	=> $siswa->hp,
			'angkatan_siswa'=> $siswa->angkatan,
			'ipk_siswa' 	=> $nilai->ipk,
			'ips_siswa' 	=> $nilai->ips,
			'semester'		=> $semester,
			'thn_akademik'	=> $siswa->angkatan
		]);
		
		$ui->cloneRowAndSetValues('forum_no', $forum);
		$ui->cloneRowAndSetValues('karya_no', $karya);
		$ui->cloneRowAndSetValues('sosial_no', $sosial);
		$ui->cloneRowAndSetValues('organisasi_no', $org);
		$ui->cloneRowAndSetValues('prestasi_no', $prestasi);
		$ui->cloneRowAndSetValues('mentor_nama', $mentor);
		$ui->cloneRowAndSetValues('tahsin_level', $tahsin);
		$ui->cloneRowAndSetValues('beasiswa_no', $beasiswa);
		
		
		header('Content-Disposition:attachment; filename=laporan.docx');
		$ui->saveAs('php://output');
		
		exit;
    }
}
