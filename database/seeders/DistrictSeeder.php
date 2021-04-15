<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$districts = [
			[
				'name' => 'KAB. ACEH SELATAN',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH TENGGARA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH TIMUR',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH TENGAH',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH BARAT',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH BESAR',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PIDIE',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH UTARA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIMEULUE',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH SINGKIL',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BIREUEN',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH BARAT DAYA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GAYO LUES',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH JAYA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NAGAN RAYA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ACEH TAMIANG',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BENER MERIAH',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PIDIE JAYA',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BANDA ACEH',
				'province_id' => '1',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BIREUEN',
				'province_id' => '1',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA SABANG',
				'province_id' => '1',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA LHOKSEUMAWE',
				'province_id' => '1',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA LANGSA',
				'province_id' => '1',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SUBULUSSALAM',
				'province_id' => '1',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. TAPANULI TENGAH',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TAPANULI UTARA',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TAPANULI SELATAN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NIAS',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LANGKAT',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KARO',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DELI SERDANG',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIMALUNGUN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ASAHAN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LABUHANBATU',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DAIRI',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TOBA SAMOSIR',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANDAILING NATAL',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NIAS SELATAN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PAKPAK BHARAT',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HUMBANG HASUNDUTAN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SAMOSIR',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SERDANG BEDAGAI',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BATU BARA',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PADANG LAWAS UTARA',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PADANG LAWAS',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LABUHANBATU SELATAN',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LABUHANBATU UTARA',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NIAS UTARA',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NIAS BARAT',
				'province_id' => '2',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA MEDAN',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PEMATANG SIANTAR',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TANJUNG BALAI',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BINJAI',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TEBING TINGGI',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PADANGSIDIMPUAN',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA GUNUNGSITOLI',
				'province_id' => '2',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. PESISIR SELATAN',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SOLOK',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIJUNJUNG',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANAH DATAR',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PADANG PARIAMAN',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. AGAM',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LIMA PULUH KOTA',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PASAMAN',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN MENTAWAI',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DHARMASRAYA',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SOLOK SELATAN',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PASAMAN BARAT',
				'province_id' => '3',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PADANG',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SOLOK',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SAWAHLUNTO',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PADANG PANJANG',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BUKITTINGGI',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PAYAKUMBUH',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PARIAMAN',
				'province_id' => '3',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KAMPAR',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. INDRAGIRI HULU',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BENGKALIS',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. INDRAGIRI HILIR',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PELALAWAN',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ROKAN HULU',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ROKAN HILIR',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIAK',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUANTAN SINGINGI',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN MERANTI',
				'province_id' => '4',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PEKANBARU',
				'province_id' => '4',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA DUMAI',
				'province_id' => '4',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KERINCI',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MERANGIN',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SAROLANGUN',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BATANGHARI',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUARO JAMBI',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANJUNG JABUNG BARAT',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANJUNG JABUNG TIMUR',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUNGO',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TEBO',
				'province_id' => '5',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA JAMBI',
				'province_id' => '5',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SUNGAI PENUH',
				'province_id' => '5',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. OGAN KOMERING ULU',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUARA ENIM',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAHAT',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUSI RAWAS',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUSI BANYUASIN',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANYUASIN',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. OGAN KOMERING ULU TIMUR',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. OGAN KOMERING ULU SELATAN',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. OGAN ILIR',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. EMPAT LAWANG',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PENUKAL ABAB LEMATANG ILIR',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUSI RAWAS UTARA',
				'province_id' => '6',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PALEMBANG',
				'province_id' => '6',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PAGAR ALAM',
				'province_id' => '6',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA LUBUK LINGGAU',
				'province_id' => '6',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PRABUMULIH',
				'province_id' => '6',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BENGKULU SELATAN',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. REJANG LEBONG',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BENGKULU UTARA',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KAUR',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SELUMA',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUKO MUKO',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BENGKULU TENGAH',
				'province_id' => '7',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BENGKULU',
				'province_id' => '7',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. LAMPUNG SELATAN',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMPUNG TENGAH',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMPUNG UTARA',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMPUNG BARAT',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TULANG BAWANG',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANGGAMUS',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMPUNG TIMUR',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WAY KANAN',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PESAWARAN',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PRINGSEWU',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MESUJI',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TULANG BAWANG BARAT',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PESISIR BARAT',
				'province_id' => '8',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BANDAR LAMPUNG',
				'province_id' => '8',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA METRO',
				'province_id' => '8',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BANGKA',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BELITUNG',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGKA SELATAN',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGKA TENGAH',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGKA BARAT',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BELITUNG TIMUR',
				'province_id' => '9',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PANGKAL PINANG',
				'province_id' => '9',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BINTAN',
				'province_id' => '10',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KARIMUN',
				'province_id' => '10',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NATUNA',
				'province_id' => '10',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LINGGA',
				'province_id' => '10',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN ANAMBAS',
				'province_id' => '10',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BATAM',
				'province_id' => '10',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TANJUNG PINANG',
				'province_id' => '10',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. ADM. KEP. SERIBU',
				'province_id' => '11',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA ADM. JAKARTA PUSAT',
				'province_id' => '11',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA ADM. JAKARTA UTARA',
				'province_id' => '11',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA ADM. JAKARTA BARAT',
				'province_id' => '11',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA ADM. JAKARTA SELATAN',
				'province_id' => '11',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA ADM. JAKARTA TIMUR',
				'province_id' => '11',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BOGOR',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUKABUMI',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. CIANJUR',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANDUNG',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GARUT',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TASIKMALAYA',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. CIAMIS',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUNINGAN',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. CIREBON',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAJALENGKA',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMEDANG',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. INDRAMAYU',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUBANG',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PURWAKARTA',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KARAWANG',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BEKASI',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANDUNG BARAT',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PANGANDARAN',
				'province_id' => '12',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BOGOR',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SUKABUMI',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BANDUNG',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA CIREBON',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BEKASI',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA DEPOK',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA CIMAHI',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TASIKMALAYA',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BANJAR',
				'province_id' => '12',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. CILACAP',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANYUMAS',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PURBALINGGA',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANJARNEGARA',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEBUMEN',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PURWOREJO',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WONOSOBO',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAGELANG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOYOLALI',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KLATEN',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUKOHARJO',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WONOGIRI',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KARANGANYAR',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SRAGEN',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GROBOGAN',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BLORA',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. REMBANG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PATI',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUDUS',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JEPARA',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DEMAK',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SEMARANG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TEMANGGUNG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KENDAL',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BATANG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PEKALONGAN',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PEMALANG',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TEGAL',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BREBES',
				'province_id' => '13',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA MAGELANG',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SURAKARTA',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SALATIGA',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SEMARANG',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PEKALONGAN',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TEGAL',
				'province_id' => '13',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KULON PROGO',
				'province_id' => '14',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANTUL',
				'province_id' => '14',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GUNUNG KIDUL',
				'province_id' => '14',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SLEMAN',
				'province_id' => '14',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA YOGYAKARTA',
				'province_id' => '14',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. PACITAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PONOROGO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TRENGGALEK',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TULUNGAGUNG',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BLITAR',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEDIRI',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALANG',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LUMAJANG',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JEMBER',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANYUWANGI',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BONDOWOSO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SITUBONDO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PROBOLINGGO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PASURUAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIDOARJO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MOJOKERTO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JOMBANG',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NGANJUK',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MADIUN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAGETAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NGAWI',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOJONEGORO',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TUBAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMONGAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GRESIK',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGKALAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SAMPANG',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PAMEKASAN',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMENEP',
				'province_id' => '15',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA KEDIRI',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BLITAR',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA MALANG',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PROBOLINGGO',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PASURUAN',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA MOJOKERTO',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA MADIUN',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SURABAYA',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BATU',
				'province_id' => '15',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. PANDEGLANG',
				'province_id' => '16',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LEBAK',
				'province_id' => '16',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANGERANG',
				'province_id' => '16',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SERANG',
				'province_id' => '16',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA TANGERANG',
				'province_id' => '16',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA CILEGON',
				'province_id' => '16',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SERANG',
				'province_id' => '16',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TANGERANG SELATAN',
				'province_id' => '16',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. JEMBRANA',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BADUNG',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GIANYAR',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KLUNGKUNG',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGLI',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KARANGASEM',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BULELENG',
				'province_id' => '17',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA DENPASAR',
				'province_id' => '17',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. LOMBOK BARAT',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LOMBOK TENGAH',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LOMBOK TIMUR',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBAWA',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DOMPU',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BIMA',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBAWA BARAT',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LOMBOK UTARA',
				'province_id' => '18',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA MATARAM',
				'province_id' => '18',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BIMA',
				'province_id' => '18',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KUPANG',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TIMOR TENGAH SELATAN',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TIMOR TENGAH UTARA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BELU',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ALOR',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. FLORES TIMUR',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIKKA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ENDE',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NGADA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANGGARAI',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBA TIMUR',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBA BARAT',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LEMBATA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ROTE NDAO',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANGGARAI BARAT',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NAGEKEO',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBA TENGAH',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUMBA BARAT DAYA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANGGARAI TIMUR',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SABU RAIJUA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALAKA',
				'province_id' => '19',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA KUPANG',
				'province_id' => '19',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. SAMBAS',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MEMPAWAH',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SANGGAU',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KETAPANG',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SINTANG',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KAPUAS HULU',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BENGKAYANG',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LANDAK',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SEKADAU',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MELAWI',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KAYONG UTARA',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUBU RAYA',
				'province_id' => '20',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PONTIANAK',
				'province_id' => '20',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SINGKAWANG',
				'province_id' => '20',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KOTAWARINGIN BARAT',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KOTAWARINGIN TIMUR',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KAPUAS',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BARITO SELATAN',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BARITO UTARA',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KATINGAN',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SERUYAN',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUKAMARA',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LAMANDAU',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GUNUNG MAS',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PULANG PISAU',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MURUNG RAYA',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BARITO TIMUR',
				'province_id' => '21',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PALANGKARAYA',
				'province_id' => '21',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. TANAH LAUT',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KOTABARU',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANJAR',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BARITO KUALA',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TAPIN',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HULU SUNGAI SELATAN',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HULU SUNGAI TENGAH',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HULU SUNGAI UTARA',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TABALONG',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANAH BUMBU',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BALANGAN',
				'province_id' => '22',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BANJARMASIN',
				'province_id' => '22',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BANJARBARU',
				'province_id' => '22',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. PASER',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUTAI KARTANEGARA',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BERAU',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUTAI BARAT',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KUTAI TIMUR',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PENAJAM PASER UTARA',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAHAKAM ULU',
				'province_id' => '23',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA BALIKPAPAN',
				'province_id' => '23',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA SAMARINDA',
				'province_id' => '23',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BONTANG',
				'province_id' => '23',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BULUNGAN',
				'province_id' => '24',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALINAU',
				'province_id' => '24',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NUNUKAN',
				'province_id' => '24',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANA TIDUNG',
				'province_id' => '24',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA TARAKAN',
				'province_id' => '24',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BOLAANG MONGONDOW',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MINAHASA',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN SANGIHE',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN TALAUD',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MINAHASA SELATAN',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MINAHASA UTARA',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MINAHASA TENGGARA',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOLAANG MONGONDOW UTARA',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEP. SIAU TAGULANDANG BIARO',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOLAANG MONGONDOW TIMUR',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOLAANG MONGONDOW SELATAN',
				'province_id' => '25',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA MANADO',
				'province_id' => '25',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BITUNG',
				'province_id' => '25',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TOMOHON',
				'province_id' => '25',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA KOTAMOBAGU',
				'province_id' => '25',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. BANGGAI',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. POSO',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DONGGALA',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TOLI TOLI',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUOL',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MOROWALI',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGGAI KEPULAUAN',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PARIGI MOUTONG',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TOJO UNA UNA',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIGI',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANGGAI LAUT',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MOROWALI UTARA',
				'province_id' => '26',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA PALU',
				'province_id' => '26',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KEPULAUAN SELAYAR',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BULUKUMBA',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BANTAENG',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JENEPONTO',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TAKALAR',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GOWA',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SINJAI',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BONE',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAROS',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PANGKAJENE KEPULAUAN',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BARRU',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SOPPENG',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WAJO',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SIDENRENG RAPPANG',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PINRANG',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ENREKANG',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LUWU',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TANA TORAJA',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LUWU UTARA',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LUWU TIMUR',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TORAJA UTARA',
				'province_id' => '27',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA MAKASSAR',
				'province_id' => '27',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PARE PARE',
				'province_id' => '27',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA PALOPO',
				'province_id' => '27',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. KOLAKA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KONAWE',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUNA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUTON',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KONAWE SELATAN',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOMBANA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WAKATOBI',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KOLAKA UTARA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KONAWE UTARA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUTON UTARA',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KOLAKA TIMUR',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KONAWE KEPULAUAN',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MUNA BARAT',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUTON TENGAH',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BUTON SELATAN',
				'province_id' => '28',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA KENDARI',
				'province_id' => '28',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA BAU BAU',
				'province_id' => '28',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. GORONTALO',
				'province_id' => '29',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOALEMO',
				'province_id' => '29',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BONE BOLANGO',
				'province_id' => '29',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PAHUWATO',
				'province_id' => '29',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. GORONTALO UTARA',
				'province_id' => '29',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA GORONTALO',
				'province_id' => '29',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. MAMUJU UTARA',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAMUJU',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAMASA',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. POLEWALI MANDAR',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAJENE',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAMUJU TENGAH',
				'province_id' => '30',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALUKU TENGAH',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALUKU TENGGARA',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALUKU TENGGARA BARAT',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BURU',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SERAM BAGIAN TIMUR',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN ARU',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MALUKU BARAT DAYA',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BURU SELATAN',
				'province_id' => '31',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA AMBON',
				'province_id' => '31',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TUAL',
				'province_id' => '31',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. HALMAHERA BARAT',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HALMAHERA TENGAH',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HALMAHERA UTARA',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HALMAHERA SELATAN',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN SULA',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. HALMAHERA TIMUR',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PULAU MOROTAI',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PULAU TALIABU',
				'province_id' => '32',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA TERNATE',
				'province_id' => '32',
				'type' => 'kota'
			],
			[
				'name' => 'KOTA TIDORE KEPULAUAN',
				'province_id' => '32',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. MERAUKE',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JAYAWIJAYA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. JAYAPURA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NABIRE',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEPULAUAN YAPEN',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BIAK NUMFOR',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PUNCAK JAYA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PANIAI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MIMIKA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SARMI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KEEROM',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PEGUNUNGAN BINTANG',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. YAHUKIMO',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TOLIKARA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. WAROPEN',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. BOVEN DIGOEL',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAPPI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. ASMAT',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SUPIORI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAMBERAMO RAYA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAMBERAMO TENGAH',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. YALIMO',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. LANNY JAYA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. NDUGA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PUNCAK',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DOGIYAI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. INTAN JAYA',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. DEIYAI',
				'province_id' => '34',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA JAYAPURA',
				'province_id' => '34',
				'type' => 'kota'
			],
			[
				'name' => 'KAB. SORONG',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANOKWARI',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. FAK FAK',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. SORONG SELATAN',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. RAJA AMPAT',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TELUK BINTUNI',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TELUK WONDAMA',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. KAIMANA',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. TAMBRAUW',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MAYBRAT',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. MANOKWARI SELATAN',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KAB. PEGUNUNGAN ARFAK',
				'province_id' => '33',
				'type' => 'kabupaten'
			],
			[
				'name' => 'KOTA SORONG',
				'province_id' => '33',
				'type' => 'kota'
			],

		];

		foreach ($districts as $district) {
			District::create([
				'name' => strtolower($district['name']),
				'type' => strtolower($district['type']),
				'province_id' => $district['province_id'],
			]);
		}
	}
}
