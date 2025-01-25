<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use GuzzleHttp\Promise\Utils;
use GuzzleHttp\Promise\Promise as PromisePromise;

class CuacaController extends Controller
{
    public function index(){
        $locations = [
        'Jakarta Pusat' => '31.71.01.1001',
        'Jakarta Utara' => '31.72.02.1005',
        'Jakarta Timur' => '31.75.01.1004',
        'Jakarta Barat' => '31.73.02.1003',
        'Jakarta Selatan' => '31.74.07.1006',
        'Bandung' => '32.73.19.1001',
        'Bekasi' => '32.75.01.1002',
        'Bogor' => '32.71.03.1002',
        'Cimahi' => '32.77.03.1004',
        'Cirebon' => '32.74.01.1001',
        'Depok' => '32.76.06.1001',
        'Sukabumi' => '32.72.02.1001',
        'Tasikmalaya' => '32.78.01.1002',
        'Banjar' => '32.79.01.1001',
        'Semarang' => '33.74.01.1001',
        'Surakarta' => '33.16.09.1013',
        'Magelang' => '33.71.03.1001',
        'Salatiga' => '33.73.01.1002',
        'Tegal' => '33.76.02.1005',
        'Yogyakarta' => '34.71.10.1001',
        'Surabaya' => '35.78.01.1001',
        'Malang' => '35.73.02.1001',
        'Kediri' => '35.71.02.1012',
        'Blitar' => '35.72.01.1001',
        'Mojokerto' => '35.16.08.2001',
        'Madiun' => '35.18.13.1009',
        'Pasuruan' => '35.14.01.20',
        'Probolinggo' => '35.74.04.1003',
        'Batu' => '35.79.01.1004',
        'Trenggalek' => '35.03.05.2001',
        'Jember' => '35.10.01.2001',
        'Probolinggo' => '35.12.01.2001',
        'Pekalongan' => '18.07.04.2005',
        'Jepara' => '33.20.03.2006',
        'Madiun' => '35.77.01.1002',
        'Banjarnegara' => '33.04.02.2002',
        'Cilacap' => '33.01.01.2003',
        'Tuban' => '35.23.16.2001',
        'Pekalongan' => '33.75.02.1004',
        'Lumajang' => '35.08.10.2001',
        'Sragen' => '33.14.10.1004',
        'Serang' => '36.04.09.2006',
        ];

        $client = new Client();
        $promises = [];
    
        // Buat request paralel
        foreach ($locations as $namaWilayah => $adm4) {
            $promises[$namaWilayah] = $client->getAsync("https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=$adm4");
        }
    
        // Tunggu semua request selesai
        $responses = Utils::settle($promises)->wait();
        
        $dataCuaca = [];

        foreach ($responses as $namaWilayah => $response) {
            if ($response['state'] === 'fulfilled') {
                $cuaca = json_decode($response['value']->getBody()->getContents(), true);

            if ($cuaca && isset($cuaca['data'][0]['cuaca'][0])) {
                // Ambil data cuaca
                $data = $cuaca['data'][0]['cuaca'][0][0];

                $dataCuaca[] = [
                    'nama_wilayah' => $namaWilayah,
                    'latitude' => $cuaca['data'][0]['lokasi']['lat'],
                    'longitude' => $cuaca['data'][0]['lokasi']['lon'],
                    'cuaca' => $data['weather_desc'] ?? 'Tidak ada data cuaca',
                    'suhu' => $data['t'],
                    'kecang' => $data['ws'],
                    'waktu_lokal' => $data['local_datetime']
                ];
            }
            }
        }
                // Kirim data cuaca ke view 'cuaca'
                return view('cuaca', ['dataCuaca' => $dataCuaca]);
    }
}
